	
<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'limit-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
    'type'=>'vaetical',
	'htmlOptions'=>array('enctype'=>'multipart/form-data')
));?> 
<?php
	$url =Yii::app()->controller->createUrl('update',array('id'=>$model->product_id));
?>


<fieldset class="well">
<div class="row-fluid">
       <?php echo $form->textFieldRow($model,'qtyLimit', array('class'=>'span'));?>
</div>    
<div class="row-fluid">
    <div class="form-actions">       
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
            'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Tạo' : 'Lưu',
            'htmlOptions'=>array('onclick'=>'js: $(".ui-draggable").find("a.close").trigger("click");
            $.fn.yiiGridView.update("limit-grid");
            '),
		)); ?>
                
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                'icon'=>'remove',  
			'label'=>'Hủy',
		)); ?>
	</div>
</div>

</fieldset>


<?php $this->endWidget(); ?>
</div>
