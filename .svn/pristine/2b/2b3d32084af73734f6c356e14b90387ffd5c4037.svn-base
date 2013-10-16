<?php

class ParamsalaryController extends BaseController {

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
        $sql = 'SELECT id, name as value FROM hr_paramsalary WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new Paramsalary;
        $monthNewNew = null;
        $yearNew = null;
        if (isset($_POST['Paramsalary'])) {
            $month = trim($_POST['Paramsalary']['month']);
            $year = trim($_POST['Paramsalary']['year']);
            $checkMonth = substr($month, 0, 2);
            $model->attributes = $_POST['Paramsalary'];
            if ($model->validate()) {
                if (strlen($checkMonth) < 2)
                    $monthNew = '0' . $checkMonth;
                else {
                    $monthNew = $month;
                }
                if ((int) $monthNew > 0 && (int) $monthNew < 13)
                    $monthNewNew = $monthNew;
                else
                    $model->addError('month', 'Tháng phải nằm trong khoảng 01->12 !!!');
                if ($year >= 1971 && $year <= date('Y'))
                    $yearNew = $year;
                else
                    $model->addError('year', 'Năm phải nằm trong khoảng 1971->' . date('Y') . '!!!');

                if (!empty($monthNewNew) && !empty($yearNew)) {
                    $model->monthYear = $monthNewNew . '-' . $yearNew;
                    try {
                        $model->save();
                        Yii::app()->user->setFlash('success', '<strong>Tạo thành công.</strong>');
                    } catch (CException $ex) {
                        $model->addError('duplicate', 'Tham số cho tháng ' . $model->monthYear . ' đã tồn tại!!!');
                        $model->addError('month', '');
                        $model->addError('year', '');
                    }
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
        $list = explode('-', $model->monthYear);
        $model->month = $list[0];
        $model->year = $list[1];

        if (isset($_POST['Paramsalary'])) {
            $month = trim($_POST['Paramsalary']['month']);
            $year = trim($_POST['Paramsalary']['year']);
            $checkMonth = substr($month, 0, 2);
            $model->attributes = $_POST['Paramsalary'];
            if ($model->validate()) {
                if (strlen($checkMonth) < 2)
                    $monthNew = '0' . $checkMonth;
                else {
                    $monthNew = $month;
                }
                if ((int) $monthNew > 0 && (int) $monthNew < 13)
                    $monthNewNew = $monthNew;
                else
                    $model->addError('month', 'Tháng phải nằm trong khoảng 01->12 !!!');
                if ($year >= 1971 && $year <= date('Y'))
                    $yearNew = $year;
                else
                    $model->addError('year', 'Năm phải nằm trong khoảng 1971->' . date('Y') . '!!!');

                if (!empty($monthNewNew) && !empty($yearNew)) {
                    $model->monthYear = $monthNewNew . '-' . $yearNew;
                    try {
                        $model->save();
                        Yii::app()->user->setFlash('success', '<strong>Tạo thành công.</strong>');
                    } catch (CException $ex) {
                        $model->addError('duplicate', 'Tham số cho tháng ' . $model->monthYear . ' đã tồn tại!!!');
                        $model->addError('month', '');
                        $model->addError('year', '');
                    }
                }
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionCreateParamSal() {
        $model = new Paramsalary;
        $monthNewNew = null;
        $yearNew = null;
        if (isset($_POST['Paramsalary'])) {
            $month = trim($_POST['Paramsalary']['month']);
            $year = trim($_POST['Paramsalary']['year']);
            $checkMonth = substr($month, 0, 2);
            $model->attributes = $_POST['Paramsalary'];
            if ($model->validate()) {
                if (strlen($checkMonth) < 2)
                    $monthNew = '0' . $checkMonth;
                else {
                    $monthNew = $month;
                }
                if ((int) $monthNew > 0 && (int) $monthNew < 13)
                    $monthNewNew = $monthNew;
                else {
                    echo CJSON::encode(array('month' => 'Tháng phải nằm trong khoảng 01->12 !!!'));
                    exit;
                }
                if ($year >= 1971 && $year <= date('Y'))
                    $yearNew = $year;
                else {
                    echo CJSON::encode(array('year' => 'Năm phải nằm trong khoảng 1971->' . date('Y') . '!!!'));
                    exit;
                }

                if (!empty($monthNewNew) && !empty($yearNew)) {
                    $model->monthYear = $monthNewNew . '-' . $yearNew;
                    try {
                        //$model->save();
                        echo CJSON::encode(array('success' => 'Tạo thành công.'));
                        exit;
                    } catch (CException $ex) {
                        echo CJSON::encode(array('error' => 'Tham số cho tháng ' . $model->monthYear . ' đã tồn tại!!!'));
                        exit;
                    }
                }
            } else {
                echo CActiveForm::validate($model);
                exit;
            }
        }
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

        $model = new Paramsalary('search');
        $model->unsetAttributes(); // clear any default values

        if (isset($_GET['Paramsalary'])) {
            $model->attributes = $_GET['Paramsalary'];
            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');
            if (!empty($model->basic))
                $criteria->addCondition('basic = "' . $model->basic . '"');
            if (!empty($model->amountOfRice))
                $criteria->addCondition('amountOfRice = "' . $model->amountOfRice . '"');
            if (!empty($model->rateIndirecSal))
                $criteria->addCondition('rateIndirecSal = "' . $model->rateIndirecSal . '"');
            if (!empty($model->productSal))
                $criteria->addCondition('productSal = "' . $model->productSal . '"');
            if (!empty($model->totalBonusDirecSal))
                $criteria->addCondition('totalBonusDirecSal = "' . $model->totalBonusDirecSal . '"');
            if (!empty($model->totalBonusIndirectSal))
                $criteria->addCondition('totalBonusIndirectSal = "' . $model->totalBonusIndirectSal . '"');
            if (!empty($model->addIndirectSal))
                $criteria->addCondition('addIndirectSal = "' . $model->addIndirectSal . '"');
            if (!empty($model->reserFundSal))
                $criteria->addCondition('reserFundSal = "' . $model->reserFundSal . '"');
        }
        //$session['Paramsalary_records']=Test::model()->findAll($criteria);
        $session['Paramsalary_dataProvider'] = $model->search();

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionAcceptOthRecPay() {
        var_dump('test');
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Paramsalary('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Paramsalary']))
            $model->attributes = $_GET['Paramsalary'];

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
        $model = Paramsalary::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'paramsalary-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel() {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Paramsalary_records'])) {
            $model = $session['Paramsalary_records'];
        }
        else
            $model = Paramsalary::model()->findAll();


        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport', array(
                    'model' => $model
                        ), true)
        );
    }

    public function actionGeneratePdf() {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once('tcpdf/tcpdf.php');
        require_once('tcpdf/config/lang/eng.php');


        if (isset($session['Paramsalary_dataProvider'])) {
            $dataProvider = $session['Paramsalary_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('Paramsalary');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
                ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Paramsalary Report');
        $pdf->SetSubject('Paramsalary Report');
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
        $pdf->Output("Paramsalary_002.pdf", "I");
    }

}
