<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-shop-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>
<div class="row-fluid">
    <div class="span4">
        <?php echo $form->textFieldRow($model,'name',array('class'=>'span','maxlength'=>255)); ?>
    </div>
    <div class="span4">
        <?php echo $form->textFieldRow($model,'address',array('class'=>'span','maxlength'=>255)); ?>
    </div>
    <div class="span4">
        <?php echo $form->textFieldRow($model,'phone',array('class'=>'span','maxlength'=>50)); ?>
    </div>
</div>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-shop-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>
