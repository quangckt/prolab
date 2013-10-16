<?php
$this->breadcrumbs=array(
	'Worklists'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Worklist','url'=>array('index')),
	array('label'=>'Create Worklist','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('worklist-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Worklists</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'worklist-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'code',
		'name',
		'product_uom_id',
		'rec_waycallprice_id',
		'rec_aggregatesale_id',
		/*
		'rec_detailsale_id',
		'rec_grouprevenue_id',
		'rec_process_id',
		'rec_materiproduct_id',
		'productout',
		'materilogical1',
		'materilogical2',
		'materilogical3',
		'notmateri',
		'notvalue',
		'user_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
