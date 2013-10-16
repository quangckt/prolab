<?php
$this->breadcrumbs=array(
	'Warehouseins'=>array('index'),
	$model->id,
);
?>

<h1 class="title">Xem phiếu:<?php echo $model->num; ?></h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array('accesskey'=>'l')),
        array('label'=>'Sửa', 'icon'=>'icon-edit', 'url'=>Yii::app()->controller->createUrl('update',array('id'=>$model->id)), 'linkOptions'=>array('accesskey'=>'e')),
		array('label'=>'In', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;'),'accesskey'=>'p'),

)));
?>
</div>
<div class='printableArea'>
<?php $this->renderPartial('_view',array('data'=>$model)); ?>
</div>

<style type="text/css" media="print">

body {visibility:hidden;}

#main-content {
    width: 0px !important;
    height: 0px !important;
}
  
#left-menu {
    visibility:hidden;
    width: 0px !important;
    height: 0px !important;
}
.printableArea {
  visibility:visible;
  position: absolute;
  top: 0px; 
  left: 0px;
}
</style>

<script type="text/javascript">
function printDiv(){
    window.print();
    return false ;
}
</script>