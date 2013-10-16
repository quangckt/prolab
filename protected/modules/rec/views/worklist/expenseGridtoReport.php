<style>
tr th {
	font-weight:bold;
	border-bottom:1px solid blue;
}
.even {
	background-color:#EFEFEF;
}
</style>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
        'type'=>'striped',
	'dataProvider'=>$dataProvider,
	'template'=>"{items}",
	'columns'=>array(
         array(
        		'name'=>'id',
        		'sortable'=>false,
        		'value'=>'$data->id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'code',
        		'sortable'=>false,
        		'value'=>'$data->code',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'name',
        		'sortable'=>false,
        		'value'=>'$data->name',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'product_uom_id',
        		'sortable'=>false,
        		'value'=>'$data->product_uom_id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'rec_waycallprice_id',
        		'sortable'=>false,
        		'value'=>'$data->rec_waycallprice_id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'rec_aggregatesale_id',
        		'sortable'=>false,
        		'value'=>'$data->rec_aggregatesale_id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
		/*
         array(
        		'name'=>'rec_detailsale_id',
        		'sortable'=>false,
        		'value'=>'$data->rec_detailsale_id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'rec_grouprevenue_id',
        		'sortable'=>false,
        		'value'=>'$data->rec_grouprevenue_id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'rec_process_id',
        		'sortable'=>false,
        		'value'=>'$data->rec_process_id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'rec_materiproduct_id',
        		'sortable'=>false,
        		'value'=>'$data->rec_materiproduct_id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'productout',
        		'sortable'=>false,
        		'value'=>'$data->productout',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'materilogical1',
        		'sortable'=>false,
        		'value'=>'$data->materilogical1',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'materilogical2',
        		'sortable'=>false,
        		'value'=>'$data->materilogical2',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'materilogical3',
        		'sortable'=>false,
        		'value'=>'$data->materilogical3',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'notmateri',
        		'sortable'=>false,
        		'value'=>'$data->notmateri',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'notvalue',
        		'sortable'=>false,
        		'value'=>'$data->notvalue',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'user_id',
        		'sortable'=>false,
        		'value'=>'$data->user_id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
		*/
	),
)); ?>