<style type="text/css">
    legend {
        width: auto !important;
        border: none !important;
        margin-bottom: 0 !important;
        line-height: 20px !important;
        border-bottom: 0 !important;
    }
</style>
<?php
$this->breadcrumbs = array(
    'Paramsalaries',
);

Yii::app()->clientScript->registerScript('create', "
$('.create-button').click(function(){
    $('.create-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    //$.fn.yiiGridView.update('paramsalary-grid', {
    //    data: $(this).serialize()
    //});
    return false;
});
");

?>

<h1 class="title">Tham số lương tháng</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => '#', 'linkOptions' => array('class' => 'create-button'), 'accesskey' => 'f'),
            /*array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('create'), 'linkOptions' => array('class' => 'create-button ajaxFormModal', 'title' => 'Tạo mới', 'ajaxModalSubmited' => 'yiiGridViewUpdate("paramsalary-grid")',), 'accesskey' => 'f'),
        ),*/
        ),
    ));
    ?>
</div>
<div id="renderAction"></div>

<div class="create-form" style="display:auto">
    <?php $this->renderPartial('_formNew', array(
    'model' => $model,
)); ?>
</div>
<!-- create-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'paramsalary-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'selectableRows' => false,
    'template' => '{items}{pager}',
    'columns' => array(
        array(
            'header' => 'Cửa hàng',
            'name' => 'shop_id',
            'value' => '$data->shop->name',
            'filter' => CHtml::listData(Shop::model()->findAll(), 'id', 'name'),
            'filterHtmlOptions' => array(
                'style' => 'width:110px;',
            ),
            'htmlOptions' => array(
                'style' => 'width:110px;',
            ),
        ),
        'monthYear',
        array(
            'name' => 'amountOfRice',
            'type' => 'number',
        ),
        array(
            'name' => 'basic',
            'type' => 'number',
        ),
        array(
            'name' => 'rateIndirecSal',
            'type' => 'numberTwo',
        ),
        array(
            'name' => 'totalBonusDirecSal',
            'type' => 'number',
        ),
        array(
            'name' => 'totalBonusIndirectSal',
            'type' => 'number',
        ),
        array(
            'name' => 'addIndirectSal',
            'type' => 'number',
        ),
        array(
            'name' => 'reserFundSal',
            'type' => 'number',
        ),
        array(
            'name' => 'productSal',
            'type' => 'number',
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Sửa',
                    'options' => array(
                        'class' => 'btn-small update ajaxFormModal',
                        'ajaxModalSubmited' => 'yiiGridViewUpdate("paramsalary-grid")',
                    )
                ),
                'delete' => array(
                    'label' => 'Xóa',
                    'options' => array(
                        'class' => 'btn-small delete'
                    )
                )
            ),
            'htmlOptions' => array('style' => 'width: 75px'),
        )
    ),
));
?>