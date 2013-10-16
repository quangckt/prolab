<?php

class WarehouseoutController extends BaseController {

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

    public function actionGetItems() {
        $sql = 'SELECT id, name as value FROM stock_warehouseout WHERE name LIKE :qterm ORDER BY name ASC';
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
        $model = new Warehouseout;
        //$wh=Warehouse::model()->find('default_wh_out=1');
        //$model->wh_id=  $wh->wh_id; 
        $lines = new WarehouseoutlineManager;
        // Uncomment the following line if AJAX validation is needed
        //$this->performAjaxValidation($model);
        if (isset($_POST['Warehouseout'])) {
            $trans = Yii::app()->db->beginTransaction();
            try {
                $model->attributes = $_POST['Warehouseout'];
                $lines->manage($_POST['Warehouseoutline']);
                $validate = $model->validate();
                $validate &= $lines->validate();
                $kt = isset($_POST['saveAndSetStatus']);
                if ($kt) {
                    $model->status = Warehouseout::STATUS_APPROVED;
                }
                if ($validate) {
                    $model->save(false);
                    $lines->save($model);
                    $trans->commit();
                    if ($kt) {
                        InventorylogManager::saveWarehouseoutToInventorylog($model, Inventorylog::REFTYPE_WH_OUT, -1);
                    }
                    $date = strtotime($model->date);
                    Sequence::addNum('Warehouseout', $date);
                    Yii::app()->user->setFlash('success', '<strong>' . $model->num . '</strong> Ðã lưu thành công.');
                    $this->redirect(array('create'));
                }
            } catch (CException $e) {
                throw $e;
                $trans->rollback();
            }
        }
        $this->render('create', array(
            'model' => $model,
            'lines' => $lines
        ));
    }

    public function actionCreatewithplan() {
        $model = new Warehouseout();
        $lines = new WarehouseoutlineManagerWithplan();
        $printer = new Printer('createwithplan');
//        $printerPlan = new PrinterPlan('createwithplan');
        if (isset($_POST['Warehouseout'])) {
            $trans = Yii::app()->db->beginTransaction();
            try {
                $model->attributes = $_POST['Warehouseout'];
                $printer->attributes = $_POST['Printer'];
//                $printerPlan->attributes = $_POST['PrinterPlan'];
                $lines->manage($_POST['Warehouseoutline']);
                $validate = $model->validate();
                $validate &= $lines->validate();
                $validate &=$printer->validate();
//                $validate &=$printerPlan->validate();
                $kt = isset($_POST['saveAndSetStatus']);
                if ($kt) {
                    $model->status = Warehouseout::STATUS_APPROVED;
                }
                if ($validate) {
                    $model->save(false);
                    $lines->save($model);
                    $trans->commit();
                    if ($kt) {
                        InventorylogManager::saveWarehouseoutToInventorylog($model, Inventorylog::REFTYPE_WH_OUT, -1);
                    }
                    $date = strtotime($model->date);
                    Sequence::addNum('Warehouseout', $date);
                    Yii::app()->user->setFlash('success', '<strong>' . $model->num . '</strong> Ðã lưu thành công.');
                    $this->redirect(array('create'));
                }
            } catch (CException $e) {
                throw $e;
                $trans->rollback();
            }
        }
        $this->render('createwithplan', array(
            'model' => $model,
            'lines' => $lines,
            'printer' => $printer,
//            'printerPlan' => $printerPlan
        ));
    }

    public function actionUpdatewithplan($id) {

        $model = $this->loadModel($id);
        $lines = WarehouseoutlineManager::load($model);
        $printer = $this->loadPrinter($model->printerplan->inv_printer_id);
        if (isset($_POST['Warehouseout'])) {
            if ($model->status == Warehouseout::STATUS_NEW || $model->status == Warehouseout::STATUS_CANCEL) {
                $model->attributes = $_POST['Warehouseout'];
                $lines->manage($_POST['Warehouseoutline']);
                $validate = $model->validate();
                $validate = $lines->validate() && $validate;
                if ($validate) {
                    $model->save(false);
                    $lines->save($model);
                    Yii::app()->user->setFlash('success', '<strong>' . $model->num . '</strong> Ðã lưu thành công.');
                    $this->redirect(array('index'));
                }
            }
            else
                Yii::app()->user->setFlash('error', '<strong>' . $model->num . '</strong> [ ' . $model->displayStatus . ' ] nên không sửa được.');
        }

        $this->render('updatewithplan', array(
            'model' => $model,
            'lines' => $lines,
            'printer' => $printer,
        ));
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

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {

        $model = $this->loadModel($id);
        $lines = WarehouseoutlineManager::load($model);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Warehouseout'])) {
            if ($model->status == Warehouseout::STATUS_NEW || $model->status == Warehouseout::STATUS_CANCEL) {
                $model->attributes = $_POST['Warehouseout'];
                $lines->manage($_POST['Warehouseoutline']);
                $validate = $model->validate();
                $validate = $lines->validate() && $validate;
                if ($validate) {
                    $model->save(false);
                    $lines->save($model);
                    Yii::app()->user->setFlash('success', '<strong>' . $model->num . '</strong> Ðã lưu thành công.');
                    $this->redirect(array('index'));
                }
            }
            else
                Yii::app()->user->setFlash('error', '<strong>' . $model->num . '</strong> [ ' . $model->displayStatus . ' ] nên không sửa được.');
        }

        $this->render('update', array(
            'model' => $model,
            'lines' => $lines
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
            // we only allow deletion via POST request
            $m = $this->loadModel($id);
            if ($m->status == Warehouseout::STATUS_NEW) {
                $m->delete();
                $inv = Inventorylog::model()->find('ref_id=:refid And reftype=:reftype', array(':refid' => $id, ':reftype' => Inventorylog::REFTYPE_WH_OUT));
                if ($inv)
                    $inv->delete();
            }
            else
                throw new CHttpException(404, 'Phiếu này [ ' . $m->displayStatus . ' ] nên không xóa được.');

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

        $model = new Warehouseout('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['Warehouseout'])) {
            $model->attributes = $_GET['Warehouseout'];



            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->num))
                $criteria->addCondition('num = "' . $model->num . '"');


            if (!empty($model->date))
                $criteria->addCondition('date = "' . $model->date . '"');


            if (!empty($model->note))
                $criteria->addCondition('note = "' . $model->note . '"');


            if (!empty($model->type))
                $criteria->addCondition('type = "' . $model->type . '"');


            if (!empty($model->create_date))
                $criteria->addCondition('create_date = "' . $model->create_date . '"');


            if (!empty($model->create_uid))
                $criteria->addCondition('create_uid = "' . $model->create_uid . '"');


            if (!empty($model->update_date))
                $criteria->addCondition('update_date = "' . $model->update_date . '"');


            if (!empty($model->update_uid))
                $criteria->addCondition('update_uid = "' . $model->update_uid . '"');


            if (!empty($model->status))
                $criteria->addCondition('status = "' . $model->status . '"');


            if (!empty($model->branch_id))
                $criteria->addCondition('branch_id = "' . $model->branch_id . '"');


            if (!empty($model->amounttotal))
                $criteria->addCondition('amounttotal = "' . $model->amounttotal . '"');
        }
        //$session['Warehouseout_records']=Test::model()->findAll($criteria); 
        $session['Warehouseout_dataProvider'] = $model->search();

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionIndexwithplan() {
        $session = new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();

        $model = new Warehouseout('search');
        $model->unsetAttributes();  // clear any default values

        if (isset($_GET['Warehouseout'])) {
            $model->attributes = $_GET['Warehouseout'];

            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');

            if (!empty($model->num))
                $criteria->addCondition('num = "' . $model->num . '"');


            if (!empty($model->date))
                $criteria->addCondition('date = "' . $model->date . '"');


            if (!empty($model->note))
                $criteria->addCondition('note = "' . $model->note . '"');


            if (!empty($model->type))
                $criteria->addCondition('type = "' . $model->type . '"');


            if (!empty($model->create_date))
                $criteria->addCondition('create_date = "' . $model->create_date . '"');


            if (!empty($model->create_uid))
                $criteria->addCondition('create_uid = "' . $model->create_uid . '"');


            if (!empty($model->update_date))
                $criteria->addCondition('update_date = "' . $model->update_date . '"');


            if (!empty($model->update_uid))
                $criteria->addCondition('update_uid = "' . $model->update_uid . '"');


            if (!empty($model->status))
                $criteria->addCondition('status = "' . $model->status . '"');


            if (!empty($model->branch_id))
                $criteria->addCondition('branch_id = "' . $model->branch_id . '"');


            if (!empty($model->amounttotal))
                $criteria->addCondition('amounttotal = "' . $model->amounttotal . '"');
        }
        //$session['Warehouseout_records']=Test::model()->findAll($criteria); 
        $session['Warehouseout_dataProvider'] = $model->search();

        $this->render('indexwithplan', array(
            'model' => $model,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Warehouseout('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Warehouseout']))
            $model->attributes = $_GET['Warehouseout'];

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
        $model = Warehouseout::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    public function loadPrinter($id) {
        $model = Printer::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'warehouseout-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    private function checkParams() {
        if (!isset($_POST['selectedItems']) && !isset($_POST['status'])) {
            echo 'selectedItems and model are incorred! ';
            exit();
        };
    }

    public function actionUpdateStatus() {
        $this->checkParams();
        $validate = true;
        $status = $_POST['status'];
        $selectedItems = $_POST['selectedItems'];
        if (isset($selectedItems))
            sort($selectedItems);
        foreach ($selectedItems as $id) {
            if ($status == Warehouseout::STATUS_APPROVED)
                $validate &= $this->whout_approved($id);
            if ($status == Warehouseout::STATUS_CANCEL)
                $validate &= $this->whout_cancel($id);
            if ($status == Warehouseout::STATUS_LOCKED)
                $validate &= $this->whout_lock($id);
        }
        if ($validate)
            echo 'ok';
        exit();
    }

    private function whout_lock($id) {
        $model = Warehouseout::model()->findByPk($id);
        if ($model->status == Warehouseout::STATUS_LOCKED)
            return false;
        if ($model->status == Warehouseout::STATUS_NEW) {
            echo $model->num . " => Chưa xuất kho";
            return false;
        }
        $model->status = $model::STATUS_LOCKED;
        return $model->save(false);
    }

    private function whout_cancel($id) {
        $model = Warehouseout::model()->findByPk($id);
        if ($model->status == Warehouseout::STATUS_LOCKED) {
            echo $model->num . " ==> Đã khóa \n";
            return false;
        }
        if ($model->status == Warehouseout::STATUS_NEW) {
            echo $model->num . " ==> Chưa xuất kho \n";
            return false;
        }

        try {
            $model->status = Warehouseout::STATUS_CANCEL;
            $validate = InventorylogManager::saveWarehouseoutToInventorylog($model, Inventorylog::REFTYPE_WH_OUT_CANCEL - 1);
            if ($validate)
                return $model->save(false);
        } catch (CException $e) {
            echo print_r($e, true);
            return false;
        }
        return false;
    }

    private function whout_approved($id) {
        try {
            $model = Warehouseout::model()->findByPk($id);
            if ($model->status == Warehouseout::STATUS_CANCEL) {
                echo $model->num . " => Đã bị hủy ";
                return false;
            }
            if ($model->status == Warehouseout::STATUS_APPROVED || $model->status == Warehouseout::STATUS_LOCKED) {
                echo $model->num . " => Đã xuất kho ";
                return false;
            }
            $validate = InventorylogManager::saveWarehouseoutToInventorylog($model, Inventorylog::REFTYPE_WH_OUT, -1);
            if ($validate) {
                $model->status = $model::STATUS_APPROVED;
                $model->save(false);
                return true;
            }
        } catch (CException $e) {
            throw new CException(Yii::t('yii', 'Warehouseout_Inventory_IN: {error} ', array('{error}' => $e->getMessage())));
            return false;
        }
        return false;
    }

    public function actionProductUsed() {
        if (isset($_POST['f'])) {
            $fromDate = date('Y-m-d', CDateTimeParser::parse($_POST['f']['fromDate'], 'dd-MM-yyyy'));
            $toDate = date('Y-m-d', CDateTimeParser::parse($_POST['f']['toDate'], 'dd-MM-yyyy'));
            $wh_id = 0;
            $wh = Warehouse::model()->find('isM=1');
            if (isset($wh))
                $wh_id = $wh->id;
            $id = $this->createWarehouseOut($fromDate, $toDate, $wh_id);
            if ($id > 0)
                return $this->actionUpdate($id);
        }
        $this->render('productUsed');
    }

    private function getProductUsed($fromDate, $toDate, $wh_id) {
        $sql = "
            	SELECT 	a.product_id, sum(a.qty) qty,p.uom_id,p.name FROM (
                SELECT d.product_id product_id, d.qty qty  FROM inv_inventorylog i 
                INNER JOIN inv_inventorylogdetail d on i.id=d.inventorylog_id 
                WHERE i.refdate<='$toDate' and d.wh_id=$wh_id
                UNION All
                SELECT d.product_id, -d.qtystd  FROM inv_check_inventory i 
                INNER JOIN inv_check_inventorydetails d on i.id=d.check_inventory_id 
                WHERE i.date>='$fromDate' and i.date<='$toDate' and  i.wh_id=$wh_id and i.`status`=1
	           ) a INNER JOIN product_item p  on a.product_id=p.id
                GROUP BY a.product_id
                HAVING sum(a.qty)>0
            ";

        $command = Yii::app()->db->createCommand($sql);
        return $command->queryAll();
    }

    private function createWarehouseOut($fromDate, $toDate, $wh_id) {
        $result = $this->getProductUsed($fromDate, $toDate, $wh_id);
        if (count($result) == 0 or !isset($result))
            return 0;

        $whOut = new Warehouseout();
        $whOut->num = "XVT_" . date('dmy', time());

        $whOut->date = date('d-m-Y', strtotime($toDate));
        $whOut->note = ' Hàng xuất sử dụng ';
        $whOut->type = 1;
        $whOut->wh_id = $wh_id;
        $whOut->status = 0;
        $whOut->branch_id = 1;
        // $whOut->validate();
        if ($whOut->save(false)) {


            foreach ($result as $item) {
                // var_dump($item);
                $whd = new Warehouseoutline();
                $whd->warehouseout_id = $whOut->id;
                $whd->product_id = $item['product_id'];
                $whd->qty = $item['qty'];
                $whd->qtystd = $item['qty'];
                $whd->description = $item['name'];
                $whd->uom_id = $item['uom_id'];
                //  var_dump($whd);
                // die();
                $whd->save(false);
            }
            return $whOut->id;
        }
        return 0;
    }

    public function actionGenerateExcel() {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Warehouseout_records'])) {
            $model = $session['Warehouseout_records'];
        }
        else
            $model = Warehouseout::model()->findAll();
        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport', array(
                    'model' => $model
                        ), true)
        );
    }

    public function actionGeneratePdf() {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once('tcpdf/tcpdf.php');
        require_once('tcpdf/config/lang/eng.php');


        if (isset($session['Warehouseout_dataProvider'])) {
            $dataProvider = $session['Warehouseout_dataProvider'];
        }
        else
            $dataProvider = new CActiveDataProvider('Warehouseout');


        $html = $this->renderPartial('expenseGridtoReport', array(
            'dataProvider' => $dataProvider
                ), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Warehouseout Report');
        $pdf->SetSubject('Warehouseout Report');
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
        $pdf->Output("Warehouseout_002.pdf", "I");
    }

    public function actionGetCountOfMonth() {
        $date = date('Y-m', strtotime($_POST['date']));
        $sql = "select num from inv_warehouseout WHERE id =(SELECT MAX(id) from inv_warehouseout WHERE DATE_FORMAT(date,'%Y-%m') = :date)";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":date", $date, PDO::PARAM_STR);
        $result = $command->queryAll();
        if ($result == null) {
            $number = sprintf('%1$03d', 1);
        } else {
            $n = explode('-', $result[0]['num']);
            $number = sprintf('%1$03d', $n[1] + 1);
        }
        echo CJSON::encode(array('count' => $number));
        exit;
    }

    public function actionGetStockByType() {
        $type = WarehouseoutType::model()->findByPk($_POST['type_id']);
        echo CJSON::encode(array('id' => $type->wh->id, 'name' => $type->wh->name));
        exit();
    }

}