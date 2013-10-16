<?php

class WarehouseinController extends BaseController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';


    public function actionGetItems()
    {
        $sql = 'SELECT id, name as value FROM stock_warehousein WHERE name LIKE :qterm ORDER BY name ASC';
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
        $this->render('view', array('model' => $this->loadModel($id), ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {

        $model = new Warehousein;
        $lines = new WarehouseinlineManager;
        // Uncomment the following line if AJAX validation is needed
        //$this->performAjaxValidation($model);

        $trans = Yii::app()->db->beginTransaction();

        if (isset($_POST['Warehousein']))
        {
            try{
                $model->attributes = $_POST['Warehousein'];
                $lines->manage($_POST['Warehouseinline']);
                $validate = $model->validate();
                $validate = $lines->validate() && $validate;
                $model->status =Warehousein::STATUS_NEW;
                if ($validate)
                {
                    $model->save(false);
                    $lines->save($model);
                    $date =strtotime($model->date);
                    Sequence::addNum('Warehousein',$date);
                    $trans->commit();
                    Yii::app()->user->setFlash('success', '<strong>' . $model->num .
                        '</strong> Ðã lưu thành công.');
                    $this->redirect(array('create'));
                } else
                    $trans->rollback();
            }
            catch (CException $e)
            {
                throw $e;
                $trans->rollback();
            }
        }
        $this->render('create', array('model' => $model, 'lines' => $lines));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        $lines = WarehouseinlineManager::load($model);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Warehousein']))
        {
            if ($model->status == Warehousein::STATUS_NEW)
            {
                $model->attributes = $_POST['Warehousein'];
                $lines->manage($_POST['Warehouseinline']);
                $validate = $model->validate();
                $validate = $lines->validate() && $validate;
                if ($validate)
                {
                    $model->save(false);
                    $lines->save($model);
                    Yii::app()->user->setFlash('success', '<strong>' . $model->num .
                        '</strong> Ðã lưu thành công.');
                    $this->redirect(array('index'));
                }
            } else
                Yii::app()->user->setFlash('error', '<strong>' . $model->num . '</strong> [ ' .
                    $model->displayStatus . ' ] nên không sửa được.');
        }

        $this->render('update', array('model' => $model, 'lines' => $lines));
    }


    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest)
        {
            // we only allow deletion via POST request
            $m = $this->loadModel($id);
            if ($m->status == Warehousein::STATUS_NEW || $m->status == Warehousein::STATUS_CANCEL )
            {
                $m->delete();
                $inv = Inventorylog::model()->find('ref_id=:refid And reftype=:reftype', array(':refid' =>
                    $id, ':reftype' => Inventorylog::REFTYPE_WH_IN));
                if ($inv)
                    $inv->delete();
            } else
                throw new CHttpException(404, 'Phiếu này [ ' . $m->displayStatus .
                    ' ] nên không xóa được.');
            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400,
                'Invalid request. Please do not repeat this request again.');

    }


    /**
     * Lists all models.
     */
    public function actionListDetails()
    {
        $session = new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();
        $model = new Warehousein('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Warehousein']))
        {
            $model->attributes = $_GET['Warehousein'];
        }
        $session['Warehousein_dataProvider'] = $model->search();
        $this->render('listDetails', array('model' => $model));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $session = new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();

        $model = new Warehousein('search');
        $model->unsetAttributes(); // clear any default values

        if (isset($_GET['Warehousein']))
        {
            $model->attributes = $_GET['Warehousein'];


            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->num))
                $criteria->addCondition('num = "' . $model->num . '"');


            if (!empty($model->date))
                $criteria->addCondition('date = "' . $model->date . '"');


            if (!empty($model->note))
                $criteria->addCondition('note = "' . $model->note . '"');


            if (!empty($model->invdate))
                $criteria->addCondition('invdate = "' . $model->invdate . '"');


            if (!empty($model->invnum))
                $criteria->addCondition('invnum = "' . $model->invnum . '"');


            if (!empty($model->supplier_id))
                $criteria->addCondition('supplier_id = "' . $model->supplier_id . '"');


            if (!empty($model->paymentterm))
                $criteria->addCondition('paymentterm = "' . $model->paymentterm . '"');


            if (!empty($model->paid))
                $criteria->addCondition('paid = "' . $model->paid . '"');


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


            if (!empty($model->amounttax))
                $criteria->addCondition('amounttax = "' . $model->amounttax . '"');


        }
        // $session['Warehousein_records']=Warehousein::model()->findAll($criteria);
        $session['Warehousein_dataProvider'] = $model->search();

        $this->render('index', array('model' => $model, ));

    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Warehousein('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Warehousein']))
            $model->attributes = $_GET['Warehousein'];

        $this->render('admin', array('model' => $model, ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model = Warehousein::model()->findByPk($id);
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
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'warehousein-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }


    private function checkParams()
    {
        if (!isset($_POST['selectedItems']) && !isset($_POST['status']))
        {
            echo 'selectedItems and model are incorred! ';
            exit();
        }
        ;
    }



  
    

    public function actionUpdateStatus()
    {
        $this->checkParams();
        $validate = true;
        $status = $_POST['status'];
        $selectedItems = $_POST['selectedItems'];
        if (isset($selectedItems))
            sort($selectedItems);
        foreach ($selectedItems as $id)
        {
            if ($status == Warehousein::STATUS_APPROVED)
                $validate &= $this->whin_approved($id);
            if ($status == Warehousein::STATUS_CANCEL)
                $validate &= $this->whin_cancel($id);
            if ($status == Warehousein::STATUS_LOCKED)
                $validate &= $this->whin_lock($id);
        }
        if ($validate)
            echo 'ok';
        exit();
    }

    private function whin_lock($id)
    {
        $model = Warehousein::model()->findByPk($id);
        if ($model->status == Warehousein::STATUS_LOCKED)
            return false;
        if ($model->status == Warehousein::STATUS_NEW)
        {
            echo $model->num . " => Chưa nhập kho \n";
            return false;
        }
        $model->status = $model::STATUS_LOCKED;
        return $model->save(false);
    }

    private function whin_cancel($id)
    {
        $model = Warehousein::model()->findByPk($id);
        if ($model->status == Warehousein::STATUS_LOCKED)
        {
            echo $model->num . " ==> Đã khóa";
            return false;
        }
        if ($model->status == Warehousein::STATUS_NEW)
        {
            echo $model->num . " => Chưa nhập kho \n";
            return;
        }
        try
        {
            $model->status = Warehousein::STATUS_CANCEL;
            $validate=InventorylogManager::saveWarehouseinToInventorylog($model,Inventorylog::REFTYPE_WH_IN_CANCEL,-1);
            if ($validate)
                return $model->save(false);
        }
        catch (CException $e)
        {
            echo print_r($e, true);
            return false;
        }
        return false;
    }

  

    private function whin_approved($id)
    {
        try
        {
            $model = Warehousein::model()->findByPk($id);
            if($model->status==Warehousein::STATUS_CANCEL){
               echo $model->num . " => Đã bị hủy ";
                return false;
            }
            
            if (($model->status == Warehousein::STATUS_APPROVED) || ($model->status ==
                Warehousein::STATUS_LOCKED))
            {
                echo $model->num . " => Đã nhâp kho ";
                return false;
            }
            $validate=InventorylogManager::saveWarehouseinToInventorylog($model,Inventorylog::REFTYPE_WH_IN);
            if ($validate)
            {
                $model->status = $model::STATUS_APPROVED;
                $model->save(false);
                return true;
            }
        }
        catch (CException $e)
        {
            throw new CException(Yii::t('yii', 'warehousein_Inventory_IN: {error} ', array('{error}' =>
                $e->getMessage())));
            return false;
        }
        return false;
    }

    public function actionGenerateExcel()
    {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['Warehousein_records']))
        {
            $model = $session['Warehousein_records'];
        } else
            $model = Warehousein::model()->findAll();

        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport',
            array('model' => $model), true));
    }

    public function actionGeneratePdf()
    {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once ('tcpdf/tcpdf.php');
        require_once ('tcpdf/config/lang/eng.php');
        if (isset($session['Warehousein_dataProvider']))
        {
            $dataProvider = $session['Warehousein_dataProvider'];
        } else
            $dataProvider = new CActiveDataProvider('Warehousein');


        $html = $this->renderPartial('expenseGridtoReport', array('dataProvider' => $dataProvider), true);

        //die($html);
        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('Warehousein Report');
        $pdf->SetSubject('Warehousein Report');
        //$pdf->SetKeywords('example, text, report');
        $pdf->SetHeaderData('', 0, "Report", '');
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, "Example Report by " .
            Yii::app()->name, "");
        $pdf->setHeaderFont(array('helvetica', '', 8));
        $pdf->setFooterFont(array('helvetica', '', 6));
        $pdf->SetMargins(15, 18, 15);
        $pdf->SetHeaderMargin(5);
        $pdf->SetFooterMargin(10);
        $pdf->SetAutoPageBreak(true, 0);
        $pdf->SetFont('dejavusans', '', 7);
        $pdf->AddPage();
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->LastPage();
        $pdf->Output("Warehousein_002.pdf", "I");
    }
    public function actionGetCountOfMonth(){
        $date = date('Y-m',strtotime($_POST['date']));
        $sql ="select num from inv_warehousein WHERE id =(SELECT MAX(id) from inv_warehousein WHERE DATE_FORMAT(date,'%Y-%m') = :date)";
        $command = Yii::app()->db->createCommand($sql);
        $command->bindParam(":date", $date, PDO::PARAM_STR);
        $result = $command->queryAll();
        if($result==null){
            $number = sprintf('%1$03d',1);
        }else{
            $n = explode('-',$result[0]['num']);
            $number = sprintf('%1$03d',$n[1]+1);    
        }
        echo CJSON::encode(array('count'=>$number));
        exit;
    }
}
