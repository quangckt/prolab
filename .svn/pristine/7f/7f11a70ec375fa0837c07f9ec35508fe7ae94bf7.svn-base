
<?php
$this->breadcrumbs=array(
	'Products',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});



$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('product-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1 class="title">Danh mục mã sản phẩm, hàng hóa, dịch vụ</h1>
<hr />
<div class="tools-bar">
<?php 

$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'),
         'linkOptions'=>array('accesskey'=>'t','class'=>'add-button')
         ),
		array('label'=>'Tìm kiếm', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button'),'accesskey'=>'f'),
		array('label'=>'Export to Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
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
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
    'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		'code',
		 array('name'=>'name','type'=>'raw','value'=>'$data->updateLink()'),
         array('name'=>'class','value'=>'$data->getClass()'),
         array('name'=>'category_id','value'=>'$data->category->name'),         
         array('name'=>'type_id','value'=>'isset($data->type)?$data->type->name:""'),
         array('name'=>'uom_id','value'=>'$data->uom->name'),                         
         /*
		 array('name'=>'create_uid','value'=>'$data->getCreateName()'),
		 array('name'=>'update_uid','value'=>'$data->getCreateName()'),                
		'costmethod',
		'po_uom_id',
		'sale_uom_id',
		'work_uom_id',
		'length',
		'width',
		'hegth',
		'thickness',
		'note',
		'minqtystock',
		'default_wh_id',
		'lastcost',
		'lastpodate',
		'avgcost',
		'stdcost',
		'qtysale',
		'qtypo',
		'active',
		*/
       array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{update} {delete}',
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
