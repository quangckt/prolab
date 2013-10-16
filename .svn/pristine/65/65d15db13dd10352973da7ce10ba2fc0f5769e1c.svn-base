<?php
$this->breadcrumbs=array(
	'Branches'=>array('index'),
	'Create',
);

?>

<h1>Create Branch</h1>
<hr/>
<?php 

$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
        array('label'=>'Danh sách', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array()),
		
	),
));

?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>