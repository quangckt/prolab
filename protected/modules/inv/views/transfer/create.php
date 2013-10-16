<?php
$this->breadcrumbs=array(
	'Transfers'=>array('index'),
	'Create',
);

?>

<h1 class="title"><i class="icon-plus"></i><span> Tạo phiếu chuyển kho</span></h1>
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

<?php echo $this->renderPartial('_form', array('model'=>$model,'lines'=>$lines)); ?>