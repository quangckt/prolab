<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'review-working-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'vertical',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>
<fieldset>
<div class="row-fluid">
    <div class="span2">
        <?php // echo $form->textFieldRow($model,'emp_id',array('class'=>'span')); ?>
         <?php echo $form->select2Row($model, 'emp_id', array('asDropDownList' => true, 
            'data' =>CHtml::listData(Employee::model()->findAll(),'id','codeLastName'),
            'options' => array(
            'placeholder' => 'Chọn ...',
            'width' => '100%',
            'tokenSeparators' => array(',', ' ')
            )));?>
    </div>
    <div class="span2">
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
        <?php echo $form->dropDownListRow($model,'shift_details_id',array(),array('prompt'=>'Chọn...','class'=>'span')) ;?>
    </div>
    <div class="span3">
        <?php echo $form->dropDownListRow($model,'status_working_id',CHtml::listData(StatusTimekeeping::model()->findAll(),'id','note'),array('prompt'=>'Chọn...','class'=>'span')) ;?>
    </div>
    <div class="span2">
        <label> <?php echo $form->labelEx($model,'create_uid')?> </label>
 <span class="span uneditable-input"> <?php echo CHtml::encode($model->getCreateName());  ?></span>
    </div>
</div> 
<div class="row-fluid">
    <?php echo $form->textFieldRow($model,'note',array('class'=>'span','maxlength'=>255)); ?>
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
<script>
	$('#ReviewWorking_date').change(function(){
		var emp_id = $('#ReviewWorking_emp_id').val();
        var date = $('#ReviewWorking_date').val();
        var url="<?php echo Yii::app()->controller->createUrl('GetShiftDetails') ;?>";
        var pData={empid:emp_id,datecheck:date};
        $.post(url,pData,function(data){
            var result = eval("("+data+")");
            if(result!=false){ 
                var a=$('<option></option>').val(result.id).html(result.shift);
                $('#ReviewWorking_shift_details_id').append(a);
            }
            return;
        }); 
		
	});
</script>