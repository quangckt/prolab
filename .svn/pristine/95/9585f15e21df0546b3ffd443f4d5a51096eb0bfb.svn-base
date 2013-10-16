<?php
$this->breadcrumbs=array(
	'Shift Changes'=>array('index'),
	$model->id,
);
?>

<h1 class="title">Kết quả đổi trực</h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>array("/hr/shiftChange/create&plan_id=$model->plan_id"), 'linkOptions'=>array('accesskey'=>'t')),
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list','url'=>array("/hr/shiftChange/index&plan_id=$model->plan_id") , 'linkOptions'=>array()),
)));
?>
</div>
<div class='printableArea'>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'emp_from',
        'type'=>'raw',
        'value'=>$model->empFrom->fullName
        ),
        'date_from',
        array('name'=>'form1_id',
        'type'=>'raw',
        'value'=>(isset($model->detailFrom1))?$model->detailFrom1->nameTime:"Nghỉ"
        ),
        array('name'=>'emp_to',
        'type'=>'raw',
        'value'=>$model->empTo->fullName
        ),
        'date_to',
        array('name'=>'form2_id',
        'type'=>'raw',
        'value'=>(isset($model->detailFrom2))?$model->detailFrom2->nameTime:"Nghỉ"
        ),
		'note',
	),
)); ?>
</div>
<style type="text/css" media="print">
body {visibility:hidden;}
.printableArea{visibility:visible;} 
</style>
<script type="text/javascript">
function printDiv()
{

window.print();

}
</script>