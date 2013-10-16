<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-paramsalary-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'basic',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'amountOfRice',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'rateIndirecSal',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'productSal',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'totalBonusDirecSal',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'totalBonusIndirectSal',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'addIndirectSal',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'reserFundSal',array('class'=>'span5','maxlength'=>19)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-paramsalary-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>