<?php
$this->breadcrumbs=array(
	'Uoms'=>array('index'),
	'Create',
);

?>

<h1 class="title">Tạo mới đơn vị tính</h1>
<hr/>
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
		array('label'=>'Tìm kiếm', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button')),
	),
));
?>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>