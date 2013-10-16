<?php
$this->breadcrumbs = array(
    'Worklists RecycleBin',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('worklist-recyclebin-grid', {
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1 class="title">Khôi phục công việc</h1>
<hr />
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
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
    'id' => 'worklist-recyclebin-grid',
    'dataProvider' => $model->search('0'),
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
        'notmateri',
        'notvalue',
        'user.username',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{restore}',
            'buttons' => array(
                'restore' => array(
                    'label' => 'Phục hồi',
                    'icon' => 'repeat',
                    'url' => 'yii::app()->controller->createUrl("restore", array("id" => "$data->id"))',
                    'options' => array(
                        'class' => 'btn-small restore',
                        'id' => 'restore',
                        'ajax' => array(
                            'type' => 'GET',
                            'dataType' => 'html',
                            'url' => 'js:$(this).attr("href")',
                            //'data' => 'js:$("#ajaxFormSearch").serialize()',
                            'beforeSend' => 'function(data){
                                    var result = confirm("Bạn có chắc muốn phục hồi công việc này?");
                                    if (result==false)
                                        return false;
                                }',
                            'success' => 'function(data){
                                $.fn.yiiGridView.update("worklist-recyclebin-grid", {
                                    data: $(this).serialize()
                                });
                        }',
                        )
                    ),
                ),
            ),
            'htmlOptions' => array('style' => ''),
        )
    ),
));
?>
