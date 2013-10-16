<div class="form well">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'general-timeinout-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'vertical',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
 
<div class="row-fluid">
    <div class="span3">
        <?php echo $form->textFieldRow($model,'name',array('class'=>'span','maxlength'=>255)); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model,'date',array('class'=>' ')); ?>
            <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->date),
                'attribute'=>'date',
                'language' => 'vi',
                'options'=>array(
                'dateFormat'=>'dd-mm-yy',
                ),
                'htmlOptions'=>array('class'=>'span' ),
            ));?>
    </div>
    <div class="span3">
        <?php echo $form->dropDownListRow($model,'status',array(0=>'Mở',1=>'Đóng'),array('class'=>'span')) ;?>
    </div>
    <div class="span3">
        <label> <?php echo $form->labelEx($model,'create_uid')?> </label>
<span class="span uneditable-input"> <?php echo CHtml::encode($model->getCreateName());  ?></span>
    </div>
</div>
<?php $this->renderPartial('_stipulateTimeInout',array('model'=>$model,'lines'=>$lines,'form'=>$form)) ;?>
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
<?php $d= new StipulateTimeinout;$d->general_timeinout_id=$model->id ;?>
</div>
<script>
Prolab.behaviors.tabularInput=function(){
        var settings ={
        lastline:<?php echo $lines->lastNew ?>,
        emptyline:new String(<?php echo CJSON::encode($this->renderPartial('_stipulateTimeInout_tr', array('id' => 'idRep', 'model' => $d, 'form' => $form), true)); ?>)
        } 
      $('#stipulate_inout').tabularInput(settings);
}      
</script>