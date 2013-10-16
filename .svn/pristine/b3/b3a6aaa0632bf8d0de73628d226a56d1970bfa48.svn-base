<?php
$this->breadcrumbs=array(
	'Modelsettings'=>array('index'),
	$model->classname=>array('view','id'=>$model->classname),
	'Update',
);

?>

<h1>Update Modelsettings <?php echo $model->classname; ?></h1>
<hr/>
<div class="tools-bar">
<?php
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array('accesskey'=>'l')),
        array('label'=>'Sửa', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->id)),'active'=>true, 'linkOptions'=>array('accesskey'=>'e')),
	),
));
?>
</div>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>