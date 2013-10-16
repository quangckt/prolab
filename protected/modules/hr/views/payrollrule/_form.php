<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'payrollrule-form',
        'enableAjaxValidation' => false,
        'method' => 'post',
        'type' => 'horizontal',
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data'
        )
            ));


    $model->val = number_format($model->val, 1, ',', '.');
    $model->rate = number_format($model->rate, 1, ',', '.');
    ?>
    <fieldset>
        <?php
        if ($model->hasErrors())
            Yii::app()->user->setFlash('error', $form->errorSummary($model), 'Thông báo lỗi!!!', null, array('class' => ''));
        ?>

        <?php echo $form->dropDownListRow($model, 'type', $model->getType(), array('class' => 'span5')); ?>
        <?php echo $form->textFieldRow($model, 'name', array('class' => 'span5', 'maxlength' => 255)); ?>
        <?php echo $form->dropDownListRow($model, 'op', $model->getOp(), array('class' => 'span5', 'maxlength' => 255)); ?>
        <?php echo $form->textFieldRow($model, 'val', array('class' => 'span5', 'maxlength' => 19)); ?>
        <?php echo $form->textFieldRow($model, 'rate', array('class' => 'span5', 'maxlength' => 19)); ?>

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
                    'onclick' => 'js:{$(".modal").find("a.close").trigger("click");}',
                ),
            ));
            ?>
        </div>
    </fieldset>

    <?php $this->endWidget(); ?>

</div>