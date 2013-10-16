<?php
$this->breadcrumbs=array(
	'Warehouses',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('warehouse-grid', {
        data: $(this).serialize()
    });
    return false;
});

$('.create-form form').submit(function(){
    $.post('?r=stock/warehouse/create',$(this).serialize(),function(){
       $.fn.yiiGridView.update('warehouse-grid', {
        data: $(this).serialize()
    }); 
    });

    return false;
});
");
?>

<h1 class="title">Danh sách kho</h1>
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
	'id'=>'warehouse-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
        array (
        'name'=>'name',
        'type'=>'raw',
        'value'=>'$data->createLink()'    
        ),
        'default_wh_in:boolean',
        'default_wh_out:boolean',
        'isM:boolean',
        'active:boolean',
        array(
            'name'=>'branch_id',
            'value'=>'$data->getBranchName()'
        ),
		'active:boolean',
        array(
        'name'=>'create_uid',
        'value'=>'$data->getCreateName()'
        ),
        /*        
		'create_date',
		'update_uid',
		'update_date',
		*/
       array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{update} {delete}',
			'buttons' => array(
			      	
                              'update' => array(
					'label'=> 'Update',
					'options'=>array(
						'class'=>' update'
					)
				),
				'delete' => array(
					'label'=> 'Delete',
					'options'=>array(
						'class'=>' delete'
					)
				)
			),
            
           )
	),
)); ?>
