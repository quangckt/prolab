<?php
$this->breadcrumbs = array(
    'Errors',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('error-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1 class="title">Tổng hợp lỗi nhân viên thông báo</h1>
<hr/>
<!--<div class="tools-bar">
    <?php
/*    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('create'), 'linkOptions' => array('accesskey' => 't')),
            array('label' => 'Liệt kê', 'icon' => 'icon-th-list', 'url' => Yii::app()->controller->createUrl('index'), 'active' => true, 'linkOptions' => array('accesskey' => 'l')),
            array('label' => 'Tìm kiếm', 'icon' => 'icon-search', 'url' => '#', 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
            array('label' => 'Export to PDF', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GeneratePdf'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
        ),
    ));
    */?>
</div>-->

<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search', array(
    'model' => $model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'error-grid',
    'type' => 'striped bordered condensed',
    'filter' => $model,
    'dataProvider' => $model->search(),
    'selectableRows' => false,
    'template' => '{summary}{pager}{items}{pager}',
    'columns' => array(
        'subject',
        'errorArea',
        'content',
        'dateError:datetime',
        array(
            'header' => 'Người báo lỗi',
            'name' => 'employee.codeFullName',
        ),
        array(
            'header' => 'UseName',
            'name' => 'user.username',
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{delete}',
            'buttons' => array(
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
)); ?>
