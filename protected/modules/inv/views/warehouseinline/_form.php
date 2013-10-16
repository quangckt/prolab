<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'warehouseinline-form',
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
        		
 

	<?php echo $form->textFieldRow($model,'warehousein_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'product_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'qty',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'price',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'discount',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'wh_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'lenght',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'width',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'thickness',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'note',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php //echo $form->textFieldRow($model,'amounttotal',array('class'=>'span5','maxlength'=>19)); ?>

	<?php //echo $form->textFieldRow($model,'amountvat',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_uid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_uid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'uom_id',array('class'=>'span5')); ?>


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