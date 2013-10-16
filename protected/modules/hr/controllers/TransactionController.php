<?php

class TransactionController extends BaseController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters1()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'GeneratePdf', 'GenerateExcel'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }


    public function actionGetItems()
    {
        $sql = 'SELECT id, name as value FROM hr_transaction WHERE name LIKE :qterm ORDER BY name ASC';
        $command = Yii::app()->db->createCommand($sql);
        $qterm = $_GET['term'] . '%';
        $command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
        $result = $command->queryAll();
        echo CJSON::encode($result);
        exit;
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($batch_id)
    {
        $recordBatch = Batch::model()->find('id=' . $batch_id);
        $model = new Transaction;
        $modelShare = Share::model()->find();
        $getMAYBatch = Batch::model()->find('id=' . $batch_id);
        $monthAndYear = $getMAYBatch->name . ' năm ' . date('Y', strtotime($getMAYBatch->date));
        $sumAmtBuyOfBatch = Yii::app()->db->createCommand()
            ->select('SUM(t.amt) sumOfAmt, SUM(t.qty) sumOfQty')
            ->from('hr_transaction t')
            ->where('t.type = 0 AND t.batch_id=:batch_id', array(':batch_id' => $batch_id))
            ->queryRow();
        $amtOfStockToSell = $recordBatch->amt - $sumAmtBuyOfBatch['sumOfAmt'];
        $qtyOfStockToSell = $recordBatch->qty - $sumAmtBuyOfBatch['sumOfQty'];

        if (isset($_POST['Transaction'])) {
            $date = $_POST['Transaction']['date'];
            $cash = str_replace('.', '', $_POST['cash']);
            $model->attributes = $_POST['Transaction'];
            $model->batch_id = $batch_id;
            if ($model->validate()) {
                $model->type = 0;
                $model->note = 'Mua cổ phần';
                if ($model->save()) {
                    if ((int)$_POST['cash'] > 0) {
                        $modelPayment = new Payment();
                        $modelPayment->setAttributes(array('date' => $date, 'type' => '0', 'emp_id' => $model->emp_id, 'batch_id' => $batch_id, 'note' => 'Thanh toán', 'amt' => $cash, 'tran_id' => $model->id, 'type1' => 0));
                        $modelPayment->save(false);
                    }
                    Yii::app()->user->setFlash('success', '<strong>Mua cổ phần thành công.</strong>');
                    //$this->redirect(array('showEFB', 'batch_id' => $batch_id));
                }
            }
        }
        $this->render('create', array(
            'model' => $model,
            'modelShare' => $modelShare,
            'recordBatch' => $recordBatch,
            'monthAndYear' => $monthAndYear,
            'amtOfStockToSell' => $amtOfStockToSell,
            'qtyOfStockToSell' => $qtyOfStockToSell,
        ));
    }

    public function actionCreateSaleStock()
    {
        $model = new Transaction();
        $share = Share::model()->find();
        $sql = 'SELECT  t.emp_id, CONCAT(e.code, "-", e.firstname,e.middlename,e.lastname) as fullName,
                SUM(CASE t.type when 2 then -1 else 1 end * amt) as amtCurrent
                FROM hr_transaction t
                INNER JOIN hr_employee e ON t.emp_id = e.id
                GROUP BY  t.emp_id
                HAVING amtCurrent > 0';
        $command = Yii::app()->db->createCommand($sql);
        $listEmp = $command->queryAll();

        if (isset($_POST['Transaction'])) {
            $model->attributes = $_POST['Transaction'];
            $model->batch_id = 0;
            $model->note = 'Bán cổ phần';
            $model->type = 2;
            if ($model->validate()) {
                $model->batch_id = null;
                if ($model->save(false)) {
                    Yii::app()->user->setFlash('success', '<strong>Bán cổ phần thành công.</strong>');
                }
            }
        }
        $this->render('createSaleStock', array('model' => $model, 'listEmp' => $listEmp, 'share' => $share));
    }

    public function actionUpdateSaleStock($id)
    {
        $model = $this->loadModel($id);
        $share = Share::model()->find();
        $sql = 'SELECT id as emp_id, CONCAT(code, "-", firstname,middlename,lastname) as fullName
                FROM hr_employee';
        $command = Yii::app()->db->createCommand($sql);
        $listEmp = $command->queryAll();

        if (isset($_POST['Transaction'])) {
            $model->attributes = $_POST['Transaction'];
            if ($model->save(false)) {
                Yii::app()->user->setFlash('success', '<strong>Sửa thành công.</strong>');
                //$this->redirect(array('deSellStock&emp_id=' . $model->emp_id));
            }
        }

        $this->render('updateSaleStock', array(
            'model' => $model,
            'listEmp' => $listEmp,
            'share' => $share,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        $modelShare = Share::model()->find();
        $recordBatch = Batch::model()->find('id=' . $model->batch_id);
        $sumAmtBuyOfBatch = Yii::app()->db->createCommand()
            ->select('SUM(t.amt) sumOfAmt, SUM(t.qty) sumOfQty')
            ->from('hr_transaction t')
            ->where('t.type = 0 AND t.batch_id=:batch_id', array(':batch_id' => $model->batch_id))
            ->queryRow();
        $amtOfStockToSell = $recordBatch->amt - $sumAmtBuyOfBatch['sumOfAmt'];
        $qtyOfStockToSell = $recordBatch->qty - $sumAmtBuyOfBatch['sumOfQty'];
        $modelCash = Payment::model()->find('type = 0 and tran_id = ' . $id . '');

        if (isset($_POST['Transaction'])) {
            $date = $_POST['Transaction']['date'];
            $cash = str_replace('.', '', $_POST['cash']);
            $model->attributes = $_POST['Transaction'];
            if ($model->validate()) {
                if ($model->save(false)) {
                    $modelPayment = new Payment();
                    $paymentFind = Payment::model()->find('tran_id=:tran_id', array(':tran_id' => $model->id));
                    if ((int)$_POST['cash'] > 0) {
                        if (is_null($paymentFind)) {
                            $modelPayment->setAttributes(array('date' => $date, 'type' => '0', 'emp_id' => $model->emp_id, 'batch_id' => $model->batch_id, 'note' => 'Thanh toán', 'amt' => $cash, 'tran_id' => $model->id, 'type1' => 0));
                            if ($modelPayment->save(false)) {
                                Yii::app()->user->setFlash('success', '<strong>Sửa cổ phần thành công.</strong>');
                            }
                        } else {
                            $upD = $modelPayment->updateByPk($paymentFind->id, array('date' => date('Y-m-d', strtotime($date)), 'amt' => $cash));
                            if ($upD != 0) {
                                Yii::app()->user->setFlash('success', '<strong>Sửa cổ phần thành công.</strong>');
                            }
                        }
                    } else {
                        if (!is_null($paymentFind)) {
                            $paymentFind->delete();
                        }
                        Yii::app()->user->setFlash('success', '<strong>Sửa cổ phần thành công.</strong>');
                    }
                    Yii::app()->user->setFlash('success', '<strong>Sửa cổ phần thành công.</strong>');
                }
            }
        }

        $this->render('update', array(
            'model' => $model,
            'modelShare' => $modelShare,
            'modelCash' => $modelCash,
            'recordBatch' => $recordBatch,
            'amtOfStockToSell' => $amtOfStockToSell,
            'qtyOfStockToSell' => $qtyOfStockToSell,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $m = $this->loadModel($id);
            $tranID = Payment::model()->find('tran_id=:tran_id', array(':tran_id' => $id));
            if (!$tranID) {
                $m->delete();
            } else {
                $tranID->delete();
                $m->delete();
                //throw new CHttpException(500, 'Nhân viên này không thể xóa được vì ldkt.');
            }
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    public function actionDeleteST($id)
    {
        $t = $this->loadModel($id);
        $tranID = Payment::model()->find('tran_id=:tran_id', array(':tran_id' => $id));
        if (!$tranID) {
            $t->delete();
        } else {
            $tranID->delete();
            $t->delete();
            //throw new CHttpException(500, 'Nhân viên này không thể xóa được vì ldkt.');
        }
        //$this->redirect(array('indexSaleStock'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $session = new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();

        $model = new Transaction('search');
        $model->unsetAttributes(); // clear any default values

        if (isset($_GET['Transaction'])) {
            $model->attributes = $_GET['Transaction'];


            if (!empty($model->id)) $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->date)) $criteria->addCondition('date = "' . $model->date . '"');


            if (!empty($model->emp_id)) $criteria->addCondition('emp_id = "' . $model->emp_id . '"');


            if (!empty($model->qty)) $criteria->addCondition('qty = "' . $model->qty . '"');


            if (!empty($model->amt)) $criteria->addCondition('amt = "' . $model->amt . '"');


            if (!empty($model->batch_id)) $criteria->addCondition('batch_id = "' . $model->batch_id . '"');


            if (!empty($model->note)) $criteria->addCondition('note = "' . $model->note . '"');


            if (!empty($model->type)) $criteria->addCondition('type = "' . $model->type . '"');


        }
        //$session['Transaction_records']=Test::model()->findAll($criteria);
        $session['Transaction_dataProvider'] = $model->search();
        $dataProvider = new CActiveDataProvider('Transaction', array(
            'criteria' => array(
                'condition' => 'type is null', //Buy stock : null
            ),
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));
        $this->render('index', array(
            'model' => $model,
            'dataProvider' => $dataProvider,
        ));

    }

    public function actionIndexSaleStock()
    {
        $model = new Transaction();
        $sql = 'SELECT t.id, t.emp_id, e.code, CONCAT(e.firstname,e.middlename,e.lastname) as fullName, SUM(t.amt) as sumAmt, SUM(t.qty) as sumQty
                FROM hr_transaction as t
                INNER JOIN hr_employee e ON t.emp_id = e.id
                WHERE t.type=2
                GROUP BY t.emp_id';
        $dataProvider = new CSqlDataProvider($sql, array(
            'sort' => array(
                'attributes' => array(
                    'id', 'emp_id', 'code', 'fullName', 'sumAmt', 'sumQty',
                ),
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),

        ));
        $this->render('indexSaleStock', array('model' => $model, 'dataProvider' => $dataProvider));
    }

    public function actionDeSellStock($emp_id)
    {
        $emp = Employee::model()->find('id=:emp_id', array(':emp_id' => $emp_id));
        $dataProvider = new CActiveDataProvider('Transaction', array(
            'criteria' => array(
                'condition' => 'type = 2 and emp_id=' . $emp_id, //Sell stock : 2
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));

        $this->render('deSellStock', array(
            'fullName' => $emp['fullName'],
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionShowEFB($batch_id)
    {
        $dataProvider = new CActiveDataProvider('Transaction', array(
            'criteria' => array(
                'condition' => 'batch_id=' . $batch_id
            ),
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));
        $getMAYBatch = Batch::model()->find('id=' . $batch_id);
        $monthAndYear = $getMAYBatch->name . ' năm ' . date('Y', strtotime($getMAYBatch->date));

        $recordBatch = Batch::model()->find('id=' . $batch_id);
        $sumAmtBuyOfBatch = Yii::app()->db->createCommand()
            ->select('SUM(t.amt) sumOfAmt, SUM(t.qty) sumOfQty')
            ->from('hr_transaction t')
            ->where('t.type = 0 AND t.batch_id=:batch_id', array(':batch_id' => $batch_id))
            ->queryRow();
        $amtOfStockToSell = $recordBatch->amt - $sumAmtBuyOfBatch['sumOfAmt'];
        $qtyOfStockToSell = $recordBatch->qty - $sumAmtBuyOfBatch['sumOfQty'];

        $this->render('showEFB', array('dataProvider' => $dataProvider, 'monthAndYear' => $monthAndYear, 'batch_id' => $batch_id, 'amtOfStockToSell' => $amtOfStockToSell));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Transaction('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Transaction']))
            $model->attributes = $_GET['Transaction'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model = Transaction::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'transaction-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel()
    {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Transaction_records'])) {
            $model = $session['Transaction_records'];
        }
        else
            $model = Transaction::model()->findAll();


        Yii::app()->request->sendFile(date('YmdHis') . '.xls',
            $this->renderPartial('excelReport', array(
                'model' => $model
            ), true)
        );
    }

    public function actionGeneratePdf()
    {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once('tcpdf/tcpdf.php');
        require_once('tcpdf/config/lang/eng.php');


        if (isset($session['Transaction_dataProvider'])) {
            $dataProvider = $session['Transaction_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('Transaction');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
        ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Transaction Report');
        $pdf->SetSubject('Transaction Report');
        //$pdf->SetKeywords('example, text, report');
        $pdf->SetHeaderData('', 0, "Report", '');
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Example Report by " . Yii::app()->name, "");
        $pdf->setHeaderFont(Array('helvetica', '', 8));
        $pdf->setFooterFont(Array('helvetica', '', 6));
        $pdf->SetMargins(15, 18, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);
        $pdf->SetAutoPageBreak(TRUE, 0);
        $pdf->SetFont('dejavusans', '', 7);
        $pdf->AddPage();
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->LastPage();
        $pdf->Output("Transaction_002.pdf", "I");
    }

    public function actionGetFullNameEmployee()
    {
        $fullName = Employee::model()->find('id="' . $_POST['idEmployee'] . '"');
        echo CJSON::encode(array('fullNameEmployee' => $fullName->fullName));
        exit;
    }

    public function batchCode($data, $row, $all)
    {
        return $data->codeLastName . '/<strong>' . ($row + 1) . '</strong>';
    }

    public function cashBuy($data, $row, $all)
    {
        $payment = Payment::model()->find('tran_id=:tran_id', array(':tran_id' => $data->id));
        return is_null($payment['amt']) ? 0 : $payment['amt'];
    }
}