



<h1 class="title"> <i class="icon-th-list"></i><span>Nhập xuất tồn</span></h1>

<div class="tools-bar">
<?php
/*
	$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
        array('label'=>'Xuất ra file PDF', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('inventory',array('export'=>'pdf')), 'linkOptions'=>array('target'=>'_blank') ),
        array('label'=>'Xuất ra file Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('inventory',array('export'=>'excel')), 'linkOptions'=>array('target'=>'_blank')),
        array('label'=>'In', 'icon'=>'icon-print', 'url'=>'javascript:void(0);return false', 'linkOptions'=>array('class'=>'link-print','accesskey'=>'p')),        
	),
));
*/
?>
</div>

<?php
	Yii::app()->clientScript->registerScript('search', "
    $('.search-form form').submit(function(){
    $.fn.yiiGridView.update('inventoryinout-grid', {
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
<div class="printableArea">
<div style="overflow: scroll;">
<?php
$this->renderPartial('_view',array('dataProvider'=>$dataProvider,'search'=>$search,'viewMode'=>true));
?>
</div>
</div>
