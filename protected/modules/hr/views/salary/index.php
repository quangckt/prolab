<?php

class MonthYear extends CFormModel {

    public $month;
    public $year;

    public function attributeLabels() {
        return array(
            'month' => 'Tháng',
            'year' => 'Năm',
        );
    }

}

$modelMY = new monthYear();
?>
<?php
$this->breadcrumbs = array(
    'OtherRecPay',
);

Yii::app()->clientScript->registerScript('ajaxDisplay', "
    $('#ajaxFormSearch').submit(function(){
        $.fn.yiiGridView.update('paramsalary-grid', {
            data: $(this).serialize()
        });
        return false;
    });
");
?>

<h1 class="title">Nhập thu chi khác trong tháng</h1>
<hr/>

<div class="monthYear-form row-fluid">
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
        <?php echo CHtml::submitButton('Hiển thị', array('class' => 'btn btn-primary', 'id' => 'displayRules')); ?>
    </div>
    <?php echo CHtml::endForm(); ?>
    <div class="span2">
        <label>&nbsp;</label>
        <?php echo CHtml::button('New tab', array('class' => 'btn btn-primary', 'id' => 'newTab')); ?>
    </div>
</div>
<!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
    'id' => 'mytabs',
    'type' => 'tabs',
    'placement' => 'above', // 'above', 'right', 'below' or 'left'
    'tabs' => array(
        array(
            'label' => 'Thu chi khác',
            'content' => $this->renderPartial('_otherRecPay', array(
                'model' => $model,
                    ), true),
            'active' => true
        ),
        array(
            'label' => 'Tổng hợp tỷ lệ thưởng',
            'content' => '',
        ),
        array(
            'label' => 'Tổng hợp giá trị thưởng',
            'content' => '',
        ),
        array(
            'label' => 'Chi tiết thu nhập',
            'content' => '',
        ),
    ),
));
?>
<script type="text/javascript">
    $('#newTab').click(function() {
        $('#yw1').append($('<li><a data-toggle="tab" href="#newtab1">New Tab</a></li>'));
        $('.tab-content').append($('<div class="tab-pane" id="newtab1"></div>'));
        $('#newtab1').tab('show');
        var url = '<?php echo Yii::app()->controller->createUrl("testNew"); ?>';
        $.post(url, {}, function(data) {
            $('#newtab1').append(data);
            Prolab.attachBehaviors();
        });
    });
</script>