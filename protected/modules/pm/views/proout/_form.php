<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'proout-form',
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
        		
 

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'dateout',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'numout',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'note',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->textFieldRow($model,'user1',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user2',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'existbegin',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'used',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'existend',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'pm_print_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pm_printplan_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'product_item_id',array('class'=>'span5')); ?>


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