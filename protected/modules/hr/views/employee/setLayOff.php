
<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'setLayOff-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'vertical',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>
<div class="well">
    <div class="row-fluid">
            <?php echo $form->labelEx($model,'date_layoff',array('class'=>' ')); ?>
            <?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'=>$model,
            'value'=>'date_layoff',
            'attribute'=>'date_layoff',
            'language' => 'vi',
            'options'=>array(
            'dateFormat'=>'dd-mm-yy',
            ),
            'htmlOptions'=>array('class'=>'span datepicker', 'id'=>'date_layoffaaa' ),
            ));
        ?>
    </div>
    <div class="row-fluid">
          <?php echo $form->textAreaRow($model,'description_layoff',array('rows'=>3, 'class'=>'span'));?>
    </div>
             
</div>
    <div class="form-actions" id="btn_submit_emp">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>'Lưu',
            'htmlOptions'=>array('class'=>'delete ', 'id'=>'delete','onclick'=>'js: $(".ui-draggable").find("a.close").trigger("click");' ),
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Hủy',
		)); ?>
	</div>
    <?php $this->endWidget(); ?>
</div>

<script>
$(document).ready(function(){ 
    
 console.log(jQuery.datepicker.regional['vi']);    
});
$('.delete').click(function(){
    alert('abc');
});
</script> 