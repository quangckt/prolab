<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id'=>'search-product-type-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    'htmlOptions'=>array('class'=>'well  ')
));  ?>

<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>Tìm loại vật tư</h3>
</div>

<div class="modal-body">
	<?php echo $form->textFieldRow($model,'id',array('class'=>'span','maxlength'=>20)); ?>
	<?php echo $form->textFieldRow($model,'name',array('class'=>'span','maxlength'=>255)); ?>
    <?php echo $form->textFieldRow($model,'parent',array('class'=>'span','maxlength'=>255)); ?>
</div>

<div class="form-actions modal-footer">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
         <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-product-type-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>