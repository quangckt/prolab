<?php

class ProoutController extends BaseController {

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
        $sql = 'SELECT id, name as value FROM pm_proout WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new Proout;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Proout'])) {
            $model->attributes = $_POST['Proout'];
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
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Proout'])) {
            $model->attributes = $_POST['Proout'];
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

        $model = new Proout('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['Proout'])) {
            $model->attributes = $_GET['Proout'];



            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->dateout))
                $criteria->addCondition('dateout = "' . $model->dateout . '"');


            if (!empty($model->numout))
                $criteria->addCondition('numout = "' . $model->numout . '"');


            if (!empty($model->note))
                $criteria->addCondition('note = "' . $model->note . '"');


            if (!empty($model->user1))
                $criteria->addCondition('user1 = "' . $model->user1 . '"');


            if (!empty($model->user2))
                $criteria->addCondition('user2 = "' . $model->user2 . '"');


            if (!empty($model->existbegin))
                $criteria->addCondition('existbegin = "' . $model->existbegin . '"');


            if (!empty($model->used))
                $criteria->addCondition('used = "' . $model->used . '"');


            if (!empty($model->existend))
                $criteria->addCondition('existend = "' . $model->existend . '"');


            if (!empty($model->pm_print_id))
                $criteria->addCondition('pm_print_id = "' . $model->pm_print_id . '"');


            if (!empty($model->pm_printplan_id))
                $criteria->addCondition('pm_printplan_id = "' . $model->pm_printplan_id . '"');


            if (!empty($model->product_item_id))
                $criteria->addCondition('product_item_id = "' . $model->product_item_id . '"');
        }
        //$session['Proout_records']=Test::model()->findAll($criteria); 
        $session['Proout_dataProvider'] = $model->search();

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Proout('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Proout']))
            $model->attributes = $_GET['Proout'];

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
        $model = Proout::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'proout-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel() {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Proout_records'])) {
            $model = $session['Proout_records'];
        }
        else
            $model = Proout::model()->findAll();


        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport', array(
                    'model' => $model
                        ), true)
        );
    }

    public function actionGeneratePdf() {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once('tcpdf/tcpdf.php');
        require_once('tcpdf/config/lang/eng.php');


        if (isset($session['Proout_dataProvider'])) {
            $dataProvider = $session['Proout_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('Proout');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
                ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Proout Report');
        $pdf->SetSubject('Proout Report');
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
        $pdf->Output("Proout_002.pdf", "I");
    }

    public function actionLoadWareHouse() {
        $whotype_id = $_POST['whotype_id'];
        $updatewithplan = isset($_POST['action']) ? '1' : 0;
        if (!empty($whotype_id)) {
            $whotype = WarehouseoutType::model()->find('id=:whotype_id', array(':whotype_id' => (int) $whotype_id));
            $whid = explode(',', $whotype->wh_req);
            $listData = array();
            $whShop = '';
            foreach ($whid as $val) {
                $wh = warehouse::model()->find('id=:id', array(':id' => $val));
                $listData[] = array(
                    'id' => $val,
                    'name' => $wh->name
                );
                if ($wh->name == 'Kho cửa hàng')
                    $whShop = $val;
            }
            $data = CHtml::listData($listData, 'id', 'name');
            echo "<option value=''>Chọn...</option>";
            foreach ($data as $value => $details_name)
                echo CHtml::tag('option', array('value' => $value, 'selected' => $updatewithplan ? false : $value == $whShop ? true : false), CHtml::encode($details_name), true);
        }else {
            echo 'empty';
        }
    }

    public function actionLoadPrinterPlan() {
        $printerID = $_POST['printer_id'];
        $updatewithplan = isset($_POST['action']) ? '1' : 0;
        $pp_id = isset($_POST['pp_id']) ? $_POST['pp_id'] : '0';
        if (!empty($printerID)) {
            $listData = PrinterPlan::model()->findAll('inv_printer_id=:printerID and status=:status', array(':printerID' => $printerID, ':status' => PrinterPlan::statusEnable));
            $data = CHtml::listData($listData, 'id', 'printerPlan');
//            echo "<option value=''>Chọn...</option>";
            foreach ($data as $value => $details_name)
                echo CHtml::tag('option', array('value' => $value, 'selected' => !$updatewithplan ? false : $pp_id == $value ? true : false), CHtml::encode($details_name), true);
        } else {
            echo 'empty';
        }
    }

}
