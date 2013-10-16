<?php

class EventcalendarController extends BaseController
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
        $sql = 'SELECT id, name as value FROM eventcalendar WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new Eventcalendar;
        if (isset($_POST['Eventcalendar'])) {
            try {
                $model->user_id = Yii::app()->user->id;
                $model->attributes = $_POST['Eventcalendar'];
                $validate = $model->validate();
                if ($validate) {
                    $model->startDate = strtotime($_POST['Eventcalendar']['startDate']);
                    $model->dueDate = strtotime($_POST['Eventcalendar']['dueDate']) == true ? strtotime($_POST['Eventcalendar']['dueDate']) : null;
                    $model->startTime = $_POST['Eventcalendar']['startTime'];
                    $model->endTime = $model->dueDate == null ? null : $_POST['Eventcalendar']['endTime'];
                    $model->associationType = false;
                    $model->color = !isset($_POST['choose_color']) ? null : $_POST['choose_color'];
                    if ($model->save()) {
                        Yii::app()->user->setFlash('success', '<strong>Tạo sự kiện thành công</strong>');
                        $this->redirect(array('index'));
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

    public function actionCreateHoliday()
    {
        $model = new Eventcalendar();
        if (isset($_POST['Eventcalendar'])) {
            try {
                $model->user_id = Yii::app()->user->id;
                $model->attributes = $_POST['Eventcalendar'];
                $validate = $model->validate();
                if ($validate) {
                    $model->startDate = strtotime($_POST['Eventcalendar']['startDate']);
                    $model->dueDate = strtotime($_POST['Eventcalendar']['dueDate']) == true ? strtotime($_POST['Eventcalendar']['dueDate']) : null;
                    $model->associationType = true; //1=true=holidays
                    $model->allDay = true; //1=true=allDay
                    if ($model->save()) {
                        Yii::app()->user->setFlash('success', '<strong>Tạo ngày nghỉ lễ thành công</strong>');
                        $this->redirect(array('/hr/settings/holidays'));
                    }
                }
            } catch (CException $e) {
                throw $e;
            }
        }
        $this->render('createHoliday', array('model' => $model));
    }

    public function actionUpdateHoliday($id)
    {
        $model = $this->loadModel($id);
        $model->startDate = date('d-m-Y', $model->startDate);
        $model->dueDate == null ? $model->dueDate = null : $model->dueDate = date('d-m-Y', $model->dueDate);
        if (isset($_POST['Eventcalendar'])) {
            try {
                $model->attributes = $_POST['Eventcalendar'];
                $validate = $model->validate();
                if ($validate) {
                    $model->startDate = strtotime($_POST['Eventcalendar']['startDate']);
                    $model->dueDate = strtotime($_POST['Eventcalendar']['dueDate']) == true ? $model->dueDate = strtotime($_POST['Eventcalendar']['dueDate']) : $model->dueDate = null;
                    if ($model->save()) {
                        Yii::app()->user->setFlash('success', '<strong>Sửa ngày nghỉ lễ thành công</strong>');
                        $this->redirect(array('/hr/settings/holidays'));
                    }
                }
            } catch (CException $e) {
                throw $e;
            }
        }
        $this->render('updateHoliday', array('model' => $model));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        $model->startDate = date('d-m-Y', $model->startDate);
        $model->dueDate == null ? $model->dueDate = null : $model->dueDate = date('d-m-Y', $model->dueDate);
        if (isset($_POST['Eventcalendar'])) {
            try {
                $model->attributes = $_POST['Eventcalendar'];
                $validate = $model->validate();
                if ($validate) {
                    $model->startDate = strtotime($_POST['Eventcalendar']['startDate']);
                    $model->dueDate = strtotime($_POST['Eventcalendar']['dueDate']) == true ? strtotime($_POST['Eventcalendar']['dueDate']) : null;
                    $model->startTime = $_POST['Eventcalendar']['startTime'];
                    $model->endTime = $model->dueDate == null ? null : $_POST['Eventcalendar']['endTime'];
                    $model->associationType = false;
                    $model->color = !isset($_POST['choose_color']) ? null : $_POST['choose_color'];
                    if ($model->save()) {
                        Yii::app()->user->setFlash('success', '<strong>Sửa sự kiện thành công</strong>');
                        $this->redirect(array('index'));
                    }
                }
            } catch (CException $e) {
                throw $e;
            }
        }
        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionUpdateDropEvent()
    {
        $model = $this->loadModel($_POST['id']);
        $model->startDate = strtotime($_POST['startDate']);
        $model->startTime = $_POST['startHours'] . ':' . $_POST['startMinutes'];
        $model->dueDate = $_POST['endDate'] == null ? null : strtotime($_POST['endDate']);
        $model->endTime = $_POST['endDate'] == null ? null : $_POST['endHours'] . ':' . $_POST['endMinutes'];
        $model->allDay = $_POST['allDay'];
        try {
            if ($model->save(false)) {

            }
        } catch (CException $e) {
            throw $e;
        }
        //echo CJSON::encode(array('error' => $error, 'oldDate' => $oldDate));
        //exit;
    }

    public function actionUpdatEventResize()
    {
        $model = $this->loadModel($_POST['id']);
        $model->startDate = strtotime($_POST['startDate']);
        $model->startTime = $_POST['startHours'] . ':' . $_POST['startMinutes'];
        $model->dueDate = $_POST['endDate'] == null ? null : strtotime($_POST['endDate']);
        $model->endTime = $_POST['endDate'] == null ? null : $_POST['endHours'] . ':' . $_POST['endMinutes'];
        $model->allDay = $_POST['allDay'];
        try {
            if ($model->save(false)) {

            }
        } catch (CException $e) {
            throw $e;
        }
        //echo CJSON::encode(array('error' => $error, 'oldDate' => $oldDate));
        //exit;
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $associationType = $this->loadModel($id)->getAttribute('associationType');
        $this->loadModel($id)->delete();
        if ($associationType == 1) { //$associationType = 1 : Show susscess of Holiday
            Yii::app()->user->setFlash('success', '<strong>Xóa ngày nghỉ lễ thành công</strong>');
            $this->redirect(array('index'));
        } else {
            Yii::app()->user->setFlash('success', '<strong>Xóa sự kiện thành công</strong>');
            $this->redirect(array('index'));
        }
        /*if (Yii::app()->request->isPostRequest) {

            // we only allow deletion via POST request
            //$this->loadModel($id)->delete();
            //Yii::app()->user->setFlash('success', '<strong>Xóa sự kiện thành công</strong>');
            //$this->redirect(array('index'));
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        */
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        //Find color_event_birthday
        $splitToArray = explode("\n", Yii::app()->settings->get('hr', 'color_event_birthday'));
        foreach ($splitToArray as $item) {
            $i = explode('|', trim($item));
            $color_event_birthday = $i[0];
        }

        //Find color_event_weddingday
        $splitToArray = explode("\n", Yii::app()->settings->get('hr', 'color_event_weddingday'));
        foreach ($splitToArray as $item) {
            $i = explode('|', trim($item));
            $color_event_weddingday = $i[0];
        }

        //Find color_event_Holidays
        $splitToArray = explode("\n", Yii::app()->settings->get('hr', 'color_event_holiday'));
        foreach ($splitToArray as $item) {
            $i = explode('|', trim($item));
            $color_event_holidays = $i[0];
        }

//######################################################### ARRAY LIST DATA FOR CALENDAR #########################################
//Find birthday of employee working
        $empt = Employee::model()->findAll('status=0');
        $listBirthDate = array();
        foreach ($empt as $item) {
            $listBirthDate[] = array(
                'id' => $item->id,
                'groupID' => null,
                'title' => 'SN ' . $item->firstname . $item->middlename . ' ' . $item->lastname,
                'start' => date('Y-m-d', strtotime(date("d", strtotime($item->birthday)) . '-' .
                    date("m", strtotime($item->birthday)) . '-' . date("Y"))),
                'color' => $color_event_birthday,
                //'borderColor' => 'yellow',
                //'backgroundColor' => 'red',
            );
        }
//find weddingday of employee working (exits weddingday)
        $rela = EmpRelation::model()->findAll('weddingday is not null');
        $listWeddingDate = array();
        foreach ($rela as $relaitem) {
            foreach ($empt as $empitem) {
                if ($empitem->id == $relaitem->emp_id) {
                    $listWeddingDate[] = array(
                        'id' => $empitem->id,
                        'groupID' => null,
                        'title' => 'NC ' . $empitem->firstname . $empitem->middlename . ' ' . $empitem->
                            lastname,
                        'start' => date('Y-m-d', strtotime(date("d", strtotime($relaitem->weddingday)) .
                            '-' . date("m", strtotime($relaitem->weddingday)) . '-' . date("Y"))),
                        'color' => $color_event_weddingday,
                        'textColor' => '#000000',
                        //'borderColor' => 'yellow',
                        //'backgroundColor' => 'red',
                    );
                }
            }
        }
//find list holidays
        $eventHolidays = Eventcalendar::model()->findAll('startDate is not null and associationType = "1"'); //holiday=1
        $listeventHolidays = array();
        foreach ($eventHolidays as $evenHolidaytitem) {
            $listeventHolidays[] = array(
                'id' => $evenHolidaytitem->id,
                'groupID' => $evenHolidaytitem->associationType,
                'title' => $evenHolidaytitem->description,
                'start' => date('Y-m-d H:i', $evenHolidaytitem->startDate),
                'end' => date('Y-m-d H:i', $evenHolidaytitem->dueDate),
                'color' => $color_event_holidays,
                //'textColor' => '#000000',
                //'allDay' => $evenHolidaytitem->allDay == 1 ? true : false,
            );
        }
//Find list Event new
        $eventNew = Eventcalendar::model()->findAll('startDate is not null and visibility = "0"'); //public=0
        $listeventNew = array();
        foreach ($eventNew as $eventitem) {
            $listeventNew[] = array(
                'id' => $eventitem->id,
                'groupID' => $eventitem->associationType,
                'title' => $eventitem->description,
                'start' => date('Y-m-d H:i', strtotime(date('Y-m-d', $eventitem->startDate) . ' ' . $eventitem->startTime)),
                'end' => date('Y-m-d H:i', strtotime(date('Y-m-d', $eventitem->dueDate) . ' ' . $eventitem->endTime)),
                'color' => $eventitem->color,
                //'textColor' => '#000000',
                'allDay' => $eventitem->allDay == 1 ? true : false,
            );
        }
//MERGE ARRAY LIST TO ONE
        $listEvent = array_merge($listeventHolidays, $listBirthDate, $listWeddingDate, $listeventNew);

//######################################################### ARRAY LIST DATA FOR CALENDAR #########################################

        $this->render('index', array(
            'listEvent' => $listEvent,
        ));
    }

    public function actionMyEvent()
    {
        $user = User::model()->find('id=:id', array(':id' => Yii::app()->user->id));
        $emp_id = $user->emp_id;

        //Find color_event_birthday
        $splitToArray = explode("\n", Yii::app()->settings->get('hr', 'color_event_birthday'));
        foreach ($splitToArray as $item) {
            $i = explode('|', trim($item));
            $color_event_birthday = $i[0];
        }

        //Find color_event_weddingday
        $splitToArray = explode("\n", Yii::app()->settings->get('hr', 'color_event_weddingday'));
        foreach ($splitToArray as $item) {
            $i = explode('|', trim($item));
            $color_event_weddingday = $i[0];
        }

//######################################################### ARRAY LIST DATA FOR CALENDAR #########################################
//Find birthday of employee working
        $empt = Employee::model()->findAll('id=:emp_id', array(':emp_id' => $emp_id));
        $listBirthDate = array();
        foreach ($empt as $item) {
            $listBirthDate[] = array(
                'id' => $item->id,
                'groupID' => null,
                'title' => 'SN ' . $item->firstname . $item->middlename . ' ' . $item->lastname,
                'start' => date('Y-m-d', strtotime(date("d", strtotime($item->birthday)) . '-' .
                    date("m", strtotime($item->birthday)) . '-' . date("Y"))),
                'color' => $color_event_birthday,
                //'borderColor' => 'yellow',
                //'backgroundColor' => 'red',
            );
        }
//find weddingday of employee working (exits weddingday)
        $rela = EmpRelation::model()->findAll('weddingday is not null and emp_id=:emp_id', array(':emp_id' => $emp_id));
        $listWeddingDate = array();
        foreach ($rela as $relaitem) {
            foreach ($empt as $empitem) {
                if ($empitem->id == $relaitem->emp_id) {
                    $listWeddingDate[] = array(
                        'id' => $empitem->id,
                        'groupID' => null,
                        'title' => 'NC ' . $empitem->firstname . $empitem->middlename . ' ' . $empitem->
                            lastname,
                        'start' => date('Y-m-d', strtotime(date("d", strtotime($relaitem->weddingday)) .
                            '-' . date("m", strtotime($relaitem->weddingday)) . '-' . date("Y"))),
                        'color' => $color_event_weddingday,
                        'textColor' => '#000000',
                        //'borderColor' => 'yellow',
                        //'backgroundColor' => 'red',
                    );
                }
            }
        }

//Find list Event new
        $eventNew = Eventcalendar::model()->findAll('startDate is not null and visibility = "1" and user_id=:user_id', array(':user_id' => $user->id)); //public=0; personal=1
        $listeventNew = array();
        foreach ($eventNew as $eventitem) {
            $listeventNew[] = array(
                'id' => $eventitem->id,
                'groupID' => $eventitem->associationType,
                'title' => $eventitem->description,
                'start' => date('Y-m-d H:i', strtotime(date('Y-m-d', $eventitem->startDate) . ' ' . $eventitem->startTime)),
                'end' => date('Y-m-d H:i', strtotime(date('Y-m-d', $eventitem->dueDate) . ' ' . $eventitem->endTime)),
                'color' => $eventitem->color,
                //'textColor' => '#000000',
                'allDay' => $eventitem->allDay == 1 ? true : false,
            );
        }
//MERGE ARRAY LIST TO ONE
        $listEvent = array_merge($listBirthDate, $listWeddingDate, $listeventNew);

//######################################################### ARRAY LIST DATA FOR CALENDAR #########################################

        $this->render('myEvent', array(
            'listMyEvent' => $listEvent,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Eventcalendar('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Eventcalendar']))
            $model->attributes = $_GET['Eventcalendar'];

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
        $model = Eventcalendar::model()->findByPk($id);
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
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'eventcalendar-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel()
    {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Eventcalendar_records'])) {
            $model = $session['Eventcalendar_records'];
        }
        else
            $model = Eventcalendar::model()->findAll();


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


        if (isset($session['Eventcalendar_dataProvider'])) {
            $dataProvider = $session['Eventcalendar_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('Eventcalendar');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
        ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Eventcalendar Report');
        $pdf->SetSubject('Eventcalendar Report');
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
        $pdf->Output("Eventcalendar_002.pdf", "I");
    }

    public function actionDropevent($id)
    {
        $this->loadModel($id)->update();
        Yii::app()->user->setFlash('success', '<strong>Drag drop sự kiện thành công</strong>');
        //$this->redirect(array('index'));
        /*if (Yii::app()->request->isPostRequest) {

            // we only allow deletion via POST request
            //$this->loadModel($id)->delete();
            //Yii::app()->user->setFlash('success', '<strong>Xóa sự kiện thành công</strong>');
            //$this->redirect(array('index'));
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        */
    }
}
