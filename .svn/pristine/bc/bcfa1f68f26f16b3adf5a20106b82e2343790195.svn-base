<?php
$this->breadcrumbs=array(
	'Warehouseoutlines'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Warehouseoutline','url'=>array('index')),
	array('label'=>'Create Warehouseoutline','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('warehouseoutline-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Warehouseoutlines</h1>

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
	'id'=>'warehouseoutline-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'warehouseout_id',
		'product_id',
		'qty',
		'description',
		'price',
		/*
		'wh_id',
		'note',
		'subtotal',
		'subvat',
		'create_date',
		'create_uid',
		'update_date',
		'update_uid',
		'uom_id',
		'factor',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
