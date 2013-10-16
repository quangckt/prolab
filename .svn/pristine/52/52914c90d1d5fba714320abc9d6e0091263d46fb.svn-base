<?php

class ProfitDetailController extends BaseController
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
        $sql = 'SELECT id, name as value FROM hr_profit_detail WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new ProfitDetail;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['ProfitDetail'])) {
            $model->attributes = $_POST['ProfitDetail'];
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

        if (isset($_POST['ProfitDetail'])) {
            $model->attributes = $_POST['ProfitDetail'];
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
        $modelProfit = new Profit();
        $profitAmt = null;
        $profitDate = null;

        if (isset($_GET['Profit']['amt'])) {
            $profitAmt = str_replace('.', '', $_GET['Profit']['amt']);
        }
        if (isset($_GET['Profit']['date'])) {
            $profitDate = $_GET['Profit']['date'];
        }

        $rawData = Yii::app()->db->createCommand('SELECT  t.emp_id, e.code, CONCAT_WS(" ",e.firstname,e.middlename,e.lastname) as fullName, e.rateOfStock,
SUM(CASE t.type when 2 then -1 else 1 end * amt) as amtCurrent
FROM hr_transaction t
INNER JOIN hr_employee e ON t.emp_id = e.id
GROUP BY  t.emp_id
HAVING amtCurrent > 0')->queryAll();
        $dataProvider = new CArrayDataProvider($rawData, array(
            'id' => 'proFitGrid',
            'keys' => array(
                'profitAmt' => $profitAmt,
            ),
            'sort' => array(
                'attributes' => array(
                    'emp_id', 'code', 'fullName', 'rateOfStock', 'amtCurrent'
                ),
            ),
            'pagination' => array(
                'pageSize' => 100,
            ),
        ));
        $listArray = $dataProvider->getData();

        if (isset($_GET['checkPressButton'])) {
            if ($_GET['checkPressButton'] == 1) {
                $sumValueOfStock = Share::model()->find();
                $profit = new Profit();
                $profit->attributes = $_GET['Profit'];
                $profit->type = 0;
                if ($profit->save(false)) {
                    foreach ($listArray as $item) {
                        $profitDetail = new ProfitDetail();
                        $amt = ($item['rateOfStock'] * $profitAmt) / 100;
                        $profitDetail->setAttributes(array('profit_id' => $profit->id, 'emp_id' => $item['emp_id'], 'amt' => $amt, 'type' => 0, 'date' => $profitDate));
                        $profitDetail->save(false);
                    }
                }
            }
        }

        $this->render('index', array(
            'modelProfit' => $modelProfit,
            'dataProvider' => $dataProvider,
            'listArray' => $listArray,
        ));
    }

    public function actionShowEOSP($profit_id, $amt)
    {
        $sumAmtEmployee = null;
        $sumAmtCompany = null;
        $amtFormat = number_format($amt, 0, ',', '.');

        $dataProvider = new CActiveDataProvider('ProfitDetail', array(
            'criteria' => array(
                'condition' => 'profit_id=' . $profit_id,
            ),
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));
        $day = $dataProvider->data['0']->attributes['date'];
        foreach ($dataProvider->data as $item) {
            $sumAmtEmployee += $item->attributes['amt'];
        }
        $sumAmtCompany = number_format($amt - $sumAmtEmployee, 0, ',', '.');
        $sumAmtEmployee = number_format($sumAmtEmployee, 0, ',', '.');

        $this->render('showEOSP', array(
            'dataProvider' => $dataProvider,
            'day' => $day,
            'amtFormat' => $amtFormat,
            'sumAmtEmployee' => $sumAmtEmployee,
            'sumAmtCompany' => $sumAmtCompany));
    }

    public function actionAcceptProfit()
    {
        $modelProfit = new Profit();
        $profitAmt = null;
        $profitDate = null;

        if (isset($_GET['Profit']['amt'])) {
            $profitAmt = str_replace('.', '', $_GET['Profit']['amt']);
        }
        if (isset($_GET['Profit']['date'])) {
            $profitDate = $_GET['Profit']['date'];
        }

        $rawData = Yii::app()->db->createCommand('SELECT  t.emp_id, e.code, CONCAT_WS(" ",e.firstname,e.middlename,e.lastname) as fullName, e.rateOfStock,
SUM(CASE t.type when 2 then -1 else 1 end * amt) as amtCurrent
FROM hr_transaction t
INNER JOIN hr_employee e ON t.emp_id = e.id
GROUP BY  t.emp_id
HAVING amtCurrent > 0')->queryAll();
        $dataProvider = new CArrayDataProvider($rawData, array(
            'id' => 'proFitGrid',
            'keys' => array(
                'profitAmt' => $profitAmt,
            ),
            'sort' => array(
                'attributes' => array(
                    'emp_id', 'code', 'fullName', 'rateOfStock', 'amtCurrent'
                ),
            ),
            'pagination' => array(
                'pageSize' => 100,
            ),
        ));
        $listArray = $dataProvider->getData();

        if (isset($_GET['checkPressButton'])) {

            if ($_GET['checkPressButton'] == 1) {
                $sumValueOfStock = Share::model()->find();
                $profit = new Profit();
                $profit->attributes = $_GET['Profit'];
                $profit->type = 1;
                if ($profit->save(false)) {
                    foreach ($listArray as $item) {
                        $profitDetail = new ProfitDetail();
                        $amt = ($item['rateOfStock'] * $profitAmt) / 100;
                        $profitDetail->setAttributes(array('profit_id' => $profit->id, 'emp_id' => $item['emp_id'], 'amt' => $amt, 'type' => 1, 'date' => $profitDate));
                        $profitDetail->save(false);
                    }
                }
            }
        }

        $this->render('acceptProfit', array(
            'modelProfit' => $modelProfit,
            'dataProvider' => $dataProvider,
            'listArray' => $listArray,
        ));
    }

    public function actionAllProfit()
    {
        $dataProvider = new CActiveDataProvider('Profit', array(
            'criteria' => array(
                'condition' => '',
            ),
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));

        $this->render('allProfit', array('dataProvider' => $dataProvider));
    }

    public function actionShowEOST($profit_id, $amt)
    {
        $sumAmtEmployee = null;
        $sumAmtCompany = null;
        $amtFormat = number_format($amt, 0, ',', '.');
        $dataProvider = new CActiveDataProvider('ProfitDetail', array(
            'criteria' => array(
                'condition' => 'profit_id=' . $profit_id,
            ),
            'pagination' => array(
                'pageSize' => 20,
            ),
        ));
        $day = $dataProvider->data['0']->attributes['date'];
        foreach ($dataProvider->data as $item) {
            $sumAmtEmployee += $item->attributes['amt'];
        }
        $sumAmtCompany = number_format($amt - $sumAmtEmployee, 0, ',', '.');
        $sumAmtEmployee = number_format($sumAmtEmployee, 0, ',', '.');
        $this->render('showEOST', array(
            'dataProvider' => $dataProvider,
            'day' => $day,
            'amtFormat' => $amtFormat,
            'sumAmtEmployee' => $sumAmtEmployee,
            'sumAmtCompany' => $sumAmtCompany));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new ProfitDetail('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['ProfitDetail']))
            $model->attributes = $_GET['ProfitDetail'];

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
        $model = ProfitDetail::model()->findByPk($id);
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
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'profit-detail-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel()
    {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['ProfitDetail_records'])) {
            $model = $session['ProfitDetail_records'];
        }
        else
            $model = ProfitDetail::model()->findAll();


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


        if (isset($session['ProfitDetail_dataProvider'])) {
            $dataProvider = $session['ProfitDetail_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('ProfitDetail');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
        ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('ProfitDetail Report');
        $pdf->SetSubject('ProfitDetail Report');
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
        $pdf->Output("ProfitDetail_002.pdf", "I");
    }

    public function valueOfProfit($data, $row, $All)
    {
        $sumValueOfStock = Share::model()->find();
        return ($data['rateOfStock'] * $All->grid->dataProvider->keys['profitAmt']) / 100;
    }

    public function sumValueOfProfit($data, $row, $All)
    {
        $sql = 'SELECT emp_id, SUM(CASE type when 1 then -1 else 1 end * amt) as amtProfit
                FROM hr_profit_detail
                WHERE emp_id=:emp_id
                GROUP BY emp_id';
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(':emp_id', $data['emp_id']);
        $profitOfStockEr = $command->queryRow();
        if (empty($profitOfStockEr['amtProfit'])) {
            return 0;
        } else return $profitOfStockEr['amtProfit'];
    }

    public function sumValueOfProfit1($data, $row, $All)
    {
        $emp_id = $data['emp_id'];
        $sql = 'SELECT emp_id, SUM(CASE type when 1 then -1 else 1 end * amt) as amtProfit
                FROM hr_profit_detail
                WHERE emp_id=:emp_id
                GROUP BY emp_id';
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(':emp_id', $emp_id);
        $profitOfStockEr = $command->queryRow();
        $result = $command->queryRow();
        return $result['amtProfit'];
    }
}