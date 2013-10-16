<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'product-type-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>

<?php
    if($model->hasErrors())
    Yii::app()->user->setFlash('error', $form->errorSummary($model ,'Thông báo lỗi!!!', null,array('class'=>'')));
?>


 	<fieldset>
	<?php echo $form->textFieldRow($model,'id',array('class'=>'span','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span','maxlength'=>255)); ?>

    <?php echo $form->textFieldRow($model,'parent',array('class'=>'span','maxlength'=>255)); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
            'icon'=>'ok white',
			'label'=>$model->isNewRecord ? 'Lưu và Tạo mới' : 'Lưu',
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