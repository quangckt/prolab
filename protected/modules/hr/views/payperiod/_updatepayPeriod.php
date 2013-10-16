<?php  $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'search-payPeriod-detail-form',
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
));
?>
<div class="row-fluid">
    <?php
    if ($model->hasErrors()) {
        Yii::app()->user->setFlash('error', $form->errorsummary(array($model), 'Thông báo lỗi!!!', null, array('class' => '')));
    } ?>
    <div class="span2">
        <input type="hidden" id="checkPressButton" name="checkPressButton"/>
        <?php echo $form->labelEx($model, 'date', array('class' => ' ')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model' => $model,
        'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->date),
        'attribute' => 'date',
        'language' => 'vi',
        'options' => array(
            'dateFormat' => 'dd-mm-yy',
        ),
        'htmlOptions' => array('class' => 'span datepicker', 'id' => 'updatePayPeriodDate'),
    ));?>
    </div>
    <div class="span2">
        <?php echo $form->textFieldRow($model, 'rateloan', array('class' => 'span isnum', 'maxlength' => 19)); ?>
    </div>
    <div class="span2">
        <?php echo $form->textFieldRow($model, 'name', array('class' => 'span', 'maxlength' => 255)); ?>
    </div>
    <div class="span2">
        <label>&nbsp;</label>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'icon' => 'share white', 'label' => 'Tính lãi', 'htmlOptions' => array('id' => 'preview'))); ?>
    </div>
</div>
<?php $this->endWidget(); ?>