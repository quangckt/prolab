<?php
$this->breadcrumbs=array(
	'Check Inventories'=>array('index'),
	'Create',
);

?>

<h1 class="title">Tạo mới kiểm kê</h1>
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
<script>
$(document).ready(function(){
        $('#CheckInventory_whout_id option[value=70]').attr('selected', 'selected');
        $('#CheckInventory_whcheck_id option[value=81]').attr('selected', 'selected');
    });
</script>