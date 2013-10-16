<?php
$this->breadcrumbs=array(
'Warehouseouts'=>array('index'),
'Create',
);

?>

<h1 class="title"><i class="icon-plus"></i><span> Tạo phiếu xuất vật tư</span></h1>
<div class="tools-bar">
<?php
$this->widget('bootstrap.widgets.TbMenu', array(
'type'=>'pills',
'items'=>array(
//array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'),'active'=>true, 'linkOptions'=>array()),
array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
),
));
?>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model,'lines'=>$lines)); ?>
