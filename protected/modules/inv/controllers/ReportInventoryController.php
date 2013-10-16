<?php

class ReportInventoryController extends BaseController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	/**
	 * Lists all models.
	 */
     
    public $daysofweek= array(
     'Sunday'=>'CN',
     'Monday'=>'T2',
     'Tuesday'=>'T3',
     'Wednesday'=>'T4',
     'Thursday'=>'T5',
     'Friday'=>'T6',
     'Saturday'=>'T7');
     
 	public function actionIndex()
	{
	   $session=new CHttpSession;
       $session->open();
       $search = new Search();
       $search->fdate = date('d-m-Y',strtotime(date("Y-m-d", time()) . "-1 month"));  
       $search->tdate= date('d-m-Y',time());
       $search->category_id=0;
       $search->whid=0;
       $dataProvider=null;
       if(isset($_GET['Search']))
       {
        $search->setAttributes($_GET['Search'],false);
        $dataProvider=$this->getData($search);
       } 
       $this->render('index',array('dataProvider'=>$dataProvider, 'search'=>$search));
     }
  
     public function actionTestNew()
	{
	   
       $this->renderPartial('testNew',array());
     }
  
    private function getDataTon($search){
       $data=array();
       
      $filter_where = array('AND');
      $filter_where_data = array();
      
       $currSql = Yii::app()->db->createCommand();
       $currSql->select(
            " p.code, 
              Sum(invd.qty) qty,
              wh.name k
               "
            );
        $currSql->from('inv_inventorylog inv');
        $currSql->join('inv_inventorylogdetail invd', 'invd.inventorylog_id = inv.id');
        $currSql->join('product_uom u', 'invd.uom_id = u.id');
        $currSql->join('inv_warehouse wh', 'invd.wh_id = wh.id');
        $currSql->join('product_item p', 'invd.product_id = p.id');
        $currSql->group('wh.name,p.code');  
        
        
        if($search->category_id>0){
        $filter_where[]='p.category_id=:category_id';
        $filter_where_data[':category_id']=$search->category_id;
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
       return $currSql->queryAll();
     } 
 
     
 private function getDataXuatSX($search){
       $data=array();
       
      $filter_where = array('AND');
      $filter_where_data = array();
      
       $currSql = Yii::app()->db->createCommand();
       $currSql->select(
            " 
            inv.refdate k,  
            p.code code, 
            invd.qty,
             "
            );
        $currSql->from('inv_inventorylog inv');
        $currSql->join('inv_inventorylogdetail invd', 'invd.inventorylog_id = inv.id');
        $currSql->join('product_uom u', 'invd.uom_id = u.id');
        $currSql->join('inv_warehouse wh', 'invd.wh_id = wh.id');
        $currSql->join('product_item p', 'invd.product_id = p.id');
    
        
        $filter_where[]='invd.qty<0';
        
        $filter_where[]='wh.isM=:isM';
        $filter_where_data[':isM']=1;
        
   //    if($search->type_id!==''){
//        $filter_where[]='p.type_id=:type_id';
//        $filter_where_data[':type_id']=$search->type_id;
//        }
        
        if($search->category_id>0){
        $filter_where[]='p.category_id=:category_id';
        $filter_where_data[':category_id']=$search->category_id;
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
       return $currSql->queryAll();
     }      
     


private function getDataNhapSX($search){
       $data=array();
       
      $filter_where = array('AND');
      $filter_where_data = array();
      
       $currSql = Yii::app()->db->createCommand();
       $currSql->select(
            " 
            p.code code, 
            sum(invd.qty) qty
             "
            );
        $currSql->from('inv_inventorylog inv');
        $currSql->join('inv_inventorylogdetail invd', 'invd.inventorylog_id = inv.id');
        $currSql->join('product_uom u', 'invd.uom_id = u.id');
        $currSql->join('inv_warehouse wh', 'invd.wh_id = wh.id');
        $currSql->join('product_item p', 'invd.product_id = p.id');
        $currSql->group('p.code'); 
        $filter_where[]='invd.qty>0';
        
        $filter_where[]='wh.isM=:isM';
        $filter_where_data[':isM']=1;
        
   //    if($search->type_id!==''){
//        $filter_where[]='p.type_id=:type_id';
//        $filter_where_data[':type_id']=$search->type_id;
//        }
        
        if($search->category_id>0){
        $filter_where[]='p.category_id=:category_id';
        $filter_where_data[':category_id']=$search->category_id;
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
       return $currSql->queryAll();
     }      
     
              

 public function getHeadersTable($search){
          //get columns
      if($search->category_id)
      $p=Product::model()->findAll("category_id=$search->category_id");
      else $p=Product::model()->findAll();
      
     $columns[]=" Giấy ";   
      foreach( $p as $item ){
       $columns[]= $item->code;
      }
    return $columns;  
 }
 
 

      

  public function getData($search){
       $data=array();  
       // create the where filter
      $filter_where = array('AND');
      $filter_where_data = array();
      
      $fdate = date('Y-m-d',CDateTimeParser::parse($search->fdate, 'dd-MM-yyyy'));
      $tdate= date('Y-m-d',CDateTimeParser::parse($search->tdate, 'dd-MM-yyyy'));
      
    // Ton cac kho
    $results = $this->getDataTon($search);
    foreach($results as $item){
    $key= "Tổn ".$item['k'];   
    if(!isset($data[$key][$item['code']]))
     $data[$key][$item['code']]=$item['qty'];   
    } 
  
      // Nhap san xuat 
    $results = $this->getDataNhapSX($search);
    foreach($results as $item){
    $key="Tổng nhập sản xuất" ;
    if(!isset($data[$key][$item['code']]))
     $data[$key][$item['code']]=$item['qty'];
    } 
    
    // Xuat san xuat
    $results = $this->getDataXuatSX($search);
    $keySum= "Tổng xuất sản xuất" ;
    foreach($results as $item){
    $key= date("d/m/Y",strtotime($item['k']))." ".$this->daysofweek[date("l",strtotime($item['k']))];
    if(!isset($data[$keySum][$item['code']]))
    $data[$keySum][$item['code']] = $item['qty']*-1;
    else $data[$keySum][$item['code']] += $item['qty']*-1;
    if(!isset($data[$key][$item['code']]))
     $data[$key][$item['code']]=$item['qty']*-1;
    } 


      return  new CArrayDataProvider($data);
    }      
    
}