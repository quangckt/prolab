<?php

class ShiftPlanController extends BaseController
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
    public function accessRules1()
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
        $sql = 'SELECT id, name as value FROM hr_shift_plan WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new ShiftPlan;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ShiftPlan'])) {
            $model->attributes = $_POST['ShiftPlan'];
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

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ShiftPlan'])) {
            $model->attributes = $_POST['ShiftPlan'];
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
        $session = new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();
        $model = new ShiftPlan('search');
        $model->unsetAttributes(); // clear any default values

        if (isset($_GET['ShiftPlan'])) {
            $model->attributes = $_GET['ShiftPlan'];


            if (!empty($model->id)) $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->department_id)) $criteria->addCondition('department_id = "' . $model->department_id . '"');


            if (!empty($model->startdate)) $criteria->addCondition('startdate = "' . $model->startdate . '"');


            if (!empty($model->enddate)) $criteria->addCondition('enddate = "' . $model->enddate . '"');


            if (!empty($model->status)) $criteria->addCondition('status = "' . $model->status . '"');


            if (!empty($model->note)) $criteria->addCondition('note = "' . $model->note . '"');


        } else {
            $model->status = 0;
            $criteria->addCondition('status =0');
        }
        //$session['ShiftPlan_records']=Test::model()->findAll($criteria);
        $session['ShiftPlan_dataProvider'] = $model->search();

        $this->render('index', array(
            'model' => $model,
        ));

    }


    /**
     * actionShiftSelect
     */
    public function actionSelect()
    {
        if (isset($_POST['ShiftPlan'])) {
            $plan_id = $_POST['ShiftPlan']['id'][0];
            $action = $_POST['action'];
            $this->redirect(array($action, 'splan_id' => $plan_id));
        }
        //Yii::app()->end();
        $this->render('Select');
    }


    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new ShiftPlan('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['ShiftPlan']))
            $model->attributes = $_GET['ShiftPlan'];

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
        $model = ShiftPlan::model()->findByPk($id);
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
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'shift-plan-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel()
    {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['ShiftPlan_records'])) {
            $model = $session['ShiftPlan_records'];
        }
        else
            $model = ShiftPlan::model()->findAll();


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


        if (isset($session['ShiftPlan_dataProvider'])) {
            $dataProvider = $session['ShiftPlan_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('ShiftPlan');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
        ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('ShiftPlan Report');
        $pdf->SetSubject('ShiftPlan Report');
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
        $pdf->Output("ShiftPlan_002.pdf", "I");
    }

    public function actionCopyDataShift()
    {
        $selectedItems = explode(",", $_POST['dateRange']['selectedItems']);
        $fDate = $_POST['dateRange']['startdate'];
        $tDate = $_POST['dateRange']['enddate'];
        ;
        foreach ($selectedItems as $item) {
            $shift_plan = new ShiftPlan();
            $plan = ShiftPlan::model()->findByPk($item);
            $shift = $plan->shifts;
            $shift_plan->startdate = $fDate;
            $shift_plan->enddate = $tDate;
            $shift_plan->department_id = $plan->department_id;
            $shift_plan->status = 0;
            $shift_plan->name = $plan->name;
            if ($shift_plan->save(false)) {
                if (isset($shift)) {
                    foreach ($shift as $item) {
                        $new_shift = new Shift();
                        $new_shift->code = $item->code;
                        $new_shift->name = $item->name;
                        $new_shift->isovernight = $item->isovernight;
                        $new_shift->starttime = $item->starttime;
                        $new_shift->endtime = $item->endtime;
                        $new_shift->note = $item->note;
                        $new_shift->status = $item->status;
                        $new_shift->shift_plan_id = $shift_plan->id;
                        $new_shift->colorEvent = $item->colorEvent;
                        $new_shift->save(false);
                    }
                }
            }
        }
        $this->actionIndex();
    }
}
