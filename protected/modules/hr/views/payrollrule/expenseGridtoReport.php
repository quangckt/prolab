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
        		'name'=>'name',
        		'sortable'=>false,
        		'value'=>'$data->name',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'op',
        		'sortable'=>false,
        		'value'=>'$data->op',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'val',
        		'sortable'=>false,
        		'value'=>'$data->val',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'rate',
        		'sortable'=>false,
        		'value'=>'$data->rate',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'type',
        		'sortable'=>false,
        		'value'=>'$data->type',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
	),
)); ?>