<?php
$this->breadcrumbs = array(
    'Printer Plans',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('printer-plan-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1 class="title">Chu kỳ ca máy</h1>
<hr />
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('create'), 'linkOptions' => array('accesskey' => 't', 'class' => 'ajaxFormModal', 'title' => 'Thêm mới', 'ajaxModalSubmited' => 'yiiGridViewUpdate("printer-plan-grid")')),
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
    'id' => 'printer-plan-grid',
    'dataProvider' => $model->search(),
    'type' => 'stripped bordered condensed',
    'template' => '{items}{pager}',
    'columns' => array(
        array(
            'header' => 'STT',
            'name' => 'id',
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
        ),
        array(
            'name' => 'inv_printer_id',
            'value' => '$data->printer->name'
        ),
        'datefrom',
        'dateto',
        array(
            'name' => 'status',
            'type' => 'raw',
            'value' => '$data->status?$data->statusDisable:$data->statusEnable'
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => array(
                'view' => array(
                    'label' => 'Xem',
                    'options' => array(
                        'class' => 'btn-small view'
                    )
                ),
                'update' => array(
                    'label' => 'Sửa',
                    'options' => array(
                        'class' => 'btn-small update ajaxFormModal',
                        'ajaxModalSubmited' => 'yiiGridViewUpdate("printer-plan-grid")'
                    )
                ),
                'delete' => array(
                    'label' => 'Xóa',
                    'options' => array(
                        'class' => 'btn-small delete'
                    )
                )
            ),
            'htmlOptions' => array('style' => 'width: 115px'),
        )
    ),
));
?>
