<?php
$this->breadcrumbs=array(
	'General Timeinouts',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('general-timeinout-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1 class="title">Quy định giờ đến về</h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array('accesskey'=>'l')),
		array('label'=>'Tìm kiếm', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button'),'accesskey'=>'f'),
	),
));
?>
</div>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'general-timeinout-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		'id',
		 array('name'=>'name','type'=>'raw','value'=>'$data->createLink()'),
		'date',
		'status',
		 array('name'=>'create_uid','value'=>'$data->getCreateName()'),
       array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{view} {update} {delete}',
			'buttons' => array(
			      'view' => array(
					'label'=> 'View',
					'options'=>array(
						'class'=>'btn-small view'
					)
				),	
                              'update' => array(
					'label'=> 'Update',
					'options'=>array(
						'class'=>'btn-small update'
					)
				),
				'delete' => array(
					'label'=> 'Delete',
					'options'=>array(
						'class'=>'btn-small delete'
					)
				)
			),
            'htmlOptions'=>array('style'=>'width: 115px'),
           )
	),
)); ?>
