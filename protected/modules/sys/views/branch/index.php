<?php
$this->breadcrumbs=array(
	'Branches',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('branch-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1>Chi nhánh</h1>
<hr />

<?php 
$toolbar= $this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array()),
	),
));

?>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'branch-grid',
    'type'=>'striped  condensed',
	'dataProvider'=>$model->search(),
     'template'=>'{pager}{items}{pager}',
	'columns'=>array(
		array(
          'name'=>'name',
		 'type'=>'raw',
    	 'htmlOptions'=>array('class'=>'name-column'),
    	 'value'=>'$data->createlink()',  
        ),
		'address',
		'tel',
       array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
           )
	),
)); ?>
