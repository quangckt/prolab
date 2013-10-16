<?php
$this->breadcrumbs=array(
	'Worklists'=>array('index'),
	$model->name,
);
?>

<h1>View Worklist #<?php echo $model->id; ?></h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array('accesskey'=>'l')),
        array('label'=>'Sửa', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->id)), 'linkOptions'=>array('accesskey'=>'e')),
		array('label'=>'In', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;'),'accesskey'=>'p'),

)));
?>
</div>
<div class='printableArea'>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'code',
		 array('name'=>'name','type'=>'raw','value'=>$model->createLink()),
		'product_uom_id',
		'rec_waycallprice_id',
		'rec_aggregatesale_id',
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
	),
)); ?>
</div>
<style type="text/css" media="print">
body {visibility:hidden;}
.printableArea{visibility:visible;} 
</style>
<script type="text/javascript">
function printDiv()
{

window.print();

}
</script>