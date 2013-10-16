<style>
tr th {
	font-weight:bold;

}
.even {
	background-color:#EFEFEF;
}
</style>
<?php
$wh=new Warehousein();
$columns= array(
         array(
             'name'=>'warehousein.num',  
             'header'=>$wh->getAttributeLabel('num'), 
             ),
            
         array(
               'header'=>$wh->getAttributeLabel('date'),
               'name'=>'warehousein.date',                
             ),
         array(
              'header'=>$wh->getAttributeLabel('invnum'),
               'name'=>'warehousein.invnum',                
              ),
         
         array(
            'header'=>'Nhà cung cấp',
            'name'=>'warehousein.supplier.name',
             ),             

         array(
            'header'=>'Tình trạng',
            'name'=>'warehousein.displayStatus',
            'sortable'=>false,
           // 'value'=>'$data->warehousein->displayStatus',
            'type'=>'raw',
             ),

         array(
               'header'=>'Thanh toán bằng',
               'name'=>'paymentterm',                
        	   'value'=>'$data->warehousein->displayPaymentterm',
             ),

         array(
               'header'=>'Đã trả',
               'name'=>'paid',
        	   'value'=>'$data->warehousein->paid',
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
             'type'=>'number'
             ),    
                          
         array(
                'sortable'=>false,
               'header'=>'Đơn giá',
               'name'=>'price', 
        	   'value'=>'$data->price',
               'type'=>'number',
             ),
         array(
                'sortable'=>false,
               'header'=>'Thành tiền',
               'name'=>'subtotal',
               'value'=>'$data->subtotal',
               'type'=>'number' 
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
            'gridId' => 'warehousindetails-grid', //id of related grid
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
    'id'=>'warehousindetails-grid',
	'dataProvider'=>$dataProvider,
	'template'=>"{items}",
	'columns'=>$columns,
)); 
?>
</div>