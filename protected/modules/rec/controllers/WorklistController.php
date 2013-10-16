<?php

class WorklistController extends BaseController {

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
        $sql = 'SELECT id, name as value FROM rec_worklist WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new Worklist;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Worklist'])) {
            $model->attributes = $_POST['Worklist'];
            if ($model->validate()) {
                $model->type = '1';
                $model->notmateri = $model->notmateri != '1' ? '0' : $model->notmateri;
                $model->notvalue = $model->notvalue != '1' ? '0' : $model->notvalue;
                if ($model->save())
                    $this->redirect(array('index'));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionLoaddetailsale() {
        $data = Detailssales::model()->findAll('rec_aggreSale_id=:rec_aggreSale_id', array(':rec_aggreSale_id' => (int) $_POST['rec_aggregatesale_id']));
        $data = CHtml::listData($data, 'id', 'name');
        echo "<option value=''>Chọn...</option>";
        foreach ($data as $value => $details_name)
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($details_name), true);
    }

    public function actionLoadProcessDetail() {
        $data = Processes::model()->find('id=:id', array(':id' => (int) $_POST['process_id']));
        if (ord($data->distribute)) {
            $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'distribute'));
            echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
        }
        if (ord($data->scan)) {
            $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'scan'));
            echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
        }
        if (ord($data->process)) {
            $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'process'));
            echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
        }
        if (ord($data->printImage)) {
            $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'printImage'));
            echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
        }
        if (ord($data->productGC)) {
            $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'productGC'));
            echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
        }
        if (ord($data->printPayment)) {
            $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'printPayment'));
            echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
        }
        if (ord($data->deliverStails)) {
            $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'deliverStails'));
            echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
        }
        if (ord($data->deliverCustomer)) {
            $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'deliverCustomer'));
            echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
        }
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

        if (isset($_POST['Worklist'])) {
            $model->attributes = $_POST['Worklist'];
            if ($model->validate()) {
                $model->type = '1';
                $model->notmateri = $model->notmateri != '1' ? '0' : $model->notmateri;
                $model->notvalue = $model->notvalue != '1' ? '0' : $model->notvalue;
                if ($model->save())
                    $this->redirect(array('index'));
            }
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
            $this->loadModel($id)->updateByPk($id, array('type' => '0'));

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

        $model = new Worklist('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['Worklist'])) {
            $model->attributes = $_GET['Worklist'];



            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->code))
                $criteria->addCondition('code = "' . $model->code . '"');


            if (!empty($model->name))
                $criteria->addCondition('name = "' . $model->name . '"');


            if (!empty($model->product_uom_id))
                $criteria->addCondition('product_uom_id = "' . $model->product_uom_id . '"');


            if (!empty($model->rec_waycallprice_id))
                $criteria->addCondition('rec_waycallprice_id = "' . $model->rec_waycallprice_id . '"');


            if (!empty($model->rec_aggregatesale_id))
                $criteria->addCondition('rec_aggregatesale_id = "' . $model->rec_aggregatesale_id . '"');


            if (!empty($model->rec_detailsale_id))
                $criteria->addCondition('rec_detailsale_id = "' . $model->rec_detailsale_id . '"');


            if (!empty($model->rec_grouprevenue_id))
                $criteria->addCondition('rec_grouprevenue_id = "' . $model->rec_grouprevenue_id . '"');


            if (!empty($model->rec_process_id))
                $criteria->addCondition('rec_process_id = "' . $model->rec_process_id . '"');


            if (!empty($model->rec_materiproduct_id))
                $criteria->addCondition('rec_materiproduct_id = "' . $model->rec_materiproduct_id . '"');


            if (!empty($model->productout))
                $criteria->addCondition('productout = "' . $model->productout . '"');


            if (!empty($model->materilogical1))
                $criteria->addCondition('materilogical1 = "' . $model->materilogical1 . '"');


            if (!empty($model->materilogical2))
                $criteria->addCondition('materilogical2 = "' . $model->materilogical2 . '"');


            if (!empty($model->materilogical3))
                $criteria->addCondition('materilogical3 = "' . $model->materilogical3 . '"');


            if (!empty($model->notmateri))
                $criteria->addCondition('notmateri = "' . $model->notmateri . '"');


            if (!empty($model->notvalue))
                $criteria->addCondition('notvalue = "' . $model->notvalue . '"');


            if (!empty($model->user_id))
                $criteria->addCondition('user_id = "' . $model->user_id . '"');
        }
        //$session['Worklist_records']=Test::model()->findAll($criteria); 
        $session['Worklist_dataProvider'] = $model->search('1');

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionRecyclebin() {
        $session = new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();

        $model = new Worklist('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['Worklist'])) {
            $model->attributes = $_GET['Worklist'];



            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->code))
                $criteria->addCondition('code = "' . $model->code . '"');


            if (!empty($model->name))
                $criteria->addCondition('name = "' . $model->name . '"');


            if (!empty($model->product_uom_id))
                $criteria->addCondition('product_uom_id = "' . $model->product_uom_id . '"');


            if (!empty($model->rec_waycallprice_id))
                $criteria->addCondition('rec_waycallprice_id = "' . $model->rec_waycallprice_id . '"');


            if (!empty($model->rec_aggregatesale_id))
                $criteria->addCondition('rec_aggregatesale_id = "' . $model->rec_aggregatesale_id . '"');


            if (!empty($model->rec_detailsale_id))
                $criteria->addCondition('rec_detailsale_id = "' . $model->rec_detailsale_id . '"');


            if (!empty($model->rec_grouprevenue_id))
                $criteria->addCondition('rec_grouprevenue_id = "' . $model->rec_grouprevenue_id . '"');


            if (!empty($model->rec_process_id))
                $criteria->addCondition('rec_process_id = "' . $model->rec_process_id . '"');


            if (!empty($model->rec_materiproduct_id))
                $criteria->addCondition('rec_materiproduct_id = "' . $model->rec_materiproduct_id . '"');


            if (!empty($model->productout))
                $criteria->addCondition('productout = "' . $model->productout . '"');


            if (!empty($model->materilogical1))
                $criteria->addCondition('materilogical1 = "' . $model->materilogical1 . '"');


            if (!empty($model->materilogical2))
                $criteria->addCondition('materilogical2 = "' . $model->materilogical2 . '"');


            if (!empty($model->materilogical3))
                $criteria->addCondition('materilogical3 = "' . $model->materilogical3 . '"');


            if (!empty($model->notmateri))
                $criteria->addCondition('notmateri = "' . $model->notmateri . '"');


            if (!empty($model->notvalue))
                $criteria->addCondition('notvalue = "' . $model->notvalue . '"');


            if (!empty($model->user_id))
                $criteria->addCondition('user_id = "' . $model->user_id . '"');
        }
        //$session['Worklist_records']=Test::model()->findAll($criteria); 
        $session['Worklist_recyclebin_dataProvider'] = $model->search('0');

        $this->render('recyclebin', array(
            'model' => $model,
        ));
    }

    public function actionRestore($id) {
        $this->loadModel($id)->updateByPk($id, array('type' => '1'));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Worklist('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Worklist']))
            $model->attributes = $_GET['Worklist'];

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
        $model = Worklist::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'worklist-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel() {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Worklist_records'])) {
            $model = $session['Worklist_records'];
        }
        else
            $model = Worklist::model()->findAll();


        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport', array(
                    'model' => $model
                        ), true)
        );
    }

    public function actionGeneratePdf() {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once('tcpdf/tcpdf.php');
        require_once('tcpdf/config/lang/eng.php');


        if (isset($session['Worklist_dataProvider'])) {
            $dataProvider = $session['Worklist_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('Worklist');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
                ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Worklist Report');
        $pdf->SetSubject('Worklist Report');
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
        $pdf->Output("Worklist_002.pdf", "I");
    }

}
