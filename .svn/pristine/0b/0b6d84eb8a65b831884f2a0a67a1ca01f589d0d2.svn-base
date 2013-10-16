<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'salary-form',
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
        		
 

	<?php echo $form->textFieldRow($model,'monthYear',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'emp_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'salGrade',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'allowanJob',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'minSal',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'directSal',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'borrow',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'backPay',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'advance',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'advanPay',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'otherRec',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'sociInsuran',array('class'=>'span5','maxlength'=>19)); ?>


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