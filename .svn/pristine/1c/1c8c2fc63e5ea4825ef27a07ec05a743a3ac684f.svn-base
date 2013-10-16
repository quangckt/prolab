<style>
tr th {
	font-weight:bold;
}
.even {
	background-color:#EFEFEF;
}
</style>
<?php
$wh=new Warehouseout();
$columns= array(
         array(
             'name'=>'warehouseout.num',  
             'header'=>$wh->getAttributeLabel('num'), 
             ),
            
         array(
               'header'=>$wh->getAttributeLabel('date'),
               'name'=>'warehouseout.date',                
             ),

         array(
               'header'=>$wh->getAttributeLabel('note'),
               'name'=>'warehouseout.note',                
             ),
             
        array(
                 'header'=>$wh->getAttributeLabel('type'),
                 'name'=>'warehouseout.type',
                 'value'=>'$data->warehouseout->displayType',
                 'type'=>'raw',
             ),
             
         array(
            'header'=>'Tình trạng',
            'name'=>'warehouseout.displayStatus',
            'sortable'=>false,
            'type'=>'raw',
             ),


         array(
               'header'=>'Mã hàng', 
        	   'value'=>'$data->product->code',
             ),
         array(
               'header'=>'Tên hàng', 
               'name'=>'product_code',
        	   'value'=>'$data->description',
             ),
         array(
             'header'=>'ĐVT', 
             'name'=>'uom',
        	 'value'=>'$data->uom->name',
             ),
                          
         array(
            'sortable'=>false,
             'header'=>'Số lượng',
             'name'=>'qty', 
             'value'=>'$data->qty',
             ),    
                          
               
	   //  array('name'=>'create_uid','value'=>'$data->getCreateName()', 'sortable'=>false,),
	//	'create_date',
	//	 array('name'=>'update_uid','value'=>'$data->getCreateName()', 'sortable'=>false,),
	//	'update_date',
	//	 array('name'=>'branch_id','value'=>'$data->getBranchName()', 'sortable'=>false,),
	);

//$columns=array();
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
            'gridId' => 'warehousoutdetails-grid', //id of related grid
            'storage' => 'db',  //where to store settings: 'db', 'session', 'cookie'
           // 'model' => $model->search()->model, //model is used to get attribute labels
            'columns' =>$columns,
   )));
echo $dialog->link();
$columns=$dialog->columns();
}
?>
<div class='printableArea'>
<?php
$this->widget('bootstrap.widgets.TbGridView',array(
   'type'=>'striped',
    'id'=>'warehousoutdetails-grid',
	'dataProvider'=>$dataProvider,
	'template'=>"{items}",
	'columns'=>$columns,
)); 
?>
</div>