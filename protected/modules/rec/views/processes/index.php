<?php
$this->breadcrumbs = array(
    'Processes',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('processes-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1 class="title">Quy trình</h1>
<hr />
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('create'), 'linkOptions' => array('accesskey' => 't', 'class' => 'ajaxFormModal', 'title' => 'Thêm mới', 'ajaxModalSubmited' => 'yiiGridViewUpdate("processes-grid")')),
            array('label' => 'Tìm kiếm', 'icon' => 'icon-search', 'url' => '#', 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
        ),
    ));
    ?>
</div>

<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->


<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'processes-grid',
    'dataProvider' => $model->search(),
    'template' => '{items}{pager}',
    'type' => 'striped bordered condensed',
    'columns' => array(
        array(
            'header' => 'Stt',
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
        'code',
        array(
            'name' => 'distribute',
            'type' => 'raw',
            'value' => 'CHtml::checkBox("", ord($data->distribute), array("disabled"=>true))',
            'htmlOptions' => array(
                'style' => 'text-align:center'
            )
        ),
        array(
            'name' => 'scan',
            'type' => 'raw',
            'value' => 'CHtml::checkBox("", ord($data->scan), array("disabled"=>true))',
            'htmlOptions' => array(
                'style' => 'text-align:center'
            )
        ),
        array(
            'name' => 'process',
            'type' => 'raw',
            'value' => 'CHtml::checkBox("", ord($data->process), array("disabled"=>true))',
            'htmlOptions' => array(
                'style' => 'text-align:center'
            )
        ),
        array(
            'name' => 'printImage',
            'type' => 'raw',
            'value' => 'CHtml::checkBox("", ord($data->printImage), array("disabled"=>true))',
            'htmlOptions' => array(
                'style' => 'text-align:center'
            )
        ),
        array(
            'name' => 'productGC',
            'type' => 'raw',
            'value' => 'CHtml::checkBox("", ord($data->productGC), array("disabled"=>true))',
            'htmlOptions' => array(
                'style' => 'text-align:center'
            )
        ),
        array(
            'name' => 'printPayment',
            'type' => 'raw',
            'value' => 'CHtml::checkBox("", ord($data->printPayment), array("disabled"=>true))',
            'htmlOptions' => array(
                'style' => 'text-align:center'
            )
        ),
        array(
            'name' => 'deliverStails',
            'type' => 'raw',
            'value' => 'CHtml::checkBox("", ord($data->deliverStails), array("disabled"=>true))',
            'htmlOptions' => array(
                'style' => 'text-align:center'
            )
        ),
        array(
            'name' => 'deliverCustomer',
            'type' => 'raw',
            'value' => 'CHtml::checkBox("", ord($data->deliverCustomer), array("disabled"=>true))',
            'htmlOptions' => array(
                'style' => 'text-align:center'
            )
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Update',
                    'options' => array(
                        'class' => 'btn-small update ajaxFormModal',
                        'title' => 'Sửa',
                        'ajaxModalSubmited' => 'yiiGridViewUpdate("processes-grid")'
                    )
                ),
                'delete' => array(
                    'label' => 'Delete',
                    'options' => array(
                        'class' => 'btn-small delete'
                    )
                )
            ),
            'htmlOptions' => array('style' => 'width: 80px'),
        )
    ),
));
?>
