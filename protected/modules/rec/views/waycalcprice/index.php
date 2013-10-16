<?php
$this->breadcrumbs = array(
    'Waycalcprices',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    /*$.fn.yiiGridView.update('waycalcprice-grid', {
        data: $(this).serialize()
    });*/
    yiiGridViewUpdate('waycalcprice-grid',{data: $(this).serialize()});
    return false;
});
");
?>

<h1 class="title">Cách tính giá</h1>
<hr />
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('create'), 'linkOptions' => array('accesskey' => 't', 'title' => 'Thêm mới', 'class' => 'ajaxFormModal', 'ajaxModalSubmited' => 'yiiGridViewUpdate("waycalcprice-grid")')),
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
    'id' => 'waycalcprice-grid',
    'dataProvider' => $model->search(),
    'template' => '{items}{pager}',
    'type' => 'striped bordered condensed',
    'columns' => array(
        array(
            'header' => 'Stt',
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
        ),
        'name',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Sửa',
                    'options' => array(
                        'class' => 'btn-small update ajaxFormModal',
                        'ajaxModalSubmited' => 'yiiGridViewUpdate("waycalcprice-grid")'
                    )
                ),
                'delete' => array(
                    'label' => 'Xóa',
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
