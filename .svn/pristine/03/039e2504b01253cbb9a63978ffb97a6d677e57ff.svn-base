<?php
$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->id,
);
?>

<h1 class="title">Xem thông tin nhân viên</h1>
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
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(            
    'code',
    'firstname',
    'middlename',
    'lastname',
    'sex',
    'mobile_phone',
    'identification',
    array('name'=>'shop_id',
    'type'=>'raw',
    'value'=>$model->shop->name
    ),
    array('name'=>'department_id',
    'type'=>'raw',
    'value'=>$model->department->name
    ),
    array('name'=>'job_id',
    'type'=>'raw',
    'value'=>$model->job->name
    ),
    'birthday',
    'plate_of_birth',
    'email',
    'identification',
    'identification_plate',
    'identification_date',
    'address',
    array('name'=>'district_id',
    'type'=>'raw',
    'value'=>$model->district->name
    ),
    array('name'=>'city_id',
    'type'=>'raw',
    'value'=>$model->city->name
    ),
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