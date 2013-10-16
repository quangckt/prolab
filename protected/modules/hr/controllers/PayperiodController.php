<?php

class PayperiodController extends BaseController
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
        $sql = 'SELECT id, name as value FROM hr_payperiod WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new Payperiod;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Payperiod'])) {
            $model->attributes = $_POST['Payperiod'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
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
        $modelPayPeriod = new Payperiod();
        $ratePay = $model->rateloan;
        $payPeriodDate = null;
        $payPeriodName = null;

        if (isset($_GET['Payperiod']['rateloan'])) {
            $ratePay = $_GET['Payperiod']['rateloan'];
        }
        if (isset($_GET['Payperiod']['date'])) {
            $payPeriodDate = $_GET['Payperiod']['date'];
        }
        if (isset($_GET['Payperiod']['name'])) {
            $payPeriodName = $_GET['Payperiod']['name'];
        }

        $payPeriodDelete = Payperioddetail::model()->deleteAllByAttributes(array('payPeriod_id' => $id));

        $sql = 'SELECT sumT.emp_id, e.code, CONCAT(e.firstname,e.middlename,e.lastname) as fullName, (sumT.sumAmtT - IFNULL(sumP.sumAmtP,0) + IFNULL(sumPD.sumPeriod,0)) as payPeriod
FROM (SELECT t.*, SUM(case t.type when 2 then 0 else t.amt end) as sumAmtT FROM hr_transaction t GROUP BY t.emp_id) as sumT
LEFT JOIN (SELECT p.*, SUM(case p.type1 when 2 then 0 else p.amt end) as sumAmtP FROM hr_payment p GROUP BY p.emp_id) as sumP on sumT.emp_id = sumP.emp_id
LEFT JOIN (SELECT pd.*, SUM(case pd.type when 1 then pd.period else 0 end) as sumPeriod FROM hr_payperioddetail pd GROUP BY pd.emp_id) as sumPD on sumT.emp_id = sumPD.emp_id
INNER JOIN hr_employee e on sumT.emp_id = e.id
HAVING payPeriod > 0';
        $rawData = Yii::app()->db->createCommand($sql)->queryAll();
        $dataProvider = new CArrayDataProvider($rawData, array(
            'id' => 'proFitGrid',
            'keys' => array(
                'ratePay' => $ratePay,
                'period_id' => $id,
            ),
            'sort' => array(
                'attributes' => array(
                    'emp_id', 'code', 'fullName', 'payPeriod'
                ),
            ),
            'pagination' => array(
                'pageSize' => 100,
            ),
        ));
        $listArray = $dataProvider->getData(); // will return a list of arrays.

        $this->render('update', array(
            'model' => $model,
            'dataProvider' => $dataProvider,
            'listArray' => $listArray,
        ));
    }

    public function actionSubmitUpdatePP()
    {
        $data = $_POST;
        $idPay = $_POST['idPay'];
        $datePay = $_POST['datePay'];
        $datePayNew = date('Y-m-d', strtotime($_POST['datePay']));
        $ratePay = $_POST['ratePay'];
        $ratePayNew = str_replace(',', '.', $ratePay);
        $namePay = $_POST['namePay'];
        $listEmpPay = array();
        $listAllEmp = array();
        $listUnset = array();

        //split one array include all emp and empPay to two array: allEmp and empPay
        foreach ($data as $key => $val) {
            if (!is_numeric($key)) {
                $cutKey = strstr($key, '-', true);
                if (!empty($cutKey)) {
                    $listAllEmp[] = array(
                        'id' => $cutKey,
                        'value' => $val,
                    );
                }
            } else {
                $listEmpPay[] = array(
                    'id' => $key,
                    'value' => $val,
                );
            }
        }
        //check allEmp = empPay to get element array to one array: arrayUnset
        for ($i = 0; $i < count($listAllEmp); $i++) {
            foreach ($listEmpPay as $itemPay) {
                if ($itemPay['id'] == (int)$listAllEmp[$i]['id']) {
                    $listUnset[] = array(
                        'i' => $i,
                    );
                }
            }
        }
        //remove (unset) element array of listUnset from allEmp
        foreach ($listUnset as $item) {
            unset($listAllEmp[$item['i']]);
        }
        $payPeriod = Payperiod::model()->updateByPk($idPay, array('name' => $namePay, 'rateloan' => $ratePayNew, 'date' =>
        $datePayNew));
        //Insert to database: Pay = payCurrent + payPeriod //Nợ = nợ hiện tại + Lãi ==> insert record nợ lãi
        foreach ($listAllEmp as $item) {
            $period = $ratePayNew * $item['value'] / 100;
            $payPeriodDetail = new Payperioddetail();
            $payPeriodDetail->setAttributes(array('date' => $datePay, 'note' => 'Nợ lãi', 'period' => $period, 'payPeriod_id' => $idPay, 'emp_id' => $item['id'], 'type' => 1));
            $payPeriodDetail->save(false);
        }
        //Insert to database: PayPeriod //Trả lãi
        foreach ($listEmpPay as $item) {
            $periodNew = $ratePayNew * $item['value'] / 100;
            $payPeriodDetailPay = new Payperioddetail();
            $payPeriodDetailPay->setAttributes(array('date' => $datePay, 'note' => 'Trả lãi', 'period' => $periodNew, 'payPeriod_id' => $idPay, 'emp_id' => $item['id'], 'type' => 0));
            $payPeriodDetailPay->save(false);
        }
        Yii::app()->user->setFlash('success', '<strong>Cập nhật lãi thành công.</strong>');
        $this->redirect(array('index'));
    }

    public function ratePayUpdate($data, $row, $all)
    {
        $ratePay = $all->grid->dataProvider->keys['ratePay'];
        $ratePayNew = str_replace('.', ',', $ratePay);
        return is_null($ratePayNew) ? 0 : $ratePayNew . ' %';
    }

    public function valuePayUpdate($data, $row, $all)
    {
        $ratePay = str_replace(',', '.', $all->grid->dataProvider->keys['ratePay']);
        $valuePay = $ratePay * $data['payPeriod'] / 100;
        return empty($valuePay) ? 0 : $valuePay;
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
            $this->loadModel($id)->delete();

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
        $dataProvider = new CActiveDataProvider('Payperiod', array(
            'criteria' => array(
                'condition' => 'type=0',
            ),
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));

        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionShowEOP($period_id, $date, $name)
    {
        $sql = 'SELECT pd.id, emp.code, CONCAT_WS(" ",emp.firstname,emp.middlename,emp.lastname) as fullName, pd.date as pdDate, pd.period, pd.note
                FROM hr_payperioddetail as pd
                LEFT JOIN hr_employee as emp ON pd.emp_id=emp.id
                WHERE pd.payPeriod_id = :period_id';
        $dataProvider = new CSqlDataProvider($sql, array(
            'params' => array(
                ':period_id' => $period_id
            ),
            'sort' => array(
                'attributes' => array(
                    'code', 'fullName', 'pdDate', 'period', 'note'
                ),
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));

        $this->render('showEOP', array(
            'date' => $date,
            'name' => $name,
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionPayPeriod()
    {
        $modelPayPeriod = new Payperiod();
        $ratePay = null;
        $payPeriodDate = null;
        $payPeriodName = null;

        if (isset($_GET['Payperiod']['amt'])) {
            $ratePay = $_GET['Payperiod']['amt'];
        }
        if (isset($_GET['Payperiod']['date'])) {
            $payPeriodDate = $_GET['Payperiod']['date'];
        }
        if (isset($_GET['Payperiod']['name'])) {
            $payPeriodName = $_GET['Payperiod']['name'];
        }

        $sql = 'SELECT sumT.emp_id, e.code, CONCAT(e.firstname,e.middlename,e.lastname) as fullName, (sumT.sumAmtT - IFNULL(sumP.sumAmtP,0) + IFNULL(sumPD.sumPeriod,0)) as payPeriod
FROM (SELECT t.*, SUM(case t.type when 2 then 0 else t.amt end) as sumAmtT FROM hr_transaction t GROUP BY t.emp_id) as sumT
LEFT JOIN (SELECT p.*, SUM(case p.type1 when 2 then 0 else p.amt end) as sumAmtP FROM hr_payment p GROUP BY p.emp_id) as sumP on sumT.emp_id = sumP.emp_id
LEFT JOIN (SELECT pd.*, SUM(case pd.type when 1 then pd.period else 0 end) as sumPeriod FROM hr_payperioddetail pd GROUP BY pd.emp_id) as sumPD on sumT.emp_id = sumPD.emp_id
INNER JOIN hr_employee e on sumT.emp_id = e.id
HAVING payPeriod > 0';
        $rawData = Yii::app()->db->createCommand($sql)->queryAll();
        $dataProvider = new CArrayDataProvider($rawData, array(
            'id' => 'proFitGrid',
            'keys' => array(
                'ratePay' => $ratePay,
            ),
            'sort' => array(
                'attributes' => array(
                    'emp_id', 'code', 'fullName', 'payPeriod'
                ),
            ),
            'pagination' => array(
                'pageSize' => 100,
            ),
        ));
        $listArray = $dataProvider->getData(); // will return a list of arrays.

        $this->render('payPeriod', array(
            'modelPayPeriod' => $modelPayPeriod,
            'dataProvider' => $dataProvider,
            'listArray' => $listArray,
        ));
    }

    public function actionSubmitAcceptPP()
    {
        $data = $_POST;
        $datePay = $_POST['datePay'];
        $ratePay = $_POST['ratePay'];
        $ratePayNew = str_replace(',', '.', $ratePay);
        $namePay = $_POST['namePay'];
        $listEmpPay = array();
        $listAllEmp = array();
        $listUnset = array();

        //split one array include all emp and empPay to two array: allEmp and empPay
        foreach ($data as $key => $val) {
            if (!is_numeric($key)) {
                $cutKey = strstr($key, '-', true);
                if (!empty($cutKey)) {
                    $listAllEmp[] = array(
                        'id' => $cutKey,
                        'value' => $val,
                    );
                }
            } else {
                $listEmpPay[] = array(
                    'id' => $key,
                    'value' => $val,
                );
            }
        }
        //check allEmp = empPay to get element array to one array: arrayUnset
        for ($i = 0; $i < count($listAllEmp); $i++) {
            foreach ($listEmpPay as $itemPay) {
                if ($itemPay['id'] == (int)$listAllEmp[$i]['id']) {
                    $listUnset[] = array(
                        'i' => $i,
                    );
                }
            }
        }
        //remove (unset) element array of listUnset from allEmp
        foreach ($listUnset as $item) {
            unset($listAllEmp[$item['i']]);
        }
        $payPeriod = new Payperiod();
        $payPeriod->setAttributes(array('name' => $namePay, 'rateloan' => $ratePay, 'date' => $datePay, 'type' => 0));
        $payPeriod->save(false);
        //Insert to database: Pay = payCurrent + payPeriod //Nợ = nợ hiện tại + Lãi ==> insert record nợ lãi
        foreach ($listAllEmp as $item) {
            $period = $ratePayNew * $item['value'] / 100;
            $payPeriodDetail = new Payperioddetail();
            $payPeriodDetail->setAttributes(array('date' => $datePay, 'note' => 'Nợ lãi', 'period' => $period, 'payPeriod_id' => $payPeriod->id, 'emp_id' => $item['id'], 'type' => 1));
            $payPeriodDetail->save(false);
        }
        //Insert to database: PayPeriod //Lãi
        foreach ($listEmpPay as $item) {
            $periodNew = $ratePayNew * $item['value'] / 100;
            $payPeriodDetailPay = new Payperioddetail();
            $payPeriodDetailPay->setAttributes(array('date' => $datePay, 'note' => 'Trả lãi', 'period' => $periodNew, 'payPeriod_id' => $payPeriod->id, 'emp_id' => $item['id'], 'type' => 0));
            $payPeriodDetailPay->save(false);
        }
        Yii::app()->user->setFlash('success', '<strong>Trả lãi thành công.</strong>');
        $this->redirect(array('index'));
    }

    public function ratePay($data, $row, $all)
    {
        $ratePay = $all->grid->dataProvider->keys['ratePay'];
        return is_null($ratePay) ? 0 : $ratePay . ' %';
    }

    public function valuePay($data, $row, $all)
    {
        $ratePay = str_replace(',', '.', $all->grid->dataProvider->keys['ratePay']);
        $valuePay = $ratePay * $data['payPeriod'] / 100;
        return empty($valuePay) ? 0 : $valuePay;
    }

    public function actionAllPay()
    {
        $model = new Payperioddetail();
        $dataProvider = new CActiveDataProvider('Payment', array(
            'criteria' => array(
                'condition' => 'type1=3',
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));

        $this->render('allPay', array(
            'model' => $model,
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionPayPeriodLoan()
    {
        $model = new Payperioddetail();
        $lines_relation = new PayPeriodLineManager();
        $sql = 'SELECT sumT.emp_id, CONCAT(e.code,"-",e.firstname,e.middlename,e.lastname) as fullName, (sumT.sumAmtT - IFNULL(sumP.sumAmtP,0) + IFNULL(sumPD.sumPeriod,0)) as payPeriod
FROM (SELECT t.*, SUM(case t.type when 2 then 0 else t.amt end) as sumAmtT FROM hr_transaction t GROUP BY t.emp_id) as sumT
LEFT JOIN (SELECT p.*, SUM(case p.type1 when 2 then 0 else p.amt end) as sumAmtP FROM hr_payment p GROUP BY p.emp_id) as sumP on sumT.emp_id = sumP.emp_id
LEFT JOIN (SELECT pd.*, SUM(case pd.type when 1 then pd.period else 0 end) as sumPeriod FROM hr_payperioddetail pd GROUP BY pd.emp_id) as sumPD on sumT.emp_id = sumPD.emp_id
INNER JOIN hr_employee e on sumT.emp_id = e.id
HAVING payPeriod > 0;';
        $command = Yii::app()->db->createCommand($sql);
        $listEmp = $command->queryAll();

        if (isset($_POST['Payperioddetail'])) {
            $variable = $_POST['Payperioddetail'];
            foreach ($variable as $item) {
                $date = $item['date'];
                $amt = $item['amt'];
                $emp_id = $item['emp_id'];
                if (empty($item['date']) || is_null($item['emp_id']) || is_null($item['amt'])) {

                } else {
                    $modelNew = new Payment();
                    $modelNew->setAttributes(array('date' => $date, 'note' => 'Trả nợ', 'amt' => $amt, 'emp_id' => $emp_id, 'type' => 0, 'type1' => 3));
                    $modelNew->save(false);
                }
            }
            Yii::app()->user->setFlash('success', '<strong>Trả nợ thành công.</strong>');
            $this->redirect(array('allPay'));
        }

        $this->render('payPeriodLoan', array(
            'model' => $model,
            'lines_relation' => $lines_relation,
            'listEmp' => $listEmp,
        ));
    }

    public function actionUpdatePayperiodLoan($id)
    {
        $model = Payment::model()->findByPk($id);

        if (isset($_POST['Payment'])) {
            $model->attributes = $_POST['Payment'];
            $model->save(false);
        }

        $this->render('updatePayperiodLoan', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Payperiod('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Payperiod']))
            $model->attributes = $_GET['Payperiod'];

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
        $model = Payperiod::model()->findByPk($id);
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
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'payperiod-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel()
    {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Payperiod_records'])) {
            $model = $session['Payperiod_records'];
        }
        else
            $model = Payperiod::model()->findAll();


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


        if (isset($session['Payperiod_dataProvider'])) {
            $dataProvider = $session['Payperiod_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('Payperiod');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
        ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Payperiod Report');
        $pdf->SetSubject('Payperiod Report');
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
        $pdf->Output("Payperiod_002.pdf", "I");
    }

    public function sumValue($data, $row, $all)
    {
        $sumValue = Yii::app()->db->createCommand()
            ->select('sum(pd.period) as sumValue')
            ->from('hr_payperioddetail as pd')
            ->where('pd.payPeriod_id=:id', array(':id' => $data->id))
            ->queryRow();
        return $sumValue['sumValue'];
    }

}
