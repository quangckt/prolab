<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-worklist-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'code',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'product_uom_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rec_waycallprice_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rec_aggregatesale_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rec_detailsale_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rec_grouprevenue_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rec_process_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rec_materiproduct_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'productout',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'materilogical1',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'materilogical2',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'materilogical3',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'notmateri',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'notvalue',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'user_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-worklist-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>