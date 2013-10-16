<?php
$this->breadcrumbs=array(
	'Warehouses'=>array('index'),
	'Create',
);

?>

<h1 class="title">Tạo kho hàng</h1>
<hr/>
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
	),
));
?>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>