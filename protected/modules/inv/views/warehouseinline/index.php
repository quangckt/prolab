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


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'warehouseinline-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		array(
        'header'=>'Ngày',
        'value'=>'$data->warehousein->date'
        ),
        array(
        'header'=>'Số phiếu nhập',
        'value'=>'$data->warehousein->num'
        ),
        
        array(
        'header'=>'Nhà cung cấp',
        'value'=>'$data->warehousein->supplier->name'
        ),
        array(
        'header'=>'Số hóa đơn',
        'value'=>'$data->warehousein->invnum'
        ),  
        
        array(
        'header'=>'Ngày hóa đơn',
        'value'=>'$data->warehousein->invdate'
        ),          
                                
		array(
        'header'=>'mã hàng',
        'value'=>'$data->product->code'
        ), 
        
        array(
        'header'=>'Tên hàng',
        'value'=>'$data->description'
        ), 
        
        array(
        'header'=>'ĐVT',
        'value'=>'$data->uom->name'
        ),
		
		'qty',
		'description',
		'price',
		/*
		'discount',
		'wh_id',
		'lenght',
		'width',
		'thickness',
		'note',
		'amounttotal',
		'amountvat',
		'status',
		'create_date',
		 array('name'=>'create_uid','value'=>'$data->getCreateName()'),
		'update_date',
		 array('name'=>'update_uid','value'=>'$data->getCreateName()'),
		'uom_id',
		*/
	),
)); ?>
