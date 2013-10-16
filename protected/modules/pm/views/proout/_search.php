<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-proout-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'dateout',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'numout',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'note',array('class'=>'span5','maxlength'=>500)); ?>

	<?php echo $form->textFieldRow($model,'user1',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user2',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'existbegin',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'used',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'existend',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'pm_print_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pm_printplan_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'product_item_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-proout-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>