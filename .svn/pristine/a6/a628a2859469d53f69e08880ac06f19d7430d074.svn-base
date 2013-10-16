<?php
$this->breadcrumbs = array(
    'Worklists',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('worklist-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1 class="title">Danh mục công việc</h1>
<hr />
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('create'), 'linkOptions' => array('accesskey' => 't')),
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
    'id' => 'worklist-grid',
    'dataProvider' => $model->search('1'),
    'template' => '{items}{pager}',
    'type' => 'striped bordered condensed',
    'columns' => array(
        'code',
        'name',
        array(
            'name' => 'product_uom_id',
            'value' => '$data->uom->name'
        ),
        array(
            'name' => 'rec_waycallprice_id',
            'value' => '$data->waycalcprice->name',
        ),
        array(
            'name' => 'rec_aggregatesale_id',
            'value' => '$data->aggregatesales->name',
        ),
        array(
            'name' => 'rec_detailsale_id',
            'value' => '$data->detailssales->name',
        ),
        array(
            'name' => 'rec_grouprevenue_id',
            'value' => '$data->grouprevenue->name',
        ),
        array(
            'name' => 'rec_process_id',
            'value' => '$data->processes->code',
        ),
        array(
            'name' => 'rec_materiproduct_id',
            'value' => '$data->materialproduction->name',
        ),
        'productout',
        'materilogical1',
        'materilogical2',
        'materilogical3',
        array(
            'name' => 'notmateri',
            'type' => 'raw',
            'value' => 'CHtml::checkBox("", ord($data->notmateri), array("disabled"=>true))',
            'htmlOptions' => array(
                'style' => 'text-align:center'
            )
        ),
        array(
            'name' => 'notvalue',
            'type' => 'raw',
            'value' => 'CHtml::checkBox("", ord($data->notvalue), array("disabled"=>true))',
            'htmlOptions' => array(
                'style' => 'text-align:center'
            )
        ),
        array(
            'name' => 'user_id',
            'value' => function($data) {
                $userModel = Employee::model()->find('number=:number', array(':number' => $data->user_id));
                return $userModel->fullName;
            },
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Sửa',
                    'options' => array(
                        'class' => 'btn-small update'
                    )
                ),
                'delete' => array(
                    'label' => 'Xóa',
                    'options' => array(
                        'class' => 'btn-small delete'
                    )
                )
            ),
            'htmlOptions' => array('style' => ''),
        )
    ),
));
?>
