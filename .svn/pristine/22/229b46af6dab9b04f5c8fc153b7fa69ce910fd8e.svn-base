<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'category-form',
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
	<?php echo $form->textFieldRow($model,'name',array('class'=>'span','maxlength'=>255)); ?>
    
    <?php echo $form->textFieldRow($model,'index',array('class'=>'span','maxlength'=>255)); ?>
	

	<?php echo $form->hiddenField($model,'create_uid',array('class'=>'span')); ?>

	<?php echo $form->hiddenField($model,'create_date',array('class'=>'span')); ?>

	<?php echo $form->hiddenField($model,'update_uid',array('class'=>'span')); ?>

	<?php echo $form->hiddenField($model,'update_date',array('class'=>'span')); ?>

	<?php echo $form->dropDownListRow($model,'parent_id',CHtml::listData(Category::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 nhóm ...','class'=>'span')); ?>

    <div class="control-group">
    </div>
    
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