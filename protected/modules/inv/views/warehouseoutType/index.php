<?php
$this->breadcrumbs=array(
	'Warehouseout Types',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('warehouseout-type-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1 class="title">Loại xuất kho</h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
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
	'id'=>'warehouseout-type-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		 array('name'=>'name','type'=>'raw','value'=>'$data->updateLink()'),
		'note',
        array('name'=>'wh_req','type'=>'raw','value'=>array($this,'getWhReq')),
       array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{update} {delete}',
			'buttons' => array(
		            'update' => array(
					'label'=> 'Cập nhật',
					'options'=>array(
						'class'=>'  update'
					)
				),
				'delete' => array(
					'label'=> 'Xóa',
					'options'=>array(
						'class'=>' delete'
					)
				)
			),
            'htmlOptions'=>array('style'=>'width: 115px'),
           )
	),
)); ?>
