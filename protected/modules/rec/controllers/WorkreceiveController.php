<?php

class WorkreceiveController extends BaseController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters1() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
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

    public function actionGetItems() {
        $sql = 'SELECT id, name as value FROM rec_workreceive WHERE name LIKE :qterm ORDER BY name ASC';
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
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Workreceive;
        $customer = new Customer();
        $companyVAT = new Company();

        if (isset($_POST['Workreceive'])) {
            $model->attributes = $_POST['Workreceive'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
            'customer' => $customer,
            'company' => $companyVAT
        ));
    }

    public function actionCreateArea($action) {
        if ($action == 'area') {
            $name = trim($_POST['nameArea']);
            $areaModel = new Area();
            $areaModel->name = $name;
            if ($areaModel->save()) {
                $data = Area::model()->findAll();
                $data = CHtml::listData($data, 'id', 'name');
                echo $areaModel->id;
                echo '|';
                echo "<option value=''>Chọn...</option>";
                foreach ($data as $value => $name)
                    echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
            } else {
                echo 'error';
                $data = Area::model()->findAll();
                $data = CHtml::listData($data, 'id', 'name');
                echo "<option value=''>Chọn...</option>";
                foreach ($data as $value => $name)
                    echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
            }
        }
        if ($action == 'delivergroup') {
            $name = trim($_POST['nameDelivergroup']);
            $delivergroupModel = new Godelivergroup();
            $delivergroupModel->name = $name;
            if ($delivergroupModel->save()) {
                $data = Godelivergroup::model()->findAll();
                $data = CHtml::listData($data, 'id', 'name');
                echo $delivergroupModel->id;
                echo '|';
                echo "<option value=''>Chọn...</option>";
                foreach ($data as $value => $name)
                    echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
            } else {
                echo 'error';
                $data = Godelivergroup::model()->findAll();
                $data = CHtml::listData($data, 'id', 'name');
                echo "<option value=''>Chọn...</option>";
                foreach ($data as $value => $name)
                    echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
            }
        }
        if ($action == 'produce') {
            $name = trim($_POST['nameProduce']);
            $produceModel = new Produce();
            $produceModel->name = $name;
            if ($produceModel->save()) {
                $data = Produce::model()->findAll();
                $data = CHtml::listData($data, 'id', 'name');
                echo $produceModel->id;
                echo '|';
                echo "<option value=''>Chọn...</option>";
                foreach ($data as $value => $name)
                    echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
            } else {
                echo 'error';
                $data = Produce::model()->findAll();
                $data = CHtml::listData($data, 'id', 'name');
                echo "<option value=''>Chọn...</option>";
                foreach ($data as $value => $name)
                    echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
            }
        }
    }

    public function actionAjaxCusInfo() {
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'workreceive-form',
            'enableAjaxValidation' => false,
            'method' => 'post',
            'type' => 'vertical',
            'htmlOptions' => array(
                'enctype' => 'multipart/form-data',
            //'class' => 'well'
            )
        ));
        $cusID = $_POST['cusID'];
        $cusModel = Customer::model()->find('id=:id', array(':id' => $cusID));
        $detailCus = Detailcustomer::model()->findByAttributes(array('rec_cus_id' => $cusID));
        echo $this->renderPartial('_formCustomer', array('customer' => $cusModel, 'form' => $form), false, false);
        echo '|';
        if (!empty($detailCus)) {
            $companyModel = $detailCus->company;
            $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                'id' => 'workreceive-form',
                'enableAjaxValidation' => false,
                'method' => 'post',
                'type' => 'vertical',
                'htmlOptions' => array(
                    'enctype' => 'multipart/form-data',
                //'class' => 'well'
                )
            ));
            echo $this->renderPartial('_formCompanyVAT', array('company' => $companyModel, 'form' => $form), false, false);
        }
    }

    public function actionAjaxTimeRecDeli() {
        $lastWorkReceive = Workreceive::model()->findBySql('SELECT code FROM rec_workreceive WHERE MONTH(datereceive) = MONTH(CURDATE()) AND YEAR(datereceive) = YEAR(CURDATE()) ORDER BY id DESC LIMIT 1');
        if (!empty($lastWorkReceive)) {
            $lastCode = $lastWorkReceive->code;
            $lastCode = explode('-', $lastCode);
            $lastCodeMY = $lastCode['0'];
            $lastcodeNew = sprintf('%05d', $lastCode['1'] + 1);
        } else {
            $lastCodeMY = date('my');
            $lastcodeNew = sprintf('%05d', 1);
        }
        $lastcodeFullNew = $lastCodeMY . '-' . $lastcodeNew;
        $dateReceive = date('d/m/Y H:i');
        $currentHourMinSec = date('H:i:s');
        $parse = array();
        if (!preg_match('#^(?<hours>[\d]{2}):(?<mins>[\d]{2}):(?<secs>[\d]{2})$#', $currentHourMinSec, $parse)) {
            // Throw error, exception, etc
            throw new RuntimeException("Hour Format not valid");
        }
        $currentTimeToSec = (int) $parse['hours'] * 3600 + (int) $parse['mins'] * 60 + (int) $parse['secs'];
        $deliverAppendTimeToSec = (int) 7 * 3600 + (int) 12 * 60 + (int) 0;
        $deliverTimeToSec = $currentTimeToSec + $deliverAppendTimeToSec;
        $deliverTime = gmdate('H:i:s', $deliverTimeToSec);
        if ((int) gmdate('His', $deliverTimeToSec) < (int) date('His')) {
            $datedeliver = date('d/m/Y H:i', strtotime('next day', strtotime(date('Y-m-d') . ' ' . $deliverTime)));
        } else {
            $datedeliver = date('d/m/Y H:i', strtotime($deliverTime));
        }
        echo CJSON::encode(array('lastcodeNew' => $lastcodeNew, 'lastcodeFullNew' => $lastcodeFullNew, 'dateReceive' => $dateReceive, 'datedeliver' => $datedeliver));
        exit;
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Workreceive'])) {
            $model->attributes = $_POST['Workreceive'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
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
    public function actionIndex() {
        $session = new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();

        $model = new Workreceive('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['Workreceive'])) {
            $model->attributes = $_GET['Workreceive'];



            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->code))
                $criteria->addCondition('code = "' . $model->code . '"');


            if (!empty($model->user_id))
                $criteria->addCondition('user_id = "' . $model->user_id . '"');


            if (!empty($model->user_id2))
                $criteria->addCondition('user_id2 = "' . $model->user_id2 . '"');


            if (!empty($model->datereceive))
                $criteria->addCondition('datereceive = "' . $model->datereceive . '"');


            if (!empty($model->datedeliver))
                $criteria->addCondition('datedeliver = "' . $model->datedeliver . '"');


            if (!empty($model->godeliver))
                $criteria->addCondition('godeliver = "' . $model->godeliver . '"');


            if (!empty($model->receiveonline))
                $criteria->addCondition('receiveonline = "' . $model->receiveonline . '"');


            if (!empty($model->note))
                $criteria->addCondition('note = "' . $model->note . '"');


            if (!empty($model->VAT))
                $criteria->addCondition('VAT = "' . $model->VAT . '"');


            if (!empty($model->comp_id))
                $criteria->addCondition('comp_id = "' . $model->comp_id . '"');
        }
        //$session['Workreceive_records']=Test::model()->findAll($criteria); 
        $session['Workreceive_dataProvider'] = $model->search();

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Workreceive('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Workreceive']))
            $model->attributes = $_GET['Workreceive'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Workreceive::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'workreceive-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel() {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Workreceive_records'])) {
            $model = $session['Workreceive_records'];
        }
        else
            $model = Workreceive::model()->findAll();


        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport', array(
                    'model' => $model
                        ), true)
        );
    }

    public function actionGeneratePdf() {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once('tcpdf/tcpdf.php');
        require_once('tcpdf/config/lang/eng.php');


        if (isset($session['Workreceive_dataProvider'])) {
            $dataProvider = $session['Workreceive_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('Workreceive');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
                ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Workreceive Report');
        $pdf->SetSubject('Workreceive Report');
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
        $pdf->Output("Workreceive_002.pdf", "I");
    }

}
