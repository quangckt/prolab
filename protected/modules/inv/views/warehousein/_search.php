<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-warehousein-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


<fieldset class="well">
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
<?php echo $form->labelEx($model,'invdate',array('class'=>' ')); ?>
<?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
'model'=>$model,
'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->date),
'attribute'=>'invdate',
'language' => 'vi',
'options'=>array(
'dateFormat'=>'dd-mm-yy',
),
'htmlOptions'=>array('class'=>'span' ),
));
?>
</div>
<div class="span2"><?php echo $form->textFieldRow($model,'invnum',array('class'=>'span','maxlength'=>50)); ?></div>
<div class="span2"><?php echo $form->dropDownListRow($model,'paymentterm',Warehousein::model()->getPaymentterm(),array('prompt'=>'Chọn..','class'=>'span')); ?></div>
<div class="span2">
<?php echo $form->dropDownListRow($model,'status',$model->getStatus(),array('prompt'=>'Chọn..','class'=>'span')); ?>
</div>
</div>

<div class="row-fluid">
<div class="span3"><?php echo $form->dropDownListRow($model,'supplier_id',CHtml::listData(Partner::model()->findAll("supplier=1"),'id','name'),array('prompt'=>'Chọn nhà cung cấp','class'=>'span')); ?></div>
<div class="span3">
<?php echo $form->dropDownListRow($model,'wh_id',CHtml::listData(Warehouse::model()->findAll(),'id','name'),
    array('prompt'=>'Chọn...','class'=>'span ',)); ?>
</div>
<div class="span6"><?php echo  $form->textAreaRow($model,'note',array('rows'=>1, 'cols'=>50, 'class'=>'span'));?></div>
</div>
</div>
<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>
</fieldset>
<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-warehousein-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>