<?php

class MonthYear extends CFormModel {

    public $month;
    public $year;
    public $monthFrom;
    public $yearFrom;
    public $monthTo;
    public $yearTo;

    public function attributeLabels() {
        return array(
            'month' => 'Tháng',
            'year' => 'Năm',
            'monthFrom' => 'Tháng',
            'yearFrom' => 'Năm',
            'monthTo' => 'Tháng',
            'yearTo' => 'Năm',
        );
    }

}

$modelMY = new monthYear();
?>

<?php
$this->breadcrumbs = array(
    'Payrollrules',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.copy-form').slideUp('fast');
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('payrollrule-grid', {
        data: $(this).serialize()
    });
    return false;
});

");
Yii::app()->clientScript->registerScript('copy', "
$('.copy-button').click(function(){
    $('.search-form').slideUp('fast');
    $('.copy-form').slideToggle('fast');
    return false;
});
");
Yii::app()->clientScript->registerScript('ajaxUpdateRule', "
    $('#ajaxFormSearch').submit(function(){
        var href = '" . Yii::app()->controller->createUrl('create') . "';
        var monthNew = $('#MonthYear_month').val();
        var yearNew = $('#MonthYear_year').val();
        var hrefNew = href+'&month='+monthNew+'&year='+yearNew;
        $('#createNew').attr('href', hrefNew);
        $.fn.yiiGridView.update('payrollrule-grid', {
            data: $(this).serialize()
        });
        return false;
    });
");
?>

<h1 class="title">Quy định thưởng/phạt</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('create', array('month' => '', 'year' => '')), 'linkOptions' => array('title' => 'Nhập tỉ lệ thưởng', 'class' => 'ajaxFormModal', 'ajaxModalSubmited' => '$.fn.yiiGridView.update("payrollrule-grid")', 'accesskey' => 't', 'id' => 'createNew')),
            array('label' => 'Tìm kiếm', 'icon' => 'icon-search', 'url' => '#', 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
            array('label' => 'Copy qui định', 'icon' => 'plus-sign', 'url' => '#', 'linkOptions' => array('class' => 'copy-button'), 'accesskey' => 'f'),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
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
<div class="copy-form" style="display:none">
    <?php
    $this->renderPartial('_copy', array(
        'model' => $modelMY,
    ));
    ?>
</div><!-- copy-form -->
<div class="monthYear-form">
    <?php echo CHtml::beginForm(Yii::app()->createUrl($this->route), 'post', array('id' => 'ajaxFormSearch')); ?>
    <div class="span1">
        <?php echo CHtml::activeLabelEx($modelMY, 'month', array()); ?>
        <?php echo CHtml::activeNumberField($modelMY, 'month', array('class' => 'span', 'value' => date('n'))); ?>
    </div>
    <div class="span1">
        <?php echo CHtml::activeLabelEx($modelMY, 'year', array()); ?>
        <?php echo CHtml::activeNumberField($modelMY, 'year', array('class' => 'span', 'value' => date('Y'))); ?>
    </div>
    <div class="span2">
        <label>&nbsp;</label>
        <?php echo CHtml::submitButton('Hiển thị', array('class' => 'btn btn-primary', 'icon' => 'ok white', 'id' => 'displayRules')); ?>
    </div>
    <?php echo CHtml::endForm(); ?>
</div><!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'payrollrule-grid',
    'dataProvider' => $model->search(),
    'template' => '{items}',
    'type' => 'striped bordered condensed ',
    'columns' => array(
        array('name' => 'type', 'value' => '$data->getTypetext($data->type)'),
        array('name' => 'name', 'type' => 'raw', 'value' => '$data->createLink()'),
        'op',
        array('name' => 'val', 'type' => 'numberOne'),
        array('name' => 'rate', 'type' => 'numberOne'),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Sửa',
                    'options' => array(
                        'class' => 'btn-small update ajaxFormModal',
                        'ajaxModalSubmited' => '$.fn.yiiGridView.update("payrollrule-grid")',
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
<script type="text/javascript">
    var href = '<?php echo Yii::app()->controller->createUrl('create'); ?>';
    var monthNew = $('#MonthYear_month').val();
    var yearNew = $('#MonthYear_year').val();
    var hrefNew = href+'&month='+monthNew+'&year='+yearNew;
    $('#createNew').attr('href', hrefNew);
</script>