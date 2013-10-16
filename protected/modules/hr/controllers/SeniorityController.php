<?php

class SeniorityController extends BaseController {

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
        $sql = 'SELECT id, name as value FROM hr_seniority WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new Seniority;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Seniority'])) {
            $model->attributes = $_POST['Seniority'];
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

        if (isset($_POST['Seniority'])) {
            $model->attributes = $_POST['Seniority'];
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
        $model = new Seniority('search');

        if (isset($_GET['Seniority'])) {
            $dateSen = date('Y-m-d', strtotime($_GET['Seniority']['year']));
            $valueOfMonth = str_replace('.', '', $_GET['Seniority']['valueSeniority']);
            $checkExits = Seniority::model()->find('type=2 and year=:year', array(':year' => date('Y', strtotime($_GET['Seniority']['year']))));
            $result = empty($checkExits) ? 1 : 2;
        }

        $this->render('index', array(
            'model' => $model,
            'dateSen' => isset($dateSen) ? $dateSen : NULL,
            'valueOfMonth' => isset($valueOfMonth) ? $valueOfMonth : NULL,
            'checkExits' => isset($result) ? $result : NULL,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Seniority('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Seniority']))
            $model->attributes = $_GET['Seniority'];

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
        $model = Seniority::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'seniority-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel() {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Seniority_records'])) {
            $model = $session['Seniority_records'];
        }
        else
            $model = Seniority::model()->findAll();


        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport', array(
                    'model' => $model
                        ), true)
        );
    }

    public function actionGeneratePdf() {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once('tcpdf/tcpdf.php');
        require_once('tcpdf/config/lang/eng.php');


        if (isset($session['Seniority_dataProvider'])) {
            $dataProvider = $session['Seniority_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('Seniority');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
                ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Seniority Report');
        $pdf->SetSubject('Seniority Report');
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
        $pdf->Output("Seniority_002.pdf", "I");
    }

    public function actionAcceptCacumulate() {
        if (isset($_POST['cacumulate'])) {
            $checkExits = Seniority::model()->find('type=1 and year=:year', array(':year' => $_POST['yearTo']['yearTo']));
            $checkExits1 = Seniority::model()->find('type=0 and year=:year', array(':year' => $_POST['yearTo']['yearTo']));
            foreach ($_POST['cacumulate'] as $key => $val) {
                if (empty($checkExits)) {
                    $sqlInsert = 'insert into hr_seniority(emp_id, valueSeniority, year, type) values(:emp_id, :valueSeniority, :year, 1)';
                    $command = Yii::app()->db->createCommand($sqlInsert);
                    $command->bindParam(':emp_id', $key);
                    $command->bindParam(':valueSeniority', str_replace('.', '', $val));
                    $command->bindValue(':year', $_POST['yearTo']['yearTo'], PDO::PARAM_STR);
                    $command->execute();
                    $sqlInsert1 = 'insert into hr_seniority(emp_id, valueSeniority, year, type) values(:emp_id, :valueSeniority, :year, 0)';
                    $command1 = Yii::app()->db->createCommand($sqlInsert1);
                    $command1->bindParam(':emp_id', $key);
                    $command1->bindValue(':valueSeniority', str_replace('.', '', $_POST['cacumulateResAllow'][$key]));
                    $command1->bindValue(':year', $_POST['yearTo']['yearTo'], PDO::PARAM_STR);
                    $command1->execute();
                } else {
                    $sqlUpdate = 'update hr_seniority set valueSeniority=:valueSeniority, year=:year where emp_id=:emp_id and year=:year and type=1';
                    $command = Yii::app()->db->createCommand($sqlUpdate);
                    $command->bindParam(':emp_id', $key);
                    $command->bindParam(':valueSeniority', str_replace('.', '', $val));
                    $command->bindValue(':year', $_POST['yearTo']['yearTo'], PDO::PARAM_STR);
                    $command->execute();
                    $sqlUpdate1 = 'update hr_seniority set valueSeniority=:valueSeniority, year=:year where emp_id=:emp_id and year=:year and type=0';
                    $command1 = Yii::app()->db->createCommand($sqlUpdate1);
                    $command1->bindParam(':emp_id', $key);
                    $command1->bindValue(':valueSeniority', str_replace('.', '', $_POST['cacumulateResAllow'][$key]));
                    $command1->bindValue(':year', $_POST['yearTo']['yearTo'], PDO::PARAM_STR);
                    $command1->execute();
                }
            }
            echo CJSON::encode(array('ok' => true));
            exit();
        }
    }

    public function actionAcceptSeniority() {
        $dateSen = trim($_POST['dateSen']);
        $year = date('Y', strtotime($dateSen));
        $valueOfMonth = trim($_POST['valueOfMonth']);
        $sql = 'select hr_seniority(:dateSen, :valueOfMonth)';
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(':dateSen', $dateSen);
        $command->bindParam(':valueOfMonth', $valueOfMonth);
        $sqlDeleteType2 = 'delete from hr_seniority where type=2 and year=:year';
        $command1 = Yii::app()->db->createCommand($sqlDeleteType2);
        $command1->bindParam(':year', $year);
        $sqlDeleteType3 = 'delete from hr_seniority where type=3 and year=:year';
        $command2 = Yii::app()->db->createCommand($sqlDeleteType3);
        $command2->bindParam(':year', $year);
        $checkExits = Seniority::model()->find('type=2 and year=:year', array(':year' => $year));
        if (empty($checkExits)) {
            $command->execute();
        } else {
            $command1->execute();
            $command2->execute();
            $command->execute();
        }
        echo CJSON::encode(array('ok' => TRUE));
        exit();
    }

    public function actionBackPay() {
        $model = new Seniority();

        $this->render('backPay', array(
            'model' => $model,
        ));
    }

    public function actionSeverAllow() {
        $model = new Seniority();

        $this->render('severAllow', array(
            'model' => $model,
        ));
    }

}
