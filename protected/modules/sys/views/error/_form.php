<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'error-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>

    <?php if ($model->hasErrors()) {
    Yii::app()->user->setFlash('error', $form->errorSummary($model, 'Thông báo lỗi!!!', null, array('class' => '')));
} ?>

    <?php echo CHtml::hiddenField('Error[user_id]', Yii::app()->user->id, array('class' => '')); ?>
    <?php echo CHtml::hiddenField('Error[emp_id]', User::model()->find('id=:id', array(':id' => Yii::app()->user->id))->emp_id, array('class' => '')); ?>
    <?php echo CHtml::hiddenField('Error[dateError]', time(), array('class' => '')); ?>

    <?php echo $form->textFieldRow($model, 'subject', array('class' => 'span6', 'maxlength' => 250)); ?>

    <?php echo $form->textFieldRow($model, 'errorArea', array('class' => 'span6', 'maxlength' => 250)); ?>

    <?php echo $form->textAreaRow($model, 'content', array('rows' => 6, 'cols' => 50, 'class' => 'span6')); ?>


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

    <?php $this->endWidget(); ?>

</div>