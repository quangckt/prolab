<?php

class ProductController extends BaseController
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    public function actionGetItems()
    {
        if(!isset($_GET['w'])){
            $sql = "SELECT p.*, CONCAT(p.code,' ',p.name) as value , c.hascounter FROM product_item p inner join product_category c on c.id=p.category_id  WHERE p.name LIKE :qterm or p.code LIKE :qterm ORDER BY p.name ASC";
            $command = Yii::app()->db->createCommand($sql);
        }
        else{
            
            if($_GET['w']!=-1){
            $sql = "SELECT p.*, CONCAT(p.code,' ',p.name) as value , p.hascounter FROM product_item p inner join product_category c on c.id=p.category_id INNER JOIN inv_inventory i ON i.product_id = p.id WHERE i.wh_id=:w and ( p.name LIKE :qterm or p.code LIKE :qterm ) ORDER BY p.name ASC";
            $command = Yii::app()->db->createCommand($sql);
            $command->bindParam(":w", $_GET['w'], PDO::PARAM_STR);
            } else { $sql = "SELECT p.*, CONCAT(p.code,' ',p.name) as value , c.hascounter FROM product_item p inner join product_category c on c.id=p.category_id  WHERE p.name LIKE :qterm or p.code LIKE :qterm ORDER BY p.name ASC";
            $command = Yii::app()->db->createCommand($sql); }    
        }

        if (isset($_GET['term']))
            $qterm = '%' . $_GET['term'] . '%';
        else
            $qterm = '%';
        $command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
        $result = $command->queryAll();
        $listUom = Uom::model()->findAll();
        $ls = array();
        foreach ($listUom as $item)
            $ls[$item->id] = $item->name;
        foreach ($result as & $item)
        {
            $item['lastcost']= Yii::app()->format->formatNumber($item['lastcost']);
            $item['lastpodate']=date('d-m-Y',strtotime($item['lastpodate']));
            $rels = array();
            $rels[] = array('id' => $item['uom_id'], 'name' => $ls[$item['uom_id']]);
            if (isset($item['po_uom_id'])){
                $rels[] = array('id' => $item['po_uom_id'], 'name' => $ls[$item['po_uom_id']]);
            }
            if (isset($item['so_uom_id'])){
                $rels[] = array('id' => $item['so_uom_id'], 'name' => $ls[$item['so_uom_id']]);
            }
            if(isset($item['work_uom_id'])){
                $rels[] = array('id'=>$item['work_uom_id'],'name'=>$ls[$item['work_uom_id']]);
            }
            $item['uom_list'] = $rels;
        }
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
        $model = new Product;
        if (isset($_POST['Product']))
        {
            $model->attributes = $_POST['Product'];
            $model->type_id =$_POST['Product']['type_id'];
            $model->so_uom_id =$_POST['Product']['so_uom_id'];
            $model->workuom_radio=$_POST['Product']['workuom_radio'];
            $model->workuom_radio_std=$_POST['Product']['workuom_radio_std'];
            
            //$ucm->manage($_POST['UomConvert']);
            if (!isset($_POST['noValidate']))
            {
                $valid = $model->validate();
                if ($valid)
                {
                    $model->save(false);
                    $wh = warehouse::model()->findAll();
                    foreach($wh as $item){
                        $limit = new Limit();
                        $limit->wh_id =$item->id;
                        $limit->product_id =$model->id;
                        $limit->qtyLimit =0;
                        $limit->save(false);
                    }
                    Yii::app()->user->setFlash('success', '<strong>' . $model->name .
                        '</strong> Đã cập nhật thành công.');
                    $this->redirect(array('create'));
                }
            }
        }


        //$this->render('create',array( 'model'=>$model, 'UomConverts'=>$ucm));
        $this->render('create', array('model' => $model));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        
        if(isset($_GET['Inventorylogdetail'])){
            $session=new CHttpSession;
            $session->open();		
            $criteria = new CDbCriteria();
            $criteria->with = array('inventorylog');            
            $detail=new Inventorylogdetail('search');
            $detail->unsetAttributes();  // clear any default values
            $detail->product_id =$model->id;
            $criteria->addCondition('product_id = "'.$detail->product_id.'"');
            $session['Inventorylogdetail_dataProvider']=$detail->search();
            $detail->attributes = $_GET['Inventorylogdetail'];
            $detail->refnum_search =$_GET['Inventorylogdetail']['refnum_search'];
            $detail->refdate_search =$_GET['Inventorylogdetail']['refdate_search'];
            $detail->remarks_search =$_GET['Inventorylogdetail']['remarks_search'];
            if (!empty($detail->refnum_search))
                $criteria->addCondition('inventorylog.refnum_search = "' . $detail->refnum_search . '"');
            if (!empty($detail->refdate_search)){
                $criteria->addCondition('inventorylog.refdate_search = "' . $detail->refdate_search . '"');    
            }
            if (!empty($detail->remarks_search))
                $criteria->addCondition('inventorylog.refmarks_search = "' . $detail->remarks_search . '"');
            if (!empty($detail->qty))
                $criteria->addCondition('qty = "' . $detail->qty . '"');
            if (!empty($detail->cost))
                $criteria->addCondition('cost = "' . $detail->cost . '"');        
            $session['Inventorylogdetail_dataProvider']=$detail->search();
            $this->render('index_history', array('detail' => $detail, ));
            exit();                    
        }
        if(isset($_GET['ajax'])&&$_GET['ajax']=='limit-grid' ){
            $session1=new CHttpSession;
            $session1->open();		
             $criteria = new CDbCriteria();            
             $limit=new Limit('search');
             $limit->unsetAttributes();  // clear any default values
             $limit->product_id =$model->id;
             $criteria->addCondition('product_id = "'.$limit->product_id.'"');
             $session1['Limit_dataProvider']=$model->search();
            $this->render('index_Limit', array('limit' => $limit));
            exit();
        }
        // $this->performAjaxValidation($model);
        if (isset($_POST['Product']))
        {
            $model->attributes = $_POST['Product'];
            $model->save();
            Yii::app()->user->setFlash('success', '<strong>' . $model->name .
                '</strong> Đã cập nhật thành công.');
            $this->redirect(array('index'));
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
        if (Yii::app()->request->isPostRequest)
        {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

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
    public function actionIndex()
    {
        $session = new CHttpSession;
        $session->open();
        $criteria = new CDbCriteria();
        $model = new Product('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Product']))
        {
            $model->attributes = $_GET['Product'];

            if (!empty($model->id))
                $criteria->addCondition('id = "' . $model->id . '"');


            if (!empty($model->code))
                $criteria->addCondition('code = "' . $model->code . '"');


            if (!empty($model->name))
                $criteria->addCondition('name = "' . $model->name . '"');


            if (!empty($model->create_uid))
                $criteria->addCondition('create_uid = "' . $model->create_uid . '"');


            if (!empty($model->create_date))
                $criteria->addCondition('create_date = "' . $model->create_date . '"');


            if (!empty($model->update_uid))
                $criteria->addCondition('update_uid = "' . $model->update_uid . '"');


            if (!empty($model->update_date))
                $criteria->addCondition('update_date = "' . $model->update_date . '"');


            if (!empty($model->description))
                $criteria->addCondition('description = "' . $model->description . '"');


            if (!empty($model->costmethod))
                $criteria->addCondition('costmethod = "' . $model->costmethod . '"');


            if (!empty($model->class))
                $criteria->addCondition('class = "' . $model->class . '"');


            if (!empty($model->category_id))
                $criteria->addCondition('category_id = "' . $model->category_id . '"');


            if (!empty($model->type_id))
                $criteria->addCondition('type_id = "' . $model->type_id . '"');


            if (!empty($model->po_uom_id))
                $criteria->addCondition('po_uom_id = "' . $model->po_uom_id . '"');


            if (!empty($model->uom_id))
                $criteria->addCondition('uom_id = "' . $model->uom_id . '"');


            if (!empty($model->sale_uom_id))
                $criteria->addCondition('sale_uom_id = "' . $model->sale_uom_id . '"');


            if (!empty($model->work_uom_id))
                $criteria->addCondition('work_uom_id = "' . $model->work_uom_id . '"');


            if (!empty($model->length))
                $criteria->addCondition('length = "' . $model->length . '"');


            if (!empty($model->width))
                $criteria->addCondition('width = "' . $model->width . '"');


            if (!empty($model->hegth))
                $criteria->addCondition('hegth = "' . $model->hegth . '"');


            if (!empty($model->thickness))
                $criteria->addCondition('thickness = "' . $model->thickness . '"');


            if (!empty($model->note))
                $criteria->addCondition('note = "' . $model->note . '"');


            if (!empty($model->minqtystock))
                $criteria->addCondition('minqtystock = "' . $model->minqtystock . '"');


            if (!empty($model->qtyinstock))
                $criteria->addCondition('qtyinstock = "' . $model->qtyinstock . '"');


            if (!empty($model->default_wh_id))
                $criteria->addCondition('default_wh_id = "' . $model->default_wh_id . '"');


            if (!empty($model->lastcost))
                $criteria->addCondition('lastcost = "' . $model->lastcost . '"');


            if (!empty($model->lastpodate))
                $criteria->addCondition('lastpodate = "' . $model->lastpodate . '"');


            if (!empty($model->avgcost))
                $criteria->addCondition('avgcost = "' . $model->avgcost . '"');


            if (!empty($model->stdcost))
                $criteria->addCondition('stdcost = "' . $model->stdcost . '"');


            if (!empty($model->qtysale))
                $criteria->addCondition('qtysale = "' . $model->qtysale . '"');


            if (!empty($model->qtypo))
                $criteria->addCondition('qtypo = "' . $model->qtypo . '"');


            if (!empty($model->active))
                $criteria->addCondition('active = "' . $model->active . '"');


        }
        //$session['product_records']=Test::model()->findAll($criteria);
        $session['product_dataProvider'] = $model->search();
        $this->render('index', array('model' => $model, ));

    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new product('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['product']))
            $model->attributes = $_GET['product'];

        $this->render('admin', array('model' => $model, ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model = Product::model()->findByPk($id);
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
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'product-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    public function actionGenerateExcel()
    {
        $session = new CHttpSession;
        $session->open();

        if (isset($session['product_records']))
        {
            $model = $session['product_records'];
        } else
            $model = product::model()->findAll();


        Yii::app()->request->sendFile(date('YmdHis') . '.xls', $this->renderPartial('excelReport',
            array('model' => $model), true));
    }
    public function actionGeneratePdf()
    {
        Yii::import('application.extensions.giiplus.bootstrap.*');
        require_once ('tcpdf/tcpdf.php');
        require_once ('tcpdf/config/lang/eng.php');


        if (isset($session['product_dataProvider']))
        {
            $dataProvider = $session['product_dataProvider'];
        } else
            $dataProvider = new CActiveDataProvider('product');


        $html = $this->renderPartial('expenseGridtoReport', array('dataProvider' => $dataProvider), true);

        //die($html);

        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(Yii::app()->name);
        $pdf->SetTitle('product Report');
        $pdf->SetSubject('product Report');
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
        $pdf->Output("product_002.pdf", "I");
    }
    public function actionUpdateLimit($id){
        $limit = Limit::model()->findByPk($id);
        if(isset($_POST['Limit'])){
            $limit->qtyLimit =$_POST['Limit']['qtyLimit'];
            $limit->save(false);
            exit();
        }
        $this->render('_form_limit', array('model' => $limit, ));
    }
    
    public function actionGetWorkUOM(){
        $area = $_POST['lenght']*$_POST['withs']/100;
        echo CJSON::encode(array('area'=>$area));
        exit;
    }
    
    public function actionSearchNum($num,$id){
        $kt = substr($num,0,3);
        if($kt=='NVT'){
            $this->redirect(array('/inv/warehousein/update&id='.$id));
        }else if($kt=='XVT'){
            $this->redirect(array('/inv/warehouseout/update&id='.$id));
        }else if($kt=='CVT'){
            $this->redirect(array('/inv/transfer/update&id='.$id));
        }else{
            echo "loi~";
        }
        exit();
        
    }   
}
