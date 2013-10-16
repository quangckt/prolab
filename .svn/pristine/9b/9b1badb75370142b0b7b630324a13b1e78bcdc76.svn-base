<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'payLoan-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>
    <fieldset class="well">

        <?php echo $this->renderPartial('_payPeriodLine', array('model' => $model, 'form' => $form, 'lines_relation' => $lines_relation, 'listEmp' => $listEmp), true, false) ?>

        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
        )); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'reset',
            'icon' => 'remove',
            'label' => 'Hủy',
        )); ?>
        </div>
    </fieldset>

    <?php $this->endWidget(); ?>

</div>

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
    Prolab.behaviors.tabularInput = function () {
        var settings = {
            lastline:<?php echo $lines_relation->lastNew ?>,
            emptyline:new String(<?php echo CJSON::encode($this->renderPartial('payPeriodLine_tr', array('id' => 'idRep', 'model' => $model, 'form' => $form, 'listEmp' => $listEmp), true)); ?>)
        };
        $('#payPeriodLine').tabularInput(settings);
    };
    var checkName = function (self) {
        var n = self.id.split('_')['1'];
        var emp_id = $('#Payperioddetail_' + n + '_emp_id').val();
        if (emp_id == '') {
            alert('Bạn chưa chọn nhân viên!!!')
        }
    };
    var checkDate = function (self) {
        var n = self.id.split('_')['1'];
        var date = $('#Payperioddetail_' + n + '_date').val();
        if (date == '') {
            alert('Bạn chưa nhập ngày!!!')
        }
    };
    $('.form').submit(function () {
        if ($('#Payperioddetail_n1_date').val() == '') {
            alert('Nhập ít nhất một hàng!!!');
            return false;
        }
    });
</script>