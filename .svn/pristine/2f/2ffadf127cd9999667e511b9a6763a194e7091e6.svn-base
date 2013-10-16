
<div class="container border-radius" >
<div id="login-box" >
<div class="well">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'login-form',
        'type' => 'vertical',
        'htmlOptions' => array('class' => 'form'),
        'enableClientValidation' => true,
        'clientOptions' => array(
        'validateOnSubmit' => true,
        ),
          ));
    ?>


    <?php echo $form->textFieldRow($model, 'username', array('class' => ' span10','prepend'=>'<i class="icon-user"></i>')) ?>
    <?php echo $form->passwordFieldRow($model, 'password', array('class' => ' span10','prepend'=>'<i class="icon-lock"></i>')) ?>
    <?php echo $form->checkBoxRow($model, 'rememberMe'); ?>

    <?php echo CHtml::htmlButton('<i class="icon-ok icon-white"></i> Đăng nhập', array('class' => 'btn btn-primary', 'type' => 'submit')); ?>

    <?php $this->endWidget(); ?>
    </div>
</div><!-- form -->
</div>
