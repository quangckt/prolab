<?php
$this->breadcrumbs=array(
	'Warehouseins'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Warehousein','url'=>array('index')),
	array('label'=>'Create Warehousein','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('warehousein-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Warehouseins</h1>

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
	'id'=>'warehousein-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'num',
		'date',
		'note',
		'invdate',
		'invnum',
		/*
		'supplier_id',
		'paymentterm',
		'paid',
		'create_date',
		'create_uid',
		'update_date',
		'update_uid',
		'status',
		'branch_id',
		'amounttotal',
		'amounttax',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
