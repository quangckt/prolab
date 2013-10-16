<?php
$this->breadcrumbs=array(
'Warehouseins'=>array('index'),
$model->id=>array('view','id'=>$model->id),
'Update',
);

?>

<h1 class="title"><i class="icon-edit"></i> <span> Sửa phiếu nhập</span></h1>
<hr/>
<div class="tools-bar">
<?php
$this->widget('bootstrap.widgets.TbMenu', array(
'type'=>'pills',
'items'=>array(
array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array('accesskey'=>'l')),
array('label'=>'In', 'icon'=>'icon-print', 'url'=>Reports::createUrl('inv_warehouse_in.mrt',array('id'=>$model->id)), 'linkOptions'=>array('target'=>"_blank"),'accesskey'=>'p'),
array('label'=>'Thêm nhà cung cấp', 'icon'=>'icon-plus', 'url'=>Yii::app()->createUrl('product/partner/create')."&supplier=1", 'linkOptions'=>array('class'=>'ajaxFormModal','title'=>'Thêm nhà cung cấp')),
array('label'=>'Thêm mặt hàng', 'icon'=>'icon-plus', 'url'=>Yii::app()->createUrl('product/product/create'),'linkOptions'=>array('class'=>'ajaxFormModal','title'=>'Thêm mặt hàng')),
),
));
?>
</div>
<?php echo $this->renderPartial('_form', array('model'=>$model,'lines'=>$lines)); ?>