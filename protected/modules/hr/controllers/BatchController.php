<?php

class BatchController extends BaseController
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
        $sql = 'SELECT id, name as value FROM hr_batch WHERE name LIKE :qterm ORDER BY name ASC';
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
    public function actionCreate()
    {
        $model = new Batch;
        if (isset($_POST['Batch'])) {
            try {
                $model->attributes = $_POST['Batch'];
                $validate = $model->validate();
                if ($validate) {
                    $model->type = 1;
                    if ($model->save()) {
                        Yii::app()->user->setFlash('success', '<strong>Phát hành cổ phần thành công</strong>');
                        //$this->redirect(array('index'));
                    }
                }
            } catch (CException $e) {
                throw $e;
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionCreateCapitalIncrease()
    {
        $model = new Batch();
        if (isset($_POST['Batch'])) {
            try {
                $model->attributes = $_POST['Batch'];
                $model->type = 0;
                if ($model->validate()) {
                    if ($model->save(false)) {
                        Yii::app()->user->setFlash('success', '<strong>Tăng vốn thành công!</strong>');
                        //$this->redirect(array('indexCapitalIncrease'));
                    }
                }
            } catch (CException $e) {
                throw $e;
            }
        }
        $this->render('createCapitalIncrease', array('model' => $model));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        if (isset($_POST['Batch'])) {
            $amt = str_replace('.', '', $_POST['Batch']['amt']);
            $model->attributes = $_POST['Batch'];
            $model->date = $_POST['Batch']['date'];
            if ($model->save()) {
                Yii::app()->user->setFlash('success', '<strong>Sửa thành công</strong>');
                //$this->redirect(array('index'));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionUpdateCapitalIncrease($id, $row)
    {
        $model = $this->loadModel($id);
        $row = $row + 1;
        if (isset($_POST['Batch'])) {
            try {
                $model->attributes = $_POST['Batch'];
                if ($model->validate()) {
                    if ($model->save(false)) {
                        Yii::app()->user->setFlash('success', '<strong>Sửa thành công!</strong>');
                        //$this->redirect(array('indexCapitalIncrease'));
                    }
                }
            } catch (CException $e) {
                throw $e;
            }
        }

        $this->render('updateCapitalIncrease', array(
            'model' => $model,
            'row' => $row,
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
            try {
                $this->loadModel($id)->delete();
            } catch (CException $ex) {
                throw new CHttpException(500, 'Không thể xóa được vì đã có cổ đông mua cổ phần trong đợt phát hành này!');
            }

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider = new CActiveDataProvider('Batch', array(
            'criteria' => array(
                'condition' => 'type = 1', //1: batch, 0: capitalIncrease
            ),
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));

    }

    public function actionIndexCapitalIncrease()
    {
        $dataProvider = new CActiveDataProvider('Batch', array(
            'criteria' => array(
                'condition' => 'type = 0', //1: batch; 0: capitalIncrease
            ),
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));
        $this->render('indexCapitalIncrease', array('dataProvider' => $dataProvider));
    }

    public function actionDetailCapitalIncrease($CI_id)
    {
        $model = new Batch();
        $batch = Batch::model()->find('id=' . $CI_id . '');
        $share = Share::model()->find();
        $date = $batch->date;
        $amt = number_format($batch->amt, 0, ',', '.');
        $sumValueIC = $batch->amt;

        $rawData = Yii::app()->db->createCommand('SELECT  t.emp_id, e.code, CONCAT_WS(" ",e.firstname,e.middlename,e.lastname) as fullName, e.rateOfStock,
SUM(CASE t.type when 2 then -1 else 1 end * amt) as amtCurrent
FROM hr_transaction t
INNER JOIN hr_employee e ON t.emp_id = e.id
GROUP BY  t.emp_id
HAVING amtCurrent > 0')->queryAll();
        $dataProvider = new CArrayDataProvider($rawData, array(
            'id' => 'proFitGrid',
            'keys' => array(
                'sumValueIC' => $sumValueIC,
                'batch_id' => $CI_id,
            ),
            'sort' => array(
                'attributes' => array(
                    'emp_id', 'code', 'fullName', 'rateOfStock', 'amtCurrent'
                ),
            ),
            'pagination' => array(
                'pageSize' => 100,
            ),
        ));
        $employee = Yii::app()->db->createCommand()
            ->select('sum(e.rateOfStock) as sumRateOfStock, sum(e.qtyOfStock) as sumQtyOfStock')
            ->from('hr_employee e')
            ->queryAll();
        $ratePercentOfEmployee = $employee['0']['sumRateOfStock']; /// 100;
        $ratePercentOfCompany = 100 - $ratePercentOfEmployee;
        $sumCIOfEmp = $ratePercentOfEmployee * $batch->amt / 100;
        $sumCIOfComp = $ratePercentOfCompany * $batch->amt / 100;
        $sumCIOfEmp = number_format($sumCIOfEmp, 0, ',', '.');
        $ratePercentOfEmployee = number_format($ratePercentOfEmployee, 2, ',', '.');
        $ratePercentOfCompany = number_format($ratePercentOfCompany, 2, ',', '.');
        $sumCIOfComp = number_format($sumCIOfComp, 0, ',', '.');

        $this->render('detailCapitalIncrease', array(
            'dataProvider' => $dataProvider,
            'date' => $date,
            'sumCIOfEmp' => $sumCIOfEmp,
            'ratePercentOfEmployee' => $ratePercentOfEmployee,
            'sumCIOfComp' => $sumCIOfComp,
            'ratePercentOfCompany' => $ratePercentOfCompany,
            'amt' => $amt,
            'model' => $model,
            'CI_id' => $CI_id,
        ));
    }

    public function actionSubmitAcceptCI()
    {
        $share = Share::model()->find();
        $valueStock = $share->valueofstock;
        if (isset($_POST)) {
            $date = $_POST['date'];
            $batch_id = $_POST['CI_id'];
            $amt = $_POST['amt'];
            foreach ($_POST as $key => $val) {
                if (is_int($key)) {
                    $rate = Employee::model()->find('id=:id', array(':id' => $key));
                    $amtCI = $rate->rateOfStock * str_replace('.', '', $amt) / 100;
                    $tran = new Transaction();
                    $valNew = str_replace('.', '', $val);
                    $tran->setAttributes(array('date' => $date, 'emp_id' => $key, 'qty' => $amtCI / $valueStock, 'amt' => $amtCI, 'batch_id' => $batch_id, 'note' => 'Tăng vốn', 'type' => 1));
                    $tran->save(false);
                    if (!empty($val)) {
                        $pay = new Payment();
                        $pay->setAttributes(array('date' => $date, 'type' => 0, 'emp_id' => $key, 'batch_id' => $batch_id, 'note' => 'Thanh toán', 'amt' => $valNew, 'type1' => 1, 'tran_id' => $tran->id));
                        $pay->save(false);
                    }
                }
            }

            Yii::app()->user->setFlash('success', '<strong>Tăng vốn thành công.</strong>');
            $this->redirect(array('indexCapitalIncrease'));
        }
    }

    public function actionUpdateCI($emp_id, $batch_id)
    {
        $modelBatch = Batch::model()->find('id=' . $batch_id);
        $modelCash = Payment::model()->find('type=0 and emp_id="' . $emp_id . '" and batch_id="' . $batch_id . '"');
        $transaction = Transaction::model()->find('emp_id="' . $emp_id . '"and batch_id="' . $batch_id . '"');
        $valueOfCIOrr = $transaction->amt;
        $valueOfCI = number_format($transaction->amt, 0, ',', '.');

        if (isset($_POST['amt'])) {
            $amt = str_replace('.', '', $_POST['amt']);
            $paymentFind = Yii::app()->db->createCommand()
                ->select('p.id')
                ->from('hr_payment as p')
                ->where('emp_id=:emp_id and batch_id=:batch_id', array(':emp_id' => $emp_id, ':batch_id' => $batch_id))
                ->queryAll();
            if (is_null($amt) || $amt == 0) {
                if (!empty($paymentFind)) {
                    $payment = new Payment();
                    $payment->deleteByPk($paymentFind['0']['id']);
                }
                $this->redirect(array('detailCapitalIncrease&CI_id=' . $batch_id));
            } else {
                if (!empty($paymentFind)) {
                    $payment = new Payment();
                    $payment->updateByPk($paymentFind['0']['id'], array('amt' => $amt));
                } else {
                    $payment = new Payment();
                    $payment->setAttributes(array('date' => $modelBatch->date, 'type' => 0, 'emp_id' => $emp_id, 'batch_id' => $batch_id, 'note' => 'Tiền mặt', 'amt' => $amt, 'tran_id' => $transaction->id, 'type1' => 0));
                    $payment->save();
                }
                $this->redirect(array('detailCapitalIncrease&CI_id=' . $batch_id));
            }
        }

        $this->render('updateCI', array(
            'modelCash' => $modelCash,
            'valueOfCI' => $valueOfCI,
            'valueOfCIOrr' => $valueOfCIOrr
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Batch('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Batch']))
            $model->attributes = $_GET['Batch'];

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
        $model = Batch::model()->findByPk($id);
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
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'batch-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel()
    {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Batch_records'])) {
            $model = $session['Batch_records'];
        }
        else
            $model = Batch::model()->findAll();


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


        if (isset($session['Batch_dataProvider'])) {
            $dataProvider = $session['Batch_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('Batch');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
        ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Batch Report');
        $pdf->SetSubject('Batch Report');
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
        $pdf->Output("Batch_002.pdf", "I");
    }

    public function showLink($data, $row, $all)
    {
        $valueOfStart = Batch::model()->find('type=0');
        return $valueOfStart->id == $data->id ? $data->code : CHtml::link($data->code, Yii::app()->controller->createUrl('detailCapitalIncrease&CI_id=' . $data->id . ''), array('title' => 'Chi tiết đợt tăng vốn này'));
    }

    public function ratePercent($data, $row, $all)
    {
        return number_format($data['rateOfStock'], 2, ',', '.') . ' %';
    }

    public function valueOfProfit($data, $row, $All)
    {
        $employee = Employee::model()->find('id=:id', array(':id' => $data['emp_id']));
        $rateOfStock = $employee->attributes['rateOfStock']; /// 100;
        return ($rateOfStock * $All->grid->dataProvider->keys['sumValueIC']) / 100;
    }
}
