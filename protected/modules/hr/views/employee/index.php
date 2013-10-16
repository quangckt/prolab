<?php
$this->breadcrumbs=array(
	'Employees',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('employee-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1 class="title">Hồ sơ nhân viên</h1>
<hr />
<div class="tools-bar">
<?php 
    $dialog = $this->widget('ext.ecolumns.EColumnsDialog', array(
       'options'=>array(
            'title' => 'Layout settings',
            'autoOpen' => false,
            'show' =>  'fade',
            'hide' =>  'fade',
        ),
       'htmlOptions' => array('style' => 'display: none'), //disable flush of dialog content
       'ecolumns' => array(
            'gridId' => 'employee-grid', //id of related grid
            'storage' => 'db',  //where to store settings: 'db', 'session', 'cookie'
            'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side 
            'model' => $model->search()->model, //model is used to get attribute labels
            'columns' =>array(
     array('id'=>'selectedItems', 'class'=>'CCheckBoxColumn',
     ),
    array(            
         'name'=>'image',
         'type'=>'html',
         'value'=>array($this,'gridImageColumn'),
        ),            
    'code',
    'firstname',
    'middlename',
    'lastname',
    array('name'=>'sex',
    'type'=>'raw',
    'value'=>array($this,'viewSexColum')
    ),
    'mobile_phone',
    'identification',

    array('name'=>'shop_id',
    'type'=>'raw',
    'value'=>'(isset($data->shop))?$data->shop->name:""',
    ),
    array('name'=>'department_id',
    'type'=>'raw',
    'value'=>'(isset($data->department))?$data->department->name:""'
    ),
    array('name'=>'job_id',
    'type'=>'raw',
    'value'=>'(isset($data->job))?$data->job->name:""'
    ),
    
    array('name'=>'email',
    'type'=>'raw',
    'value'=>'CHtml::mailto($data->email)',
    ),
    array(
    'class'=>'bootstrap.widgets.TbButtonColumn',
    'template' => '{view} {update} {delete}',
    'buttons' => array(
    'view' => array(
        'label'=> 'Xem',
        'url'=>'Reports::createUrl("hr_employee.mrt",array("id"=>$data->id))',
        'options'=>array(
        'class'=>' view',
        'target'=>"_blank"
        )
    ),
    'update' => array(
        'label'=> 'Sửa',
        'options'=>array(
        'class'=>' update'
        )
    ),
    'delete' => array(
        'label'=> 'Xóa',
        'options'=>array(
        'class'=>' delete'
        )
    )
    ),
    
    )
), 
          
   )));
?>
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
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
	'id'=>'employee-grid',
    'type'=>'striped bordered',
	'dataProvider'=>$model->search(),
    'template'=>$dialog->link().'{summary}{pager}{items}{pager}',
    'selectableRows'=>2,
    'columns'=>$dialog->columns(),
    'htmlOptions'=>array()
)); ?>
	