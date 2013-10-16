<?php

class ReportController extends BaseController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	/**
	 * Lists all models.
	 */
    private function getStock($search){
           $session=new CHttpSession;
           $session->open();		
                  $criteria = new CDbCriteria();            
                  $model=new Inventorylogdetail('search');
                    $model->unsetAttributes();  // clear any default values
                    if(isset($_GET['Search']))
                		{
                         $search->setAttributes($_GET['Search'],false);
                	}
           $session['search_stock']=serialize($search);     
           $dataProvider= $model->searchAdv($search);
           return $dataProvider;
    }
 	public function actionStock()
	{
	   $session=new CHttpSession;
       $session->open();
       $search = new Search();
       $search->pid=-1;
       $search->fdate = date('d-m-Y',time());  
       $search->tdate= date('d-m-Y',time());
       $dataProvider=null;

    if(isset($_GET['Search']))  
    $search->setAttributes($_GET['Search'],false);
    
      if(isset($_GET['export']) ){
        
        if(isset($session['search_stock']))
         $search = unserialize($session['search_stock']);
          $dataProvider=$this->getStock($search);
          $html = $this->renderPartial('_stocktable', array('dataProvider'=>$dataProvider,'search'=>$search), true);
            if($_GET['export']==='excel'){
             Yii::app()->request->sendFile('nhap_xuat_ton_'.date('YmdHis').'.xls',$html);
            }
            if($_GET['export']==='pdf'){
        		Yii::import('application.extensions.giiplus.bootstrap.*');
        		require_once('tcpdf/tcpdf.php');
        		require_once('tcpdf/config/lang/eng.php');
                $PDF_HEADER_LOGO='';
                $PDF_HEADER_LOGO_WIDTH='';
        		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        		$pdf->SetCreator(PDF_CREATOR);
        		$pdf->SetAuthor(Yii::app()->name);
        		//$pdf->SetTitle('Chi tiết nhập hàng');
        		//$pdf->SetSubject('Chi tiết nhập hàng');
        		//$pdf->SetHeaderData('', 0, "Thẻ kho", '');
        		$pdf->SetHeaderData($PDF_HEADER_LOGO, $PDF_HEADER_LOGO_WIDTH,'Thẻ kho', "<h1>ssa asd sfsafsa</h1>");
        		$pdf->setHeaderFont(Array('dejavusans', '', 8));
        		$pdf->setFooterFont(Array('dejavusans', '', 6));
        		$pdf->SetMargins(15, 5, 15);
        		$pdf->SetHeaderMargin(5);
                $pdf->setPrintHeader(false);
        		$pdf->SetFooterMargin(10);
        		$pdf->SetAutoPageBreak(TRUE, 0);
                $pdf->SetFont('dejavusans', '', 7);
                //$pdf->SetFont('helvetica', '', 12);
                $pdf->setPageOrientation("p");//p,l
        		$pdf->AddPage();
        		$pdf->writeHTML($html, true, false, true, false, '');
        		$pdf->LastPage();
                ob_end_clean();
        		$pdf->Output('the_kho_'.date('YmdHis').'pdf', "I");
            }
        }
        else {
        if($dataProvider==null)  $dataProvider=$this->getStock($search);
        $this->render('stock',array('dataProvider'=>$dataProvider, 'search'=>$search));
        }               
     }
     
    private function getInventory($search){
       $data=array();  
       // create the where filter
      $filter_where = array('AND');
      $filter_where_data = array();
      $fdate = date('Y-m-d',CDateTimeParser::parse($search->fdate, 'dd-MM-yyyy'));
      $tdate= date('Y-m-d',CDateTimeParser::parse($search->tdate, 'dd-MM-yyyy'));
      $columsinfor=array('product_code','product_name','uom_name','wh_name');
      $colums=array('pre_qty','pre_amount','curr_qty_in','curr_amount_in','curr_qty_out','curr_amount_out','end_qty','end_amount');
      
       $preSql = Yii::app()->db->createCommand();
       $preSql->select(
           "invd.product_id,
            invd.uom_id,
            sum(invd.qty) as qty,
            invd.wh_id,
            sum(invd.subtotal) as amount,
            u.name uom_name,
            wh.name wh_name,
            p.code product_code,
            p.name product_name"
            );
        $preSql->from('inv_inventorylog inv');
        $preSql->join('inv_inventorylogdetail invd', 'invd.inventorylog_id = inv.id');
        $preSql->join('product_uom u', 'invd.uom_id = u.id');
        $preSql->join('inv_warehouse wh', 'invd.wh_id = wh.id');
        $preSql->join('product_item p', 'invd.product_id = p.id');
        $preSql->group('invd.product_id,invd.uom_id,uom_name,product_code,product_name');  
        
        if($search->whid>0){
        $filter_where[]='invd.wh_id=:wh_id';
        $filter_where_data[':wh_id']=$search->whid;
        }
        if(isset($fdate)){
        $filter_where[]='inv.refdate<:fdate';
        $filter_where_data[':fdate']=$fdate;
        }
       $preSql->where($filter_where, $filter_where_data);        
       foreach($preSql->queryAll() as $item){
       $key=$item['product_id'].'_'.$item['wh_id'];
       foreach($columsinfor as $c){
        if(!isset($data[$key][$c]))
        $data[$key][$c]=$item[$c];
       }       
       foreach($colums as $c){
        if(!isset($data[$key][$c]))
        $data[$key][$c]=0;
       } 
       $data[$key]['pre_qty'] +=$item['qty'];
       $data[$key]['pre_amount'] +=$item['amount'];
       
        $data[$key]['end_qty'] = $data[$key]['pre_qty']+ $data[$key]['curr_qty_in']-$data[$key]['curr_qty_out'];
        $data[$key]['end_amount'] = $data[$key]['pre_amount']+ $data[$key]['curr_amount_in']-$data[$key]['curr_amount_out'];
        $data[$key]['id']=$key;
       }
       //for current        
       $filter_where = array('AND');
       $filter_where_data = array(); 
       $currSql = Yii::app()->db->createCommand();
       $currSql->select(
            "inv.reftype,
            inv.refdate,
            invd.product_id,
            invd.uom_id,
            invd.qty ,
            invd.wh_id,
            invd.subtotal amount,
            u.name uom_name,
            wh.name wh_name,
            p.code product_code,
            p.name product_name"
            );
        $currSql->from('inv_inventorylog inv');
        $currSql->join('inv_inventorylogdetail invd', 'invd.inventorylog_id = inv.id');
        $currSql->join('product_uom u', 'invd.uom_id = u.id');
        $currSql->join('inv_warehouse wh', 'invd.wh_id = wh.id');
        $currSql->join('product_item p', 'invd.product_id = p.id');

        if($search->whid>0){
        $filter_where[]='invd.wh_id=:wh_id';
        $filter_where_data[':wh_id']=$search->whid;
        }
        
        if(isset($fdate)){
        $filter_where[]='inv.refdate>=:fdate';
        $filter_where_data[':fdate']=$fdate;
        }
        if(isset($tdate)){
        $filter_where[]='inv.refdate<=:tdate';
        $filter_where_data[':tdate']=$tdate;
        }
        $currSql->where($filter_where, $filter_where_data);
        foreach($currSql->queryAll() as $item){
        $key=$item['product_id'].'_'.$item['wh_id'];

       foreach($columsinfor as $c){
        if(!isset($data[$key][$c]))
        $data[$key][$c]=$item[$c];
       }
        foreach($colums as $c){
            if(!isset($data[$key][$c]))
            $data[$key][$c]=0;
            }
         if($item['qty']>0) {
          $data[$key]['curr_qty_in'] +=$item['qty'];
          $data[$key]['curr_amount_in'] +=$item['amount'];
          } else {
          $data[$key]['curr_qty_out'] +=$item['qty']*-1;
          $data[$key]['curr_amount_out'] +=$item['amount']*-1;
          } 
          $data[$key]['end_qty'] = $data[$key]['pre_qty']+ $data[$key]['curr_qty_in']-$data[$key]['curr_qty_out'];
          $data[$key]['end_amount'] = $data[$key]['pre_amount']+ $data[$key]['curr_amount_in']-$data[$key]['curr_amount_out'];
          $data[$key]['id']=$key;          
       }
      $rawdata=array();
      foreach($data as $item){
      $rawdata[]=$item;  
      }
      return  new CArrayDataProvider($rawdata);
    } 
    
 	public function actionInventory()
	{
	   $session=new CHttpSession;
       $session->open();
       $search = new Search();
       $search->fdate = date('d-m-Y',time());  
       $search->tdate= date('d-m-Y',time());
       $dataProvider=null;

       if(isset($_GET['Search']))  $search->setAttributes($_GET['Search'],false);
        if(isset($_GET['export']) ){
          if(isset($session['dataProvider_inventory']))
           $dataProvider = $session['dataProvider_inventory'];
           else $dataProvider = $this->getInventory($search);
          if(isset($session['search_stock']))
          $search = unserialize($session['search_stock']);
          
            $html = $this->renderPartial('_inventorytable', array('dataProvider'=>$dataProvider,'search'=>$search), true);
            $html= preg_replace('/(<div[^>]*>)(.*?)(<\/div>)/i', '', $html);
            if($_GET['export']==='excel'){
             Yii::app()->request->sendFile('nhap_xuat_ton_'.date('YmdHis').'.xls',$html);
            }
            if($_GET['export']==='pdf'){
        		Yii::import('application.extensions.giiplus.bootstrap.*');
        		require_once('tcpdf/tcpdf.php');
        		require_once('tcpdf/config/lang/eng.php');
                $PDF_HEADER_LOGO='';
                $PDF_HEADER_LOGO_WIDTH='';
        		$pdf = new TCPDF();
        		$pdf->SetCreator(PDF_CREATOR);
        		$pdf->SetAuthor(Yii::app()->name);
        		$pdf->SetTitle('Chi tiết nhập hàng');
        		$pdf->SetSubject('Chi tiết nhập hàng');
        		$pdf->SetHeaderData('', 0, "Report", '');
        		$pdf->SetHeaderData($PDF_HEADER_LOGO, $PDF_HEADER_LOGO_WIDTH,'Chi tiết nhập hàng', "");
        		$pdf->setHeaderFont(Array('dejavusans', '', 8));
                 $pdf->setPrintHeader(false);
        		$pdf->setFooterFont(Array('dejavusans', '', 6));
        		$pdf->SetMargins(15, 5, 15);
        		$pdf->SetHeaderMargin(0);
        		$pdf->SetFooterMargin(10);
        		$pdf->SetAutoPageBreak(TRUE, 0);
                $pdf->SetFont('dejavusans', '', 7);
                //$pdf->SetFont('helvetica', '', 12);
                $pdf->setPageOrientation("l");//p
        		$pdf->AddPage();
        		$pdf->writeHTML($html, true, false, true, false, '');
        		$pdf->LastPage();
                ob_end_clean();
        		$pdf->Output('nhap_xuat_ton_'.date('YmdHis').'pdf', "I");
            }
        }
        else {
        if($dataProvider==null)  $dataProvider=$this->getInventory($search);
        $session['dataProvider_inventory']=$dataProvider;
        $session['search_stock']= serialize($search);
        $this->render('inventory',array('dataProvider'=>$dataProvider, 'search'=>$search));
        }        
     }
           
    public function actionInventoryToExcel()
	{
       
      $session=new CHttpSession;
      $session->open();	
      $search=new Search();	
      $model=new Warehouseoutline('search');
      if(isset($session['dataProvider_inventory']))
      $dataProvider = $session['dataProvider_inventory'];
      
      $html = $this->renderPartial('_warehouseoutdetails', array('dataProvider'=>$dataProvider), true);
      $html= preg_replace('/(<div[^>]*>)(.*?)(<\/div>)/i', '', $html);
       Yii::app()->request->sendFile('Xuat_chi_tiet_'.date('YmdHis').'.xls',$html);
	}     
     
     
	public function actionWarehouseindetails()
	{
	   $session=new CHttpSession;
       $session->open();		
              $criteria = new CDbCriteria();            
              $model=new Warehouseinline('search');
                $search = new Search();
                $search->fdate = date('d-m-Y',time());  
                $search->tdate= date('d-m-Y',time());
                $model->unsetAttributes();  // clear any default values
                if(isset($_GET['Search']))
            		{
                     $search->setAttributes($_GET['Search'],false);
            	}
           $dataProvider = $model->searchAdv($search);
           $session['WarehouseinDetail_search']=serialize($search);
           $this->render('warehouseindetails',array('dataProvider'=>$dataProvider, 'search'=>$search));
	}
    
    public function actionWarehouseindetailsToExcel()
	{
       
      $session=new CHttpSession;
      $session->open();	
      $search=new Search();	
      $model=new Warehouseinline('search');
          
          if(isset($session['WarehouseinDetail_search']))
           $search = unserialize($session['WarehouseinDetail_search']);
           $dataProvider = $model->searchAdv($search);
           $html = $this->renderPartial('_warehouseindetails', array('dataProvider'=>$dataProvider), true);
           $html= preg_replace('/(<div[^>]*>)(.*?)(<\/div>)/i', '', $html);
        
        Yii::app()->request->sendFile('Nhap_chi_tiet_'.date('YmdHis').'.xls',$html);
	}

 public function actionWarehouseindetailsToPdf() 
	{
        
        $session=new CHttpSession;
        $session->open();		
        $model=new Warehouseinline('search');
        $search=new Search();
        
        
		Yii::import('application.extensions.giiplus.bootstrap.*');
		require_once('tcpdf/tcpdf.php');
		require_once('tcpdf/config/lang/eng.php');
        
        try{
            if(isset($session['WarehouseinDetail_search'])){
             $search = unserialize($session['WarehouseinDetail_search']);
             } 
          }
         catch(CException $e ){
                  
         } 
          
       $dataProvider = $model->searchAdv($search);
       $html = $this->renderPartial('_warehouseindetails', array('dataProvider'=>$dataProvider), true);
       $html= preg_replace('/(<div[^>]*>)(.*?)(<\/div>)/i', '', $html);
       
        $PDF_HEADER_LOGO='';
        $PDF_HEADER_LOGO_WIDTH='';
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Chi tiết nhập hàng');
		$pdf->SetSubject('Chi tiết nhập hàng');
		$pdf->SetHeaderData('', 0, "Report", '');
		$pdf->SetHeaderData($PDF_HEADER_LOGO, $PDF_HEADER_LOGO_WIDTH,'Chi tiết nhập hàng', "");
		$pdf->setHeaderFont(Array('dejavusans', '', 8));
		$pdf->setFooterFont(Array('dejavusans', '', 6));
		$pdf->SetMargins(15, 18, 15);
		$pdf->SetHeaderMargin(5);
		$pdf->SetFooterMargin(10);
		$pdf->SetAutoPageBreak(TRUE, 0);
        $pdf->SetFont('dejavusans', '', 7);
        //$pdf->SetFont('helvetica', '', 12);
        $pdf->setPageOrientation("l");//p
		$pdf->AddPage();
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->LastPage();
        ob_end_clean();
		$pdf->Output('Nhap_chi_tiet_'.date('YmdHis').'pdf', "I");
	}
    
	/**
	 * Lists all models.
	 */
	public function actionWarehouseoutdetails()
	{
	   $session=new CHttpSession;
       $session->open();		
              $criteria = new CDbCriteria();            
              $model=new Warehouseoutline('search');
                $search = new Search();
                $search->fdate = date('d-m-Y',time());  
                $search->tdate= date('d-m-Y',time());
                $model->unsetAttributes();  // clear any default values
                if(isset($_GET['Search']))
            		{
                     $search->setAttributes($_GET['Search'],false);
            	}
           $dataProvider = $model->searchAdv($search);
           $session['WarehouseoutDetail_search']=serialize($search);
           $this->render('warehouseoutdetails',array('dataProvider'=>$dataProvider, 'search'=>$search));
	}
    
    public function actionWarehouseoutdetailsToExcel()
	{
       
      $session=new CHttpSession;
      $session->open();	
      $search=new Search();	
      $model=new Warehouseoutline('search');
          
          if(isset($session['WarehouseoutDetail_search']))
           $search = unserialize($session['WarehouseoutDetail_search']);
           $dataProvider = $model->searchAdv($search);
           $html = $this->renderPartial('_warehouseoutdetails', array('dataProvider'=>$dataProvider), true);
           $html= preg_replace('/(<div[^>]*>)(.*?)(<\/div>)/i', '', $html);
        
        Yii::app()->request->sendFile('Xuat_chi_tiet_'.date('YmdHis').'.xls',$html);
	}

 public function actionWarehouseoutdetailsToPdf() 
	{
        
        $session=new CHttpSession;
        $session->open();		
        $model=new Warehouseoutline('search');
        $search=new Search();
        
        
		Yii::import('application.extensions.giiplus.bootstrap.*');
		require_once('tcpdf/tcpdf.php');
		require_once('tcpdf/config/lang/eng.php');
        
        try{
            if(isset($session['WarehouseinDetail_search'])){
             $search = unserialize($session['WarehouseoutDetail_search']);
             } 
          }
         catch(CException $e ){
                  
         } 
          
       $dataProvider = $model->searchAdv($search);
       $html = $this->renderPartial('_warehouseoutdetails', array('dataProvider'=>$dataProvider), true);
       $html= preg_replace('/(<div[^>]*>)(.*?)(<\/div>)/i', '', $html);
       
        $PDF_HEADER_LOGO='';
        $PDF_HEADER_LOGO_WIDTH='';
		$pdf = new TCPDF();
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor(Yii::app()->name);
		$pdf->SetTitle('Chi tiết xuất hàng');
		$pdf->SetSubject('Chi tiết xuất hàng');
		//$pdf->SetKeywords('example, text, report');
		$pdf->SetHeaderData('', 0, "Report", '');
		$pdf->SetHeaderData($PDF_HEADER_LOGO, $PDF_HEADER_LOGO_WIDTH,'Chi tiết xuất hàng', "");
		$pdf->setHeaderFont(Array('dejavusans', '', 8));
		$pdf->setFooterFont(Array('dejavusans', '', 6));
		$pdf->SetMargins(15, 18, 15);
		$pdf->SetHeaderMargin(5);
		$pdf->SetFooterMargin(10);
		$pdf->SetAutoPageBreak(TRUE, 0);
        $pdf->SetFont('dejavusans', '', 7);
        //$pdf->SetFont('helvetica', '', 12);
        $pdf->setPageOrientation("l");//p
		$pdf->AddPage();
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->LastPage();
        ob_end_clean();
		$pdf->Output('Xuat_chi_tiet_'.date('YmdHis').'pdf', "I");
	}    
    
}