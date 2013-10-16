<?php
$this->breadcrumbs=array(
	'Warehouseinlines',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('warehouseinline-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1>Warehouseinlines</h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tìm kiếm', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button'),'accesskey'=>'f'),
		array('label'=>'Export to PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
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
<div style="overflow: scroll;">

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
            'gridId' => 'warehouseindetail-grid', //id of related grid
            'storage' => 'db',  //where to store settings: 'db', 'session', 'cookie'
            'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side 
            'model' => $model->search()->model, //model is used to get attribute labels
            'columns' =>array(
    'date',
    array('name'=>'num',
    'type'=>'raw',
    ),
    array('name'=>'supplier_name',
    'type'=>'raw',
    'value'=>'$data->supplier_name'
    ),
    'invdate',
    'invnum',
    'product_code',
    'description',
    'qty',
    'price',
     array(
     'name'=>'subtotal',
     'htmlOptions'=>array('class'=>'isnum'),
      'type'=>'number',
      ),   
    'note',
    
    'paymentterm',
    'paid',
    'create_date',
    array('name'=>'create_uid','value'=>'$data->getCreateName()'),
    'update_date',
    array('name'=>'update_uid','value'=>'$data->getCreateName()'),
    array('name'=>'branch_id','value'=>'$data->getBranchName()'),
), 
          
   )));


$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'warehouseindetail-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=> $dialog->columns()
)); ?>

</div>