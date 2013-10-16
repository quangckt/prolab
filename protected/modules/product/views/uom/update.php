<?php
$this->breadcrumbs=array(
	'Uoms'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1 class="title">Cập nhật đơn vị tính </h1>
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
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>