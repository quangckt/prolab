<?php
$this->breadcrumbs=array(
	'Shops',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('shop-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1 class="title">Cửa Hàng</h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
        //array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'),'active'=>true, 'linkOptions'=>array('accesskey'=>'l')),
		array('label'=>'Tìm kiếm', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button'),'accesskey'=>'f'),
		//array('label'=>'Export to PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
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
	'id'=>'shop-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		 array('name'=>'name','type'=>'raw','value'=>'$data->createLink()'),
		'address',
		'phone',
       array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{update} {delete}',
			'buttons' => array(
                'update' => array(
					'label'=> 'Sửa',
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
            //'htmlOptions'=>array('style'=>'width: 115px'),
           )
	),
)); ?>

