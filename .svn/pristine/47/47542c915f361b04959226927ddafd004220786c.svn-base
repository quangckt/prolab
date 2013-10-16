<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-transfer-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>

<?php //header ?>
<div class="well">
<div class="row-fluid">
<div class="span3">
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

<div class="span3">
<?php echo $form->textFieldRow($model,'num',array('class'=>'span','maxlength'=>50)); ?>
</div>

<div class="span3">
<?php echo $form->dropDownListRow($model,'status',$model->getStatus(), array('prompt'=>'chọn..','class'=>'span')); ?>
</div>
</div>
<div class="row-fluid">
<div class="span3">
<?php echo $form->dropDownListRow($model,'from_wh_id',CHtml::listData(Warehouse::model()->findAll(),'id','name'),array('prompt'=>'chọn..','class'=>'span')); ?>
</div>
<div class="span3">
<?php echo $form->dropDownListRow($model,'to_wh_id',CHtml::listData(Warehouse::model()->findAll(),'id','name'),array('prompt'=>'chọn..','class'=>'span')); ?>
</div>

<div class="span6"><?php echo  $form->textFieldRow($model,'description',array('class'=>'span'));?></div>
</div>
</div>
<?php //end header ?>


	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-transfer-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>