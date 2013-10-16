<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'warehouseout-type-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
 

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'note',array('class'=>'span5','maxlength'=>255)); ?>
        
	<?php 
    $options=array();
    foreach(explode(",", $model->wh_req) as $v){
       $options[$v]= array('selected'=>'selected');
    } 
    echo $form->dropDownListRow($model,'wh_req',CHtml::listData(Warehouse::model()->findAll(),'id','name'),array('multiple'=>true,'class'=>'span5','options'=>$options)); 
   ?>
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