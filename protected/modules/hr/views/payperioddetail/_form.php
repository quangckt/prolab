<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'payperioddetail-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>
		<legend>
			<p class="note"><span class="required">*</span>không được bỏ trống.</p>
		</legend>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
 

	<?php echo $form->textFieldRow($model,'date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'note',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'amt',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'period',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'payPeriod_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'emp_id',array('class'=>'span5')); ?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Tạo' : 'Lưu',
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Hủy',
		)); ?>
	</div>
</fieldset>

<?php $this->endWidget(); ?>

</div>