<?php
$this->breadcrumbs=array(
	'Shift Changes'=>array('index'),
	'Create',
);

?>

<h1 class="title">Đổi trực</h1>
<hr/>
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list','url'=>array("/hr/shiftChange/index&plan_id=$plan->id") , 'linkOptions'=>array()),
	),
));
?>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model,'plan'=>$plan)); ?>