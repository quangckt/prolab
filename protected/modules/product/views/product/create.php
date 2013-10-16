<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Create',
);
?>
<h1 class="title">Tạo mặt hàng</h1>
<hr />
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
    'htmlOptions'=>array('class'=>'tools-bar'),
	'items'=>array(
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
        array('label'=>'Thêm loại hàng hóa', 'icon'=>'icon-plus', 'url'=>Yii::app()->createUrl('product/producttype/create'), 
        'linkOptions'=>array('class'=>'ajaxFormModal','title'=>'Thêm loại hàng hóa')),
        array('label'=>'Thêm đơn vị tính', 'icon'=>'icon-plus', 'url'=>Yii::app()->createUrl('product/uom/create'), 
        'linkOptions'=>array('class'=>'ajaxFormModal','title'=>'Thêm đơn vị tính')),        
         array('label'=>'Thêm kho', 'icon'=>'icon-plus', 'url'=>Yii::app()->createUrl('inv/warehouse/create'), 
        'linkOptions'=>array('class'=>'ajaxFormModal','title'=>'Thêm kho')),
         array('label'=>'Thêm nhóm hàng hóa', 'icon'=>'icon-plus', 'url'=>Yii::app()->createUrl('product/category/create'), 
        'linkOptions'=>array('class'=>'ajaxFormModal','title'=>'Thêm nhóm hàng hóa')),        
	),
));
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<script>
 $(document).ready(function(){
        $('#Product_class option[value=3]').attr('selected', 'selected');
        $('#Product_default_wh_id option[value=69]').attr('selected', 'selected');
    });
</script>