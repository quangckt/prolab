<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-payrollrule-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


    <?php echo $form->dropDownListRow($model,'type',$model->getType(),  array('class'=>'span5','prompt'=>'Chọn...')); ?>
	<?php echo $form->dropDownListRow($model,'op',$model->getOp(),array('class'=>'span5','maxlength'=>255)); ?>
	<?php echo $form->textFieldRow($model,'val',array('class'=>'span5','maxlength'=>19)); ?>
	<?php echo $form->textFieldRow($model,'rate',array('class'=>'span5','maxlength'=>19)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
             $('.search-form').slideUp('fast');
		$(":input","#search-payrollrule-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>