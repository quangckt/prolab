
<?php
/*
      $p=Yii::app()->getBasePath();
	Yii::import('application.extensions.phpreports.*');
   	require_once('PHPReportMaker.php');

	// configure your parameters here
	$sUser = "root";	// database user
	$sPass = "";	// database password
	$sData = "prolab";	// database name
	$sInte = "mysql";	// database interface
	$sConn = "localhost";	// database connection
   
    $sSQL="select CITY,NAME,TYPE,ITEM,VALUE from sales order by CITY,NAME,TYPE,ITEM";        
       
        
	$oRpt = new PHPReportMaker();
	$oRpt->setXML(Yii::app()->getBasePath()."\sales.xml");
    $oRpt->setUser("root");
	$oRpt->setPassword($sPass);
	$oRpt->setDatabase($sData);
	$oRpt->setDatabaseInterface($sInte);
	$oRpt->setConnection($sConn);
    $oRpt->setSQL($sSQL);
//	$oOut->setClean(false);
//	$oRpt->setOutputPlugin($oOut);
 $oRpt->run();
*/
?>

<style>
tr th {
	font-weight:bold;
}
.even {
	background-color:#EFEFEF;
}
</style>
<?php
$columns= array(
         array(
             'name'=>'product_code',  
             'header'=>'Mã hàng', 
             ),
         array(
               'header'=>'Tên hàng',
               'name'=>'product_name',                
             ),
         array(
            'header'=>'ĐVT',
            'name'=>'uom_name',
             ),
                          
         array(
              'header'=>'kho hàng',
               'name'=>'wh_name',                
              ),
         
         array(
            'header'=>'Số lượng tồn đầu',
            'name'=>'pre_qty',
            'value'=>'Utils::formatNumber($data["pre_qty"])',
             ),
         array(
            'header'=>'Giá trị tồn đầu',
            'name'=>'pre_amount',
            'value'=>'Utils::formatNumber($data["pre_amount"])',
             ),                          
          array(
            'header'=>'Số lượng nhập',
            'name'=>'curr_qty_in',
            'value'=>'Utils::formatNumber($data["curr_qty_in"])',
             ),
         array(
            'header'=>'Giá trị nhập ',
            'name'=>'curr_amount_in',
            'value'=>'Utils::formatNumber($data["curr_amount_in"])',
             ),
          array(
            'header'=>'Số lượng xuất',
            'name'=>'curr_qty_out',
             'value'=>'Utils::formatNumber($data["curr_qty_out"])',
             ),
         array(
            'header'=>'Giá trị xuất ',
            'name'=>'curr_amount_out',
             'value'=>'Utils::formatNumber($data["curr_amount_out"])',
             ),                                                
          array(
            'header'=>'Số lượng tồn cuối',
            'name'=>'end_qty',
             'value'=>'Utils::formatNumber($data["end_qty"])',
             ),
         array(
            'header'=>'Giá trị tồn cuối ',
            'name'=>'end_amount',
             'value'=>'Utils::formatNumber($data["end_amount"])',
             ),
        
                
	   //  array('name'=>'create_uid','value'=>'$data->getCreateName()', 'sortable'=>false,),
	//	'create_date',
	//	 array('name'=>'update_uid','value'=>'$data->getCreateName()', 'sortable'=>false,),
	//	'update_date',
	//	 array('name'=>'branch_id','value'=>'$data->getBranchName()', 'sortable'=>false,),
	);

if(isset($viewMode)) {
$dialog = $this->widget('ext.ecolumns.EColumnsDialog', array(
       'options'=>array(
            'title' => 'Chọn cột',
            'autoOpen' => false,
            'show' =>  'fade',
            'hide' =>  'fade',
        ),
       'htmlOptions' => array('style' => 'display: none'), //disable flush of dialog content
       'ecolumns' => array(
            'gridId' => 'inventoryinout-grid', //id of related grid
            'storage' => 'db',  //where to store settings: 'db', 'session', 'cookie'
           // 'model' => $model->search()->model, //model is used to get attribute labels
            'columns' =>$columns,
   )));
echo $dialog->link();
$columns=$dialog->columns();
}
?>
<div class='printableArea1'>
<?php
$this->widget('bootstrap.widgets.TbGridView',array(
   'type'=>'striped bordered',
    'id'=>'inventoruinout-grid',
	'dataProvider'=>$dataProvider,
	'template'=>"{items}",
	'columns'=>$columns,
)); 
?>
</div>