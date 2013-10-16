<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'partner-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'vertical',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>
	<?php //echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span')); ?>
<div class="row-fluid">
    <div class="span6">
        <?php echo $form->textFieldRow($model,'code',array('class'=>'span','maxlength'=>50)); ?>
    </div>
    <div class="span6">
        <?php echo $form->textFieldRow($model,'name',array('class'=>'span','maxlength'=>255)); ?>    
    </div>
</div>
<div class="row-fluid">
    <div class="span4">
        <?php echo $form->textFieldRow($model,'tel',array('class'=>'span','maxlength'=>50)); ?>    
    </div>
    <div class="span4">
        <?php echo $form->textFieldRow($model,'web',array('class'=>'span','maxlength'=>255)); ?>
    </div>
    <div class="span4">
        <?php echo $form->textFieldRow($model,'email',array('class'=>'span','maxlength'=>255)); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span4">
        <?php echo $form->dropDownListRow($model,'active',array('0'=>"Không",'1'=>"Có"),array('class'=>'span')); ?>
    </div>
    <div class="span4">
        <?php echo $form->dropDownListRow($model,'customer',array('0'=>"Không",'1'=>"Có"),array('class'=>'span')); ?>
    </div>
    <div class="span4">
        <?php echo $form->dropDownListRow($model,'supplier',array('0'=>"Không",'1'=>"Có"),array('class'=>'span')); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <?php echo $form->textAreaRow($model,'comment',array('rows'=>2, 'cols'=>50, 'class'=>'span')); ?>
    </div>
</div>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Tạo' : 'Lưu',
            'htmlOptions'=>array('onclick'=>'js: $(".ui-draggable").find("a.close").trigger("click");'),
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