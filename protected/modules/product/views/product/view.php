<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);
?>

<h1>View product #<?php echo $model->id; ?></h1>
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
		 array('name'=>'create_uid','value'=>$model->getCreateName()),
		'create_date',
		 array('name'=>'update_uid','value'=>$model->getCreateName()),
		'update_date',
		'description',
		'costmethod',
		'class',
		'category_id',
		'type_id',
		'po_uom_id',
		'uom_id',
		'sale_uom_id',
		'work_uom_id',
		'length',
		'width',
		'hegth',
		'thickness',
		'note',
		'minqtystock',
		'qtyinstock',
		'default_wh_id',
		'lastcost',
		'lastpodate',
		'avgcost',
		'stdcost',
		'qtysale',
		'qtypo',
		'active',
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