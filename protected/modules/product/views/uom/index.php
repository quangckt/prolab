<?php
$this->breadcrumbs=array(
	'Uoms',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('uom-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1 class="title">Đơn vị tính</h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
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
	'id'=>'uom-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
	 array('name'=>'name','type'=>'raw','value'=>'$data->createLink()'),
       array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => ' {update} {delete}',
			'buttons' => array(	
                              'update' => array(
					'label'=> 'Cập nhật',
					'options'=>array(
						'class'=>' btn-small update'
					)
				),
				'delete' => array(
					'label'=> 'Xóa',
					'options'=>array(
						'class'=>' btn-small delete'
					)
				)
			),
            'htmlOptions'=>array('style'=>'width: 115px'),
           )
	),
)); ?>
