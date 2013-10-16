<?php

class PrinterPlanController extends BaseController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
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
        $sql = 'SELECT id, name as value FROM inv_printer_plan WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new PrinterPlan('create');

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['PrinterPlan'])) {
            $model->attributes = $_POST['PrinterPlan'];
            if ($model->validate())
                $model->save();
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
        $modelOld = $this->loadModel($id);
//        $model->scenario = 'update';
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['PrinterPlan'])) {
            $model->attributes = $_POST['PrinterPlan'];
            if ($model->datefrom == $modelOld->datefrom && $model->dateto == $modelOld->dateto && $model->inv_printer_id == $modelOld->inv_printer_id) {
                $model->save();
            } else {
                $unique = PrinterPlan::model()->find('datefrom=:datefrom and dateto=:dateto and inv_printer_id=:inv_printer_id', array(':datefrom' => date('Y-m-d', strtotime($model->datefrom)), ':dateto' => date('Y-m-d', strtotime($model->dateto)), ':inv_printer_id' => $model->inv_printer_id));
                if (!empty($unique)) {
                    $model->addError('dateto', '');
                    $model->addError('datefrom', '');
                    $model->addError('inv_printer_id', '');
                    $model->addError('id', 'Máy in "' . $model->printer->name . '" đã có chu kỳ ca từ ngày "' . $model->datefrom . '" tới ngày "' . $model->dateto . '"');
                } else {
                    $model->save();
                }
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

        $model = new PrinterPlan('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['PrinterPlan'])) {
            $model->attributes = $_GET['PrinterPlan'];
            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');
            if (!empty($model->datefrom))
                $criteria->addCondition('datefrom = "' . date('Y-m-d', strtotime($model->datefrom)) . '"');
            if (!empty($model->dateto))
                $criteria->addCondition('dateto = "' . date('Y-m-d', strtotime($model->dateto)) . '"');
            if (!empty($model->inv_printer_id))
                $criteria->addCondition('inv_printer_id = "' . $model->inv_printer_id . '"');          
        }
        //$session['PrinterPlan_records']=Test::model()->findAll($criteria); 
        $session['PrinterPlan_dataProvider'] = $model->search();

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new PrinterPlan('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['PrinterPlan']))
            $model->attributes = $_GET['PrinterPlan'];

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
        $model = PrinterPlan::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'printer-plan-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel() {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['PrinterPlan_records'])) {
            $model = $session['PrinterPlan_records'];
        }
        else
            $model = PrinterPlan::model()->findAll();


        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport', array(
                    'model' => $model
                        ), true)
        );
    }

    public function actionGeneratePdf() {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once('tcpdf/tcpdf.php');
        require_once('tcpdf/config/lang/eng.php');


        if (isset($session['PrinterPlan_dataProvider'])) {
            $dataProvider = $session['PrinterPlan_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('PrinterPlan');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
                ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('PrinterPlan Report');
        $pdf->SetSubject('PrinterPlan Report');
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
        $pdf->Output("PrinterPlan_002.pdf", "I");
    }

}
