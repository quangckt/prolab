<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-product-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>

<fieldset class="well">
<div class="row-fluid"> 
    <div class="span4">
        <?php echo $form->textFieldRow($model,'name',array('class'=>'span','maxlength'=>255)); ?>
    </div><div class="span3">
        <?php echo $form->textFieldRow($model,'code',array('class'=>'span','maxlength'=>20)); ?>
    </div><div class="span2" >
        <?php echo $form->labelEx($model,'active',array('class'=>' ')); ?>
       <?php echo $form->checkBox($model,'active',array('class'=>'')); ?>
    </div>
</div>

<div class="row-fluid">
    <div class="span3">
        <?php echo $form->dropDownListRow($model,'category_id',CHtml::listData(Category::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 nhóm ...','class'=>'span')); ?>
    </div><div class="span3 ">    
        <?php echo $form->dropDownListRow($model,'type_id',CHtml::listData(ProductType::model()->findAll(),'id','getIdAndName'), array('prompt'=>'Chọn 1 loại ...','class'=>'span')); ?>
    </div><div class="span3 ">    
        <?php echo $form->dropDownListRow($model,'class',Lookup::items('productClass'), array('prompt'=>'Chọn 1 loại ...','class'=>'span')); ?>
    </div><div class="span3">    
        <?php echo $form->dropDownListRow($model,'default_wh_id',CHtml::listData(Warehouse::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 kho ...','class'=>'span'));?>     
     </div>
</div>


<div class="row-fluid">
    <div class="span3 ">
        <?php echo $form->dropDownListRow($model,'uom_id',CHtml::listData(Uom::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 đvt ...','class'=>'span')); ?>
    </div><div class="span3 ">    
        <?php echo $form->dropDownListRow($model,'sale_uom_id',CHtml::listData(Uom::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 đvt ...','class'=>'span'));?>
    </div><div class="span3 ">    
        <?php echo $form->dropDownListRow($model,'po_uom_id',CHtml::listData(Uom::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 đvt ...','class'=>'span'));?>
    </div><div class="span3 ">    
        <?php echo $form->dropDownListRow($model,'work_uom_id',CHtml::listData(Uom::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 đvt ...','class'=>'span'));?>
    </div>
</div>


<div class="row-fluid">
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>
</div>    
</fieldset>
<?php $this->endWidget(); ?>
   <script>
	$(".btnreset").click(function(){
		$(":input","#search-product-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>