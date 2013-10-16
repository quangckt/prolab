<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'createValueOfStock-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical', //horizontal/vertical
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>
    <fieldset class="well">
        <?php
        if ($model->hasErrors()) {
            Yii::app()->user->setFlash('error', $form->errorsummary(array($model), 'Thông báo lỗi!!!', null, array('class' => '')));
        }
        ?>
        <?php echo $form->textFieldRow($model, 'totalassets', array('class' => 'span isnum', 'maxlength' => 10, 'readOnly' => true)); ?>
        <?php echo $form->textFieldRow($model, 'valueofstock', array('class' => 'span isnum', 'maxlength' => 20)); ?>
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
