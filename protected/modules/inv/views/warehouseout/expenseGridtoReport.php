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
        		'name'=>'num',
        		'sortable'=>false,
        		'value'=>'$data->num',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'date',
        		'sortable'=>false,
        		'value'=>'$data->date',
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
        		'name'=>'type',
        		'sortable'=>false,
        		'value'=>'$data->type',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'create_date',
        		'sortable'=>false,
        		'value'=>'$data->create_date',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
		/*
         array(
        		'name'=>'create_uid',
        		'sortable'=>false,
        		'value'=>'$data->create_uid',
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
        		'name'=>'update_uid',
        		'sortable'=>false,
        		'value'=>'$data->update_uid',
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
        		'name'=>'branch_id',
        		'sortable'=>false,
        		'value'=>'$data->branch_id',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'amounttotal',
        		'sortable'=>false,
        		'value'=>'$data->amounttotal',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
		*/
	),
)); ?>