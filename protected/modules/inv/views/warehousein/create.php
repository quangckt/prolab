<?php
$this->breadcrumbs=array(
'Warehouseins'=>array('index'),
'Create',
);

?>

<h1 class="title"><i class="icon-plus"></i><span> Tạo phiếu nhập</span></h1>
<div class="tools-bar">
<?php
$this->widget('bootstrap.widgets.TbMenu', array(
'type'=>'pills',
'items'=>array(
array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
array('label'=>'Thêm nhà cung cấp mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->createUrl('product/partner/create')."&supplier=1", 
'linkOptions'=>array('class'=>'ajaxFormModal','title'=>'Thêm nhà cung cấp mới')),

array('label'=>'Thêm mặt hàng', 'icon'=>'icon-plus', 'url'=>Yii::app()->createUrl('product/product/create'),
'linkOptions'=>array('class'=>'ajaxFormModal','title'=>'Thêm mặt hàng')),
),
));
?>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model,'lines'=>$lines)); ?>
<script>

</script>