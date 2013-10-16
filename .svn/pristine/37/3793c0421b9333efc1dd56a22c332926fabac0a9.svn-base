<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'fields-form',
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
        		
 

	<?php echo $form->textFieldRow($model,'modelName',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'fieldName',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'attributeLabel',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'modified',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'custom',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'required',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'readOnly',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'linkType',array('class'=>'span5','maxlength'=>250)); ?>


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