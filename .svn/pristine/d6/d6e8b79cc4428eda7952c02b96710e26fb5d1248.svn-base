<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-fields-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'modelName',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'fieldName',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'attributeLabel',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'modified',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'custom',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'required',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'readOnly',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'linkType',array('class'=>'span5','maxlength'=>250)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-fields-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>