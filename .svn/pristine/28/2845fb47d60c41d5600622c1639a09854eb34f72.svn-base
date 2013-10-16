<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-workreceive-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'code',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user_id2',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'datereceive',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'datedeliver',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'godeliver',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'receiveonline',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'note',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'VAT',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'cus_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-workreceive-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>