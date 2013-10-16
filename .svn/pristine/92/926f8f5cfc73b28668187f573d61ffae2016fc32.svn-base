<div class='form'>
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'user-form',
        'enableAjaxValidation' => false,
        'type' => 'vertical',
        'htmlOptions' => array(
        )
    ));
    ?>
    <?php echo $form->errorSummary($model); ?>
    <div class='row-fluid'>
        <div class='span5'>
            <?php echo $form->dropDownListRow($model, 'emp_id', CHtml::listData(Employee::model()->findAll('status=:status', array(':status' => 0)), 'id', 'fullName'), array('class' => 'span', 'maxlength' => 20)); ?>
        </div>
        <div class='span3'>
            <?php echo $form->textFieldRow($model, 'username', array('class' => 'span', 'maxlength' => 20)); ?>
        </div>
        <div class='span4'>
            <?php echo $form->passwordFieldRow($model, 'password', array('class' => 'span', 'maxlength' => 20)); ?>
        </div>
    </div>
    <div class='row-fluid'>
        <div class='span6'>
            <?php echo $form->dropDownListRow($model, 'superuser', User::itemAlias('AdminStatus'), array('class' => 'span', 'maxlength' => 20)); ?>    
        </div>
        <div class='span6'>
            <?php echo $form->dropDownListRow($model, 'status', User::itemAlias('UserStatus'), array('class' => 'span', 'maxlength' => 20)); ?>
        </div>
    </div>
    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => $model->isNewRecord ? UserModule::t('Tạo mới') : UserModule::t('Lưu'),
        ));
        ?>
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'reset',
            'label' => UserModule::t('reset'),
            'icon' => 'remove',
        ))
        ?>
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'button',
            'label' => UserModule::t('Hủy'),
            'icon' => 'remove',
            'htmlOptions' => array(
                'data-dismiss' => 'modal',
            )
        ))
        ?>
    </div>
    <?php $this->endWidget(); ?>
</div>