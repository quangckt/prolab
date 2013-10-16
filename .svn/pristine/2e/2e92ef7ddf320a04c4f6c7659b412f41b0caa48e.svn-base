<?php
$this->breadcrumbs = array(
    'Transactions',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('transaction-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1 class="title">Mua cổ phần</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('create'), 'linkOptions' => array('class' => 'ajaxFormModal', 'title' => 'Mua cổ phần', 'accesskey' => 't')),
            array('label' => 'Tìm kiếm', 'icon' => 'icon-search', 'url' => '#', 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
        ),
    ));
    ?>
</div>

<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search', array(
    'model' => $model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'transaction-grid',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'columns' => array(
        //'id',
        'date',
        array(
            'name' => 'emp_id',
            'type' => 'raw',
            'value' => '$data->employee->fullName',
        ),
        array(
            'name' => 'qty',
            'type' => 'number',
        ),
        array(
            'name' => 'amt',
            'type' => 'number',
        ),
        array(
            'name' => 'batch_id',
            'type' => 'raw',
            'value' => '$data->batch->name',
        ),
        /*
          'note',
          'type',
          */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => array(
                'view' => array(
                    'label' => 'View',
                    'options' => array(
                        'class' => 'btn-small view'
                    )
                ),
                'update' => array(
                    'label' => 'Update',
                    'options' => array(
                        'class' => 'btn-small update'
                    )
                ),
                'delete' => array(
                    'label' => 'Delete',
                    'options' => array(
                        'class' => 'btn-small delete'
                    )
                )
            ),
            'htmlOptions' => array('style' => 'width: 115px'),
        )
    ),
)); ?>
