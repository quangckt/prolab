<div class="form">
    <?php if ($model->scenario === 'update'): ?>
        <!--<h3><?php //echo Rights::getAuthItemTypeName($model->type); ?></h3>-->
    <?php endif; ?>
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'create-form',
        'enableAjaxValidation' => false,
        'type' => 'vertical',
        'htmlOptions' => array(
        )
    ));
    ?>
    <?php //$form = $this->beginWidget('CActiveForm'); ?>
    <?php echo $form->errorSummary($model); ?>
    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('maxlength' => 255, 'class' => 'span')); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>
    <div class="row-fluid">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textField($model, 'description', array('maxlength' => 255, 'class' => 'span')); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>
    <?php if (Rights::module()->enableBizRule === true): ?>
        <div class="row-fluid">
            <?php echo $form->labelEx($model, 'bizRule'); ?>
            <?php echo $form->textField($model, 'bizRule', array('maxlength' => 255, 'class' => 'span')); ?>
            <?php echo $form->error($model, 'bizRule'); ?>
        </div>
    <?php endif; ?>
    <?php if (Rights::module()->enableBizRule === true && Rights::module()->enableBizRuleData): ?>
        <div class="row-fluid">
            <?php echo $form->labelEx($model, 'data'); ?>
            <?php echo $form->textField($model, 'data', array('maxlength' => 255, 'class' => 'span')); ?>
            <?php echo $form->error($model, 'data'); ?>
        </div>
    <?php endif; ?>
    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => UserModule::t('Lưu'),
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