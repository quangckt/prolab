<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'warehouse-form',
	'enableAjaxValidation'=>false,
     'method'=>'post',
	'type'=>'horizontal',
    'focus'=>array($model,'name'),
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>

<?php
    if($model->hasErrors())
    Yii::app()->user->setFlash('error', $form->errorSummary($model ,'Thông báo lỗi!!!', null,array('class'=>'')));
?>

   	<fieldset>
	<?php echo $form->textFieldRow($model,'name',array('class'=>'span','maxlength'=>20)); ?>
     
     <div class="control-group">
    <?php echo $form->labelEx($model,'default_wh_in',array('class'=>'control-label')); ?>
    <div class="controls">
    <?php echo $form->checkBox($model,'default_wh_in',array('class'=>'')); ?>
    </div>  </div>
    
     <div class="control-group">
    <?php echo $form->labelEx($model,'default_wh_out',array('class'=>'control-label')); ?>
    <div class="controls">
    <?php echo $form->checkBox($model,'default_wh_out',array('class'=>'')); ?>
    </div>  </div>
   
    <div class="control-group">
    <?php echo $form->labelEx($model,'active',array('class'=>'control-label')); ?>
    <div class="controls">
    <?php echo $form->checkBox($model,'active',array('class'=>'')); ?>
    </div>
    </div>
    
    <div class="control-group">
    <?php echo $form->labelEx($model,'isM',array('class'=>'control-label')); ?>
    <div class="controls">
    <?php echo $form->checkBox($model,'isM',array('class'=>'')); ?>
    </div>
    </div>
        
	<?php echo $form->hiddenField($model,'branch_id',array('class'=>'span')); ?>
	<?php echo $form->hiddenField($model,'create_uid',array('class'=>'span')); ?>
	<?php echo $form->hiddenField($model,'create_date',array('class'=>'span')); ?>
	<?php echo $form->hiddenField($model,'update_uid',array('class'=>'span')); ?>
	<?php echo $form->hiddenField($model,'update_date',array('class'=>'span')); ?>
    


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Tạo mới' : 'Lưu',
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