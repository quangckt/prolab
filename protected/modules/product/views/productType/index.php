
<?php
$this->breadcrumbs=array(
	'Product Types',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    //$('.search-form').slideToggle('fast');
    $('.search-form').show().modal({backdrop:false,show:true}).draggable();
    //$('#search-product-type-form').modal().draggable();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('product-type-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1 class="title">Quản lý loại vật tư</h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 
              'icon'=>'icon-plus', 
              'url'=>Yii::app()->controller->createUrl('create',array('module'=>$this->mRef)), 
              'linkOptions'=>array('accesskey'=>'t'),
              ),
		array('label'=>'Tìm kiếm', 'icon'=>'icon-search', 'url'=>'#searchModal', 'linkOptions'=>array('data-toggle'=>'modal','class'=>'search-button'),'accesskey'=>'f'),
		array('label'=>'Xuất ra Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel',array('module'=>$this->mRef)), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
	),
));
?>
</div>

  

<div class="search-form modal fade" style="display:none" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>

</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'product-type-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		'id',
		 array('name'=>'name','type'=>'raw','value'=>'$data->updateLink()'),
         'parent',
       array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{update} {delete}',
			'buttons' => array(	
                              'update' => array(
					'label'=> 'Cập nhật',
					'options'=>array(
						'class'=>'update'
					)
				),
				'delete' => array(
					'label'=> 'Xóa',
					'options'=>array(
						'class'=>'delete'
					)
				)
			),
            
           )
	),
)); ?>
