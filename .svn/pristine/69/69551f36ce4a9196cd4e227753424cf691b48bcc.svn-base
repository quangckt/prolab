<?php

class PayrollruleController extends BaseController {

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
        $sql = 'SELECT id, name as value FROM hr_payrollrule WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new Payrollrule;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Payrollrule'])) {
            $model->attributes = $_POST['Payrollrule'];
            $model->monthYear = '0' . trim($_GET['month']) . '-' . trim($_GET['year']);
            if ($model->validate()) {
                $checkExits = Payrollrule::model()->find('op=:op and rate=:rate and type=:type and monthYear=:monthYear', array(':op' => $model->op, ':rate' => $model->rate, ':type' => $model->type, ':monthYear' => $model->monthYear));
                if (empty($checkExits)) {
                    if ($model->save())
                        Yii::app()->user->setFlash('success', '<strong>Tạo thành công.</strong>');
                }else {
                    Yii::app()->user->setFlash('error', '<strong>Qui định với điều kiện này đã tồn tại trong tháng này!!!</strong>');
                }
            }
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

        if (isset($_POST['Payrollrule'])) {
            $model->attributes = $_POST['Payrollrule'];
            if ($model->save())
                Yii::app()->user->setFlash('success', '<strong>Lưu thành công.</strong>');
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
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $session = new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();

        $model = new Payrollrule();
        $model->unsetAttributes(); // clear any default values
        $model->monthYear = date('m') . '-' . date('Y');

        if (isset($_GET['Payrollrule'])) {
            $model->attributes = $_GET['Payrollrule'];


            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->name))
                $criteria->addCondition('name = "' . $model->name . '"');


            if (!empty($model->op))
                $criteria->addCondition('op = "' . $model->op . '"');


            if (!empty($model->val))
                $criteria->addCondition('val = "' . $model->val . '"');


            if (!empty($model->rate))
                $criteria->addCondition('rate = "' . $model->rate . '"');


            if (!empty($model->type))
                $criteria->addCondition('type = "' . $model->type . '"');
        }
        if (isset($_GET['MonthYear'])) {
            $model->monthYear = trim($_GET['MonthYear']['month']) . '-' . trim($_GET['MonthYear']['year']);
        }
        //$session['Payrollrule_records']=Test::model()->findAll($criteria);
        $session['Payrollrule_dataProvider'] = $model->search();

        $this->render('index', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Payrollrule('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Payrollrule']))
            $model->attributes = $_GET['Payrollrule'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function actionCopyRules() {
        $monthFrom = trim($_POST['MonthYear']['monthFrom']);
        $yearFrom = trim($_POST['MonthYear']['yearFrom']);
        $monthTo = trim($_POST['MonthYear']['monthTo']);
        $yearTo = trim($_POST['MonthYear']['yearTo']);
        $monthYearFrom = '0' . $monthFrom . '-' . $yearFrom;
        $monthYearTo = '0' . $monthTo . '-' . $yearTo;

        $ruleFromExits = Payrollrule::model()->findAll('monthYear = :monthYearFrom', array(':monthYearFrom' => $monthYearFrom));
        $ruleToExits = Payrollrule::model()->findAll('monthYear = :monthYearTo', array(':monthYearTo' => $monthYearTo));

        if (!empty($ruleFromExits)) {
            if (empty($ruleToExits)) {
                $sql = 'INSERT INTO hr_payrollrule SELECT NULL, copy.name, copy.op, copy.val, copy.rate, copy.type, :monthYearTo FROM hr_payrollrule copy where copy.monthYear=:monthYearFrom';
                $command = Yii::app()->db->createCommand($sql);
                $command->bindParam(':monthYearTo', $monthYearTo, PDO::PARAM_STR);
                $command->bindParam(':monthYearFrom', $monthYearFrom, PDO::PARAM_STR);
                if ($command->execute()) {
                    echo CJSON::encode(array('success' => true, 'from' => $monthYearFrom, 'to' => $monthYearTo, 'monthTo' => $monthTo, 'yearTo' => $yearTo));
                    exit;
                }
            } else {
                echo CJSON::encode(array('monthYearTo' => $monthYearTo));
                exit;
            }
        } else {
            echo CJSON::encode(array('monthYearFrom' => $monthYearFrom));
            exit;
        }
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Payrollrule::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'payrollrule-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel() {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Payrollrule_records'])) {
            $model = $session['Payrollrule_records'];
        } else
            $model = Payrollrule::model()->findAll();


        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport', array(
                    'model' => $model
                        ), true)
        );
    }

    public function actionGeneratePdf() {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once('tcpdf/tcpdf.php');
        require_once('tcpdf/config/lang/eng.php');


        if (isset($session['Payrollrule_dataProvider'])) {
            $dataProvider = $session['Payrollrule_dataProvider'];
        } else
            $dataProvider = new CActiveDataProvider('Payrollrule');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
                ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Payrollrule Report');
        $pdf->SetSubject('Payrollrule Report');
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
        $pdf->Output("Payrollrule_002.pdf", "I");
    }

}
