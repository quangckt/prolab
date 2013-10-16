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
        		'name'=>'fodate',
        		'sortable'=>false,
        		'value'=>'$data->fodate',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'tdate',
        		'sortable'=>false,
        		'value'=>'$data->tdate',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'department_id',
        		'sortable'=>false,
        		'value'=>'$data->department_id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
		/*
         array(
        		'name'=>'isovernight',
        		'sortable'=>false,
        		'value'=>'$data->isovernight',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'starttime',
        		'sortable'=>false,
        		'value'=>'$data->starttime',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'endtime',
        		'sortable'=>false,
        		'value'=>'$data->endtime',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'note',
        		'sortable'=>false,
        		'value'=>'$data->note',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'status',
        		'sortable'=>false,
        		'value'=>'$data->status',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
		*/
	),
)); ?>