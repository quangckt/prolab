<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'transaction-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
));?>
    <fieldset class="well">
        <?php
        if ($model->hasErrors()) {
            Yii::app()->user->setFlash('error', $form->errorsummary(array_merge(array($model)), 'Thông báo lỗi!!!', null, array('class' => '')));
        }
        ?>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->labelEx($model, 'date', array('class' => ' ')); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->date),
                'attribute' => 'date',
                'language' => 'vi',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                ),
                'htmlOptions' => array('class' => 'span datepicker', 'id' => 'dpCb'),
            ));?>
            </div>
            <div class="span6">
                <?php echo $form->dropDownListRow($model, 'emp_id', CHtml::listData(Employee::model()->findAll(), 'id', 'codeFullName'), array('class' => 'span', 'prompt' => 'chọn nhân viên...'))?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'amt', array('valueStock' => $modelShare->valueofstock, 'class' => 'span isnum amtValue', 'maxlength' => 19, 'onChange' => 'js:{
                  var transaction_amt = $("#Transaction_amt").val().replace(/\./g, "");
                  $(".qtyStock").val(transaction_amt / $(".amtValue").attr("valueStock"))
                  }')); ?>
            </div>
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'qty', array('class' => 'span isnum qtyStock ', 'maxlength' => 19, 'readOnly' => true)); ?>
            </div>
        </div>
        <div class="row-fluid">
            <label>Tiền mặt</label>
            <input type="text" name="cash" id="cash" class="span isnum" onchange="
                var transaction_amt = $('#Transaction_amt').val().replace(/\./g, '');
                if (parseInt($('#cash').val().replace(/\./g, '')) > parseInt(transaction_amt)) {
                $('#cash').val('');
                alert('Tiền mặt phải < giá trị nhập');
        }
            "/>
        </div>
        <div class="row-fluid">
            <div class="span12 alert alert-warning"><!--// success, info, warning, error or danger-->
                Giá trị cổ phần còn lại: <strong><?php echo number_format($amtOfStockToSell, 0, ',', '.'); ?></strong>&nbsp;&nbsp;&nbsp;Số
                cổ phần
                còn
                lại: <strong><?php echo number_format($qtyOfStockToSell, 0, ',', '.'); ?></strong>
            </div>
        </div>
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