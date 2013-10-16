<?php
$this->breadcrumbs=array(
	'Check Inventories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1 class="title">Sửa kiêm kê <?php echo $model->num; ?></h1>
<hr/>
<div class="tools-bar">
<?php
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array('accesskey'=>'l')),
	),
));
?>
</div>
<?php echo $this->renderPartial('_form',array('model'=>$model,'lines'=>$lines)); ?>