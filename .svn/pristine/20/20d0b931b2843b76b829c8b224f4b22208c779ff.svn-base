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
                'header'=>'số',
        		'value'=>'$data->id',
             ),     
         array(
        		'name'=>'num',
        		'value'=>'$data->num',
        
             ),     
         array(
        		'name'=>'date',
        		'sortable'=>false,
        		'value'=>'$data->date',
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
         array(
        		'name'=>'create_uid',
        		'sortable'=>false,
        		'value'=>'$data->create_uid',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
		/*
         array(
        		'name'=>'create_date',
        		'sortable'=>false,
        		'value'=>'$data->create_date',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'update_uid',
        		'sortable'=>false,
        		'value'=>'$data->update_uid',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'update_date',
        		'sortable'=>false,
        		'value'=>'$data->update_date',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'branch_id',
        		'sortable'=>false,
        		'value'=>'$data->branch_id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
		*/
	),
)); ?>