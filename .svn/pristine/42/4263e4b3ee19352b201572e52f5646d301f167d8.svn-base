<?php

class ShareController extends BaseController
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
        $sql = 'SELECT id, name as value FROM hr_share WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new Share;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Share'])) {
            $model->attributes = $_POST['Share'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionCreateValueOfStock()
    {
        $model = Share::model()->find();
        if (isset($_POST['Share'])) {
            try {
                $model->attributes = $_POST['Share'];
                if ($model->validate()) {
                    if ($model->save(false)) {
                        Yii::app()->user->setFlash('success', '<strong>Tạo giá trị cổ phần thành công!</strong>');
                        $this->redirect(array('index'));
                    }
                }
            } catch (CException $e) {
                throw $e;
            }
        }
        $this->render('createValueOfStock', array('model' => $model));
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

        if (isset($_POST['Share'])) {
            $model->attributes = $_POST['Share'];
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
        $model = Share::model()->find();
        $sql = 'SELECT tt.emp_id as id, e.code, CONCAT_WS(" ",e.firstname,e.middlename,e.lastname) as fullName, e.amtOfStock, e.qtyOfStock, (tt.sumAmtT - IFNULL(pp.sumAmtP,0) + IFNULL(pdpd.sumPeriodPd,0)) as currentpayPeriod, e.rateOfStock
FROM (SELECT *, SUM(case t.type when 2 then 0 else t.amt end) as sumAmtT FROM hr_transaction t GROUP BY t.emp_id) as tt
LEFT JOIN (SELECT *, SUM(case p.type1 when 2 then -1 else 1 end *p.amt) as sumAmtP FROM hr_payment p GROUP BY p.emp_id) as pp on tt.emp_id = pp.emp_id
LEFT JOIN (SELECT *, SUM(case pd.type when 0 then 0 else pd.period end) as sumPeriodPd FROM hr_payperioddetail pd GROUP BY pd.emp_id) as pdpd on tt.emp_id = pdpd.emp_id
INNER JOIN hr_employee e on tt.emp_id = e.id';
        $rawData = Yii::app()->db->createCommand($sql)->queryAll();
        $dataProvider = new CArrayDataProvider($rawData, array(
            'id' => 'totalDetail',
            'sort' => array(
                'attributes' => array(
                    'id', 'code', 'fullName', 'amtOfStock', 'qtyOfStock', 'currentpayPeriod', 'rateOfStock'
                ),
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));

        //FOR ROLE NHANVIEN //

        $sql1 = 'SELECT tt.emp_id as id, e.code, CONCAT_WS(" ",e.firstname,e.middlename,e.lastname) as fullName, e.amtOfStock, e.qtyOfStock, (tt.sumAmtT - IFNULL(pp.sumAmtP,0) + IFNULL(pdpd.sumPeriodPd,0)) as currentpayPeriod, e.rateOfStock
FROM (SELECT *, SUM(case t.type when 2 then 0 else t.amt end) as sumAmtT FROM hr_transaction t GROUP BY t.emp_id) as tt
LEFT JOIN (SELECT *, SUM(case p.type1 when 2 then -1 else 1 end *p.amt) as sumAmtP FROM hr_payment p GROUP BY p.emp_id) as pp on tt.emp_id = pp.emp_id
LEFT JOIN (SELECT *, SUM(case pd.type when 0 then 0 else pd.period end) as sumPeriodPd FROM hr_payperioddetail pd GROUP BY pd.emp_id) as pdpd on tt.emp_id = pdpd.emp_id
INNER JOIN hr_employee e on tt.emp_id = e.id
WHERE tt.emp_id = :emp_id';
        $user = User::model()->find('id=:id', array(':id' => Yii::app()->user->id));
        $emp_id = $user->emp_id;
        $rawData1 = Yii::app()->db->createCommand($sql1);
        $rawData1->bindParam(':emp_id', $emp_id, PDO::PARAM_STR);
        $rawDataNew = $rawData1->queryAll();
        $dataProvider1 = new CArrayDataProvider($rawDataNew, array(
            'id' => 'myTotalDetail',
            'sort' => array(
                'attributes' => array(
                    'id', 'code', 'fullName', 'amtOfStock', 'qtyOfStock', 'currentpayPeriod', 'rateOfStock'
                ),
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));

        //BUY STOCK
        $sql = 'SELECT t.batch_id as id, b.date as bdate, b.name, b.amt as bamt, b.qty as bqty, b.note, t.emp_id, e.code, CONCAT_WS(" ",e.firstname,e.middlename,e.lastname) as fullName, t.date as tdate, t.amt as amtBuy, t.qty as qtyBuy, p.amt as amtCash
FROM hr_transaction t
LEFT JOIN hr_payment p on t.emp_id = p.emp_id AND t.batch_id = p.batch_id
INNER JOIN hr_employee e on t.emp_id = e.id
INNER JOIN hr_batch b on t.batch_id = b.id
WHERE t.emp_id = :emp_id AND t.type = 0';
        $rawData = Yii::app()->db->createCommand($sql);
        $rawData->bindParam(':emp_id', $emp_id);
        $rawDataNew = $rawData->queryAll();
        $dataProviderBuy = new CArrayDataProvider($rawDataNew, array(
            'id' => 'detailStockerBuy',
            'sort' => array(
                'attributes' => array(
                    'id', 'bdate', 'name', 'bamt', 'bqty', 'note', 'emp_id', 'code', 'fullName', 'tdate', 'amtBuy', 'qtyBuy', 'amtCash'
                ),
            ),
            'pagination' => array(
                'pageSize' => 2,
            ),
        ));
        //SELL STOCK
        $dataProviderSell = new CActiveDataProvider('Transaction', array(
            'id' => 'detailStockerSell',
            'criteria' => array(
                'condition' => 'type = 2 and emp_id=' . $emp_id, //Sell stock : 2
            ),
            'pagination' => array(
                'pageSize' => 5,
            ),
        ));
        //CAPITALINCREASE
        $sql = 'SELECT t.batch_id as id, b.date as bdate, b.name, b.amt as bamt, b.qty as bqty, b.note, t.emp_id, e.code, CONCAT_WS(" ",e.firstname,e.middlename,e.lastname) as fullName, t.date as tdate, t.amt as amtCI, t.qty as qtyCI, p.amt as amtCashCI
FROM hr_transaction t
LEFT JOIN hr_payment p on t.emp_id = p.emp_id AND t.batch_id = p.batch_id
INNER JOIN hr_employee e on t.emp_id = e.id
INNER JOIN hr_batch b on t.batch_id = b.id
WHERE t.emp_id = :emp_id AND t.type = 1';
        $rawData = Yii::app()->db->createCommand($sql);
        $rawData->bindParam(':emp_id', $emp_id);
        $rawDataNew = $rawData->queryAll();
        $dataProviderCI = new CArrayDataProvider($rawDataNew, array(
            'id' => 'detailStockerCI',
            'sort' => array(
                'attributes' => array(
                    'id', 'bdate', 'name', 'bamt', 'bqty', 'note', 'emp_id', 'code', 'fullName', 'tdate', 'amtCI', 'qtyCI', 'amtCashCI'
                ),
            ),
            'pagination' => array(
                'pageSize' => 2,
            ),
        ));
        //PAYPERIOD LOAN
        $dataProviderPayPeriod = new CActiveDataProvider('Payment', array(
            'id' => 'detailStockerPayPeriod',
            'criteria' => array(
                'condition' => 'type1 = 3 and emp_id=' . $emp_id, //payPeriodstock : 3
            ),
            'pagination' => array(
                'pageSize' => 5,
            ),
        ));

        //FOR ROLE NHANVIEN //

        $this->render('index', array(
            'model' => $model,
            'dataProvider' => $dataProvider,
            'dataProvider1' => $dataProvider1,
            'dataProviderBuy' => $dataProviderBuy,
            'dataProviderSell' => $dataProviderSell,
            'dataProviderCI' => $dataProviderCI,
            'dataProviderPayPeriod' => $dataProviderPayPeriod,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Share('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Share']))
            $model->attributes = $_GET['Share'];

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
        $model = Share::model()->findByPk($id);
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
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'share-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGenerateExcel()
    {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Share_records'])) {
            $model = $session['Share_records'];
        }
        else
            $model = Share::model()->findAll();


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


        if (isset($session['Share_dataProvider'])) {
            $dataProvider = $session['Share_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('Share');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
        ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Share Report');
        $pdf->SetSubject('Share Report');
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
        $pdf->Output("Share_002.pdf", "I");
    }

    public function actionTotalStock()
    {
        $sql = 'SELECT tt.emp_id as id, e.code, CONCAT_WS(" ",e.firstname,e.middlename,e.lastname) as fullName, e.amtOfStock, e.qtyOfStock, (tt.sumAmtT - IFNULL(pp.sumAmtP,0) + IFNULL(pdpd.sumPeriodPd,0)) as currentpayPeriod, e.rateOfStock
FROM (SELECT *, SUM(case t.type when 2 then 0 else t.amt end) as sumAmtT FROM hr_transaction t GROUP BY t.emp_id) as tt
LEFT JOIN (SELECT *, SUM(case p.type1 when 2 then -1 else 1 end *p.amt) as sumAmtP FROM hr_payment p GROUP BY p.emp_id) as pp on tt.emp_id = pp.emp_id
LEFT JOIN (SELECT *, SUM(case pd.type when 0 then 0 else pd.period end) as sumPeriodPd FROM hr_payperioddetail pd GROUP BY pd.emp_id) as pdpd on tt.emp_id = pdpd.emp_id
INNER JOIN hr_employee e on tt.emp_id = e.id';
        $rawData = Yii::app()->db->createCommand($sql)->queryAll();
        $dataProvider = new CArrayDataProvider($rawData, array(
            'id' => 'totalDetail',
            'sort' => array(
                'attributes' => array(
                    'id', 'code', 'fullName', 'amtOfStock', 'qtyOfStock', 'currentpayPeriod', 'rateOfStock'
                ),
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));

        $this->render('totalStock', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionDetailStocker($id)
    {
        //BUY STOCK
        $sql = 'SELECT t.batch_id as id, b.date as bdate, b.name, b.amt as bamt, b.qty as bqty, b.note, t.emp_id, e.code, CONCAT_WS(" ",e.firstname,e.middlename,e.lastname) as fullName, t.date as tdate, t.amt as amtBuy, t.qty as qtyBuy, p.amt as amtCash
FROM hr_transaction t
LEFT JOIN hr_payment p on t.emp_id = p.emp_id AND t.batch_id = p.batch_id
INNER JOIN hr_employee e on t.emp_id = e.id
INNER JOIN hr_batch b on t.batch_id = b.id
WHERE t.emp_id = :emp_id AND t.type = 0';
        $rawData = Yii::app()->db->createCommand($sql);
        $rawData->bindParam(':emp_id', $id);
        $rawDataNew = $rawData->queryAll();
        $dataProviderBuy = new CArrayDataProvider($rawDataNew, array(
            'id' => 'detailStockerBuy',
            'sort' => array(
                'attributes' => array(
                    'id', 'bdate', 'name', 'bamt', 'bqty', 'note', 'emp_id', 'code', 'fullName', 'tdate', 'amtBuy', 'qtyBuy', 'amtCash'
                ),
            ),
            'pagination' => array(
                'pageSize' => 2,
            ),
        ));
        //SELL STOCK
        $dataProviderSell = new CActiveDataProvider('Transaction', array(
            'id' => 'detailStockerSell',
            'criteria' => array(
                'condition' => 'type = 2 and emp_id=' . $id, //Sell stock : 2
            ),
            'pagination' => array(
                'pageSize' => 5,
            ),
        ));
        //CAPITALINCREASE
        $sql = 'SELECT t.batch_id as id, b.date as bdate, b.name, b.amt as bamt, b.qty as bqty, b.note, t.emp_id, e.code, CONCAT_WS(" ",e.firstname,e.middlename,e.lastname) as fullName, t.date as tdate, t.amt as amtCI, t.qty as qtyCI, p.amt as amtCashCI
FROM hr_transaction t
LEFT JOIN hr_payment p on t.emp_id = p.emp_id AND t.batch_id = p.batch_id
INNER JOIN hr_employee e on t.emp_id = e.id
INNER JOIN hr_batch b on t.batch_id = b.id
WHERE t.emp_id = :emp_id AND t.type = 1';
        $rawData = Yii::app()->db->createCommand($sql);
        $rawData->bindParam(':emp_id', $id);
        $rawDataNew = $rawData->queryAll();
        $dataProviderCI = new CArrayDataProvider($rawDataNew, array(
            'id' => 'detailStockerCI',
            'sort' => array(
                'attributes' => array(
                    'id', 'bdate', 'name', 'bamt', 'bqty', 'note', 'emp_id', 'code', 'fullName', 'tdate', 'amtCI', 'qtyCI', 'amtCashCI'
                ),
            ),
            'pagination' => array(
                'pageSize' => 2,
            ),
        ));
        //PAYPERIOD LOAN
        $dataProviderPayPeriod = new CActiveDataProvider('Payment', array(
            'id' => 'detailStockerPayPeriod',
            'criteria' => array(
                'condition' => 'type1 = 3 and emp_id=' . $id, //payPeriodstock : 3
            ),
            'pagination' => array(
                'pageSize' => 5,
            ),
        ));

        $this->render('detailStocker', array(
            'dataProviderBuy' => $dataProviderBuy,
            'dataProviderSell' => $dataProviderSell,
            'dataProviderCI' => $dataProviderCI,
            'dataProviderPayPeriod' => $dataProviderPayPeriod,
        ));
    }

    public function batchCode($data, $row, $all)
    {
        return $data->employee->code . '/<strong>' . ($row + 1) . '</strong>';
    }
}
