<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'capitalIncrease-form',
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
                <?php echo $form->labelEx($model, 'date', array('class' => '')); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->date),
                'attribute' => 'date',
                'language' => 'vi',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                ),
                'htmlOptions' => array('class' => 'span datepicker', 'id' => 'dateIC'),
            ));?>
            </div>
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'code', array('class' => 'span')); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'name', array('class' => 'span')); ?>
            </div>
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'amt', array('class' => 'span isnum', 'maxlength' => 20)); ?>
            </div>
        </div>
        <div class="row-fluid">
            <?php echo $form->textAreaRow($model, 'note', array('class' => 'span', 'maxlength' => 255)); ?>
        </div>
        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
            'htmlOptions' => array(
                'onclick' => 'js:{$("#modal0").find("a.close").trigger("click");}',
            ),
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