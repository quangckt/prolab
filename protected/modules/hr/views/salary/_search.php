<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-salary-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'monthYear',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'emp_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'salGrade',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'allowanJob',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'minSal',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'directSal',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'borrow',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'backPay',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'advance',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'advanPay',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'otherRec',array('class'=>'span5','maxlength'=>19)); ?>

	<?php echo $form->textFieldRow($model,'sociInsuran',array('class'=>'span5','maxlength'=>19)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-salary-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>