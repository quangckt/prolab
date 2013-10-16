
<h1 class="title"> <i class="icon-th-list"></i><span>Chi tiết xuất</span></h1>

<div class="tools-bar">
<?php
	$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
        array('label'=>'Xuất ra file PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('WarehouseoutdetailsToPdf'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
        array('label'=>'Xuất ra file Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('WarehouseoutdetailsToExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
        array('label'=>'In', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('onclick'=>'printDiv();return false;'),'accesskey'=>'p'),        
	),
));
?>
</div>

<?php
	Yii::app()->clientScript->registerScript('search', "
    $('.search-form form').submit(function(){
    $.fn.yiiGridView.update('warehousoutdetails-grid', {
    data: $(this).serialize()
    });
    return false;
    });
");
?>



<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$search,
)); ?>
</div><!-- search-form -->
<?php



$this->renderPartial('_warehouseoutdetails',array('dataProvider'=>$dataProvider,'viewMode'=>true));
?>

<style type="text/css" media="print">
body {visibility:hidden;}
.printableArea{visibility:visible;}
.printableArea{
position: absolute !important;
top: 0px;
left: 0px;    
}
#wrap,#footer {
    height: 0px !important;
    position: relative !important 
     }
</style>
<script type="text/javascript">
function printDiv()
{

window.print();

}
</script>