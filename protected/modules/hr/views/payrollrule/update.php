<?php
$this->breadcrumbs=array(
	'Payrollrules'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

?>

<h1 class="title">Sửa: <?php echo $model->name; ?></h1>
<hr/>
<div class="tools-bar">
<?php
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array('accesskey'=>'l')),
	),
));
?>
</div>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>