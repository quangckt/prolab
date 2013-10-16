<?php
$this->breadcrumbs=array(
	'Review Workings',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('review-working-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1 class="title">Duyệt ngày nghỉ đi trễ về sớm</h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array('accesskey'=>'l')),
	),
));
?>
</div>

<div class="search-form">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'review-working-grid',
	'dataProvider'=>$model->listEmpWorks(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
        'codeandname',
        'starttime',
        'endtime',
        'status_id',
        
		/*
		 array('name'=>'create_uid','value'=>'$data->getCreateName()'),
		 array('name'=>'update_uid','value'=>'$data->getCreateName()'),
		*/
	),
)); ?>
