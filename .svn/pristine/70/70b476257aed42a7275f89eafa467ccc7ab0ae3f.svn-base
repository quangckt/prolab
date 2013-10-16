<?php
$this->breadcrumbs = array(
    'Payperiod update',
);

Yii::app()->clientScript->registerScript('shareProfit', "
$('.updatePay-form form').submit(function(){
    if ($('#Payperiod_rateloan').val() == '' || $('#Payperiod_rateloan').val() == 0) {
        $('#Payperiod_rateloan').val('');
        $('#Payperiod_rateloan').focus();
        alert('Tỉ lệ lãi phải lớn hơn 0!!!');
    }else if ($('#updatePayPeriodDate').val() == ''){
        $('#updatePayPeriodDate').focus();
        alert('Bạn chưa nhập ngày!!!');
    } else if ($('#Payperiod_name').val() == ''){
        $('#Payperiod_name').focus();
        alert('Bạn chưa nhập kỳ trả lãi!!!');
    } else {
        $('#checkPressButton').val('1');
        $('#datePay').val($('#updatePayPeriodDate').val());
        $('#ratePay').val($('#Payperiod_rateloan').val());
        $('#namePay').val($('#Payperiod_name').val());
        $.fn.yiiGridView.update('payperiod-grid', {
            data: $(this).serialize()
        });
    }
    return false;
});
");
?>

<h1 class="title">Cập nhật trả lãi vay <?php echo $model->name . ' ngày ' . $model->date; ?></h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Các đợt trả lãi vay', 'icon' => 'icon-arrow-left', 'url' => Yii::app()->controller->createUrl('index')),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => Yii::app()->createUrl('hr/share/index')),
        ),
    ));
    ?>
</div>

<div class="updatePay-form">
    <?php $this->renderPartial('_updatepayPeriod', array('model' => $model));?>
</div><!-- preview-form -->

<?php  $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'acceptProfit-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'horizontal',
    'action' => Yii::app()->controller->createUrl('SubmitUpdatePP'),
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
));
?>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'payperiod-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'columns' => array(
        array(
            'header' => 'STT',
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
        array(
            'header' => 'Mã',
            'name' => 'code',
        ),
        array(
            'header' => 'Tên cổ đông',
            'name' => 'fullName',
        ),
        array(
            'header' => 'Giá trị vay',
            'name' => 'payPeriod',
            'type' => 'number',
        ),
        array(
            'header' => 'Tỷ lệ vay',
            'type' => 'raw',
            'value' => array($this, 'ratePayUpdate'),
        ),
        array(
            'header' => 'Giá trị lãi',
            'type' => 'number',
            'value' => array($this, 'valuePayUpdate'),
        ),
        array(
            'header' => 'Thanh toán',
            'type' => 'raw',
            'value' => 'CHtml::checkBox($data["emp_id"], true, array("class" => "", "id" => $data["emp_id"], "value" => $data["payPeriod"], "onclick" => "return false;"))',
        ),
        array(
            //'header' => 'Thanh toán',
            'type' => 'raw',
            'value' => 'CHtml::checkBox($data["emp_id"]."-".$data["emp_id"], true, array("style" => "display:none", "class" => "", "id" => $data["emp_id"], "value" => $data["payPeriod"]))',
            'htmlOptions' => array(
                'style' => 'width:0px; border-left:0px;',
            ),
        ),
    ),
));?>
<div class="form">
    <div class="span10">
        <input type="hidden" name="idPay" id="idPay"/>
        <input type="hidden" name="datePay" id="datePay"/>
        <input type="hidden" name="ratePay" id="ratePay"/>
        <input type="hidden" name="namePay" id="namePay"/>
    </div>
    <div class="span2">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'icon' => 'ok white', 'label' => 'Chấp nhận', 'htmlOptions' => array('id' => 'acceptOK', 'class' => '')));?>
    </div>
</div>
<?php $this->endWidget(); ?>
<script type="text/javascript">
    window.onbeforeunload = function () {
        if (clicked == false) {
            if (navigator.userAgent.indexOf("Firefox") != -1) {
                if (confirm("Are you sure you want to close the window without submitting the documents ?")) {
                    self.close();
                    return;
                }
            }
            return "Are you sure you want to close the window without submitting the documents?";
        }
    };
    $('#idPay').val(<?php echo $model->id; ?>);
    $('#datePay').val($('#updatePayPeriodDate').val());
    $('#ratePay').val($('#Payperiod_rateloan').val());
    $('#namePay').val($('#Payperiod_name').val());
</script>