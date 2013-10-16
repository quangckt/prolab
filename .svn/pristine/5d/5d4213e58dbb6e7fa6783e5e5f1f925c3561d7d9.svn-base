<?php
$this->breadcrumbs=array(
	'Partners',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('partner-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1 class="title">Danh sách nhà cung cấp</h1>
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
	'id'=>'partner-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		'code',
		 array('name'=>'name',
         'type'=>'raw',
         'value'=>'$data->createLink()'),
		'tel',
		'web',
		'email',
        array(
            'name'=>'create_date',
            'type'=>'raw',
            'value'=>'date("d-m-Y",strtotime($data->create_date))'
        ),
        array(
            'name'=>'active',
            'type'=>'raw',
            'value'=>'($data->active==1)?"Có":"Không"'
        ),
        array(
            'name'=>'customer',
            'type'=>'raw',
            'value'=>'($data->customer==1)?"Có":"Không"'
        ),
        array(
            'name'=>'supplier',
            'type'=>'raw',
            'value'=>'($data->supplier==1)?"Có":"Không"'
        ),
        'comment',
		/*
		
		
		 array('name'=>'create_uid','value'=>'$data->getCreateName()'),
		'update_date',
		'update_uid',
		'comment',
		 array('name'=>'branch_id','value'=>'$data->getBranchName()'),
		*/
       array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{update} {delete}',
			'buttons' => array(
			      	
                              'update' => array(
					'label'=> 'Sửa',
					'options'=>array(
						'class'=>'btn-small update'
					)
				),
				'delete' => array(
					'label'=> 'Xóa',
					'options'=>array(
						'class'=>'btn-small delete'
					)
				)
			),
            'htmlOptions'=>array('style'=>'width: 115px'),
           )
	),
)); ?>
