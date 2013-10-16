<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'detailssales-form',
        'enableAjaxValidation' => false,
        'method' => 'post',
        'type' => 'vertical',
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data'
        )
    ));
    ?>
    <?php
    if ($model->hasErrors())
        Yii::app()->user->setFlash('error', $form->errorSummary($model, 'Thông báo lỗi!!!', null, array('class' => '')));
    ?>
    <?php echo $form->textFieldRow($model, 'name', array('class' => 'span', 'maxlength' => 255)); ?>

    <?php echo $form->dropDownListRow($model, 'rec_aggreSale_id', CHtml::listData(Aggregatesales::model()->findAll(), 'id', 'name'), array('class' => 'span')); ?>
    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
        ));
        ?>
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'reset',
            'icon' => 'remove',
            'label' => 'Hủy',
            'htmlOptions' => array(
                'data-dismiss' => 'modal'
            )
        ));
        ?>
    </div>
    <?php $this->endWidget(); ?>
</div>