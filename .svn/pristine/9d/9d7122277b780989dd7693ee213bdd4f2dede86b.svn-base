<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'saleStock-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>
    <fieldset class="well">
        <?php
        if ($model->hasErrors()) {
            Yii::app()->user->setFlash('error', $form->errorsummary(array($model), 'Thông báo lỗi!!!', null, array('class' => '')));
        } ?>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->dropDownListRow($model, 'emp_id', CHtml::listData($listEmp, 'emp_id', 'fullName'), array('class' => 'span', 'prompt' => 'chọn nhân viên...'))?>
            </div>
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
                'htmlOptions' => array('class' => 'span datepicker', 'id' => 'dateSell'),
            ));?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'qty', array('valueStock' => $share->valueofstock, 'class' => 'span isnum qty', 'onChange' => 'js:{
                    var qty = $(".qty").val().replace(/\./g, "");
                    $(".amt").val(parseInt(qty) * parseInt($(".qty").attr("valueStock")));
                }')) ?>
            </div>
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'amt', array('class' => 'span isnum amt', 'readOnly' => true, 'placeHolder' => 'Nhập số cổ phần ...')) ?>
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