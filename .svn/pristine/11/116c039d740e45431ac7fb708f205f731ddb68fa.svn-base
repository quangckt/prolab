<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-warehouseout-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>

<div class="well">
<div class="row-fluid">
<div class="span2">
<?php echo $form->labelEx($model,'date',array('class'=>' ')); ?>
<?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
'model'=>$model,
'value'=>$model->date,
'attribute'=>'date',
'language' => 'vi',
'options'=>array(
'dateFormat'=>'dd-mm-yy',
),
'htmlOptions'=>array('class'=>'span' ),
));
?>
</div>

<div class="span2">
<?php echo $form->textFieldRow($model,'num',array('class'=>'span','maxlength'=>50)); ?>
</div>

<div class="span2">
<?php echo $form->dropDownListRow($model,'type_id',CHtml::listData(WarehouseoutType::model()->findAll(),'id','name'),array('prompt'=>'Chọn..','class'=>'span')); ?>
</div>

<div class="span2">
<?php echo $form->dropDownListRow($model,'status',$model->getStatus(),array('prompt'=>'Chọn..','class'=>'span')); ?>
</div>
</div>

<div class="row-fluid">
<div class="span">
    <?php echo  $form->textFieldRow($model,'note',array('rows'=>1, 'cols'=>50, 'class'=>'span'));?></div>
</div>
</div>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-warehouseout-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>