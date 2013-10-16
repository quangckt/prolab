<div class="row-fluid">
<div class="span3">
    <?php echo $form->dropDownListRow($model,'category_id',CHtml::listData(Category::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 nhóm ...','class'=>'span')); ?>
</div><div class="span3 ">    
    <?php echo $form->dropDownListRow($model,'type_id',CHtml::listData(ProductType::model()->findAll(),'id','getIdAndName'), array('prompt'=>'Chọn 1 loại ...','class'=>'span')); ?>
</div><div class="span3 ">    
    <?php echo $form->dropDownListRow($model,'class',Lookup::items('productClass'), array('prompt'=>'Chọn 1 loại ...','class'=>'span')); ?>
</div>
<div class="span3">    
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
<div class="span4 ">    
    <?php echo $form->textFieldRow($model,'length',array('class'=>'span')); ?>
</div><div class="span4 ">    
    <?php echo $form->textFieldRow($model,'width',array('class'=>'span')); ?>
</div><div class="span4 ">    
    <?php echo $form->textFieldRow($model,'thickness',array('class'=>'span'));?>
</div>
</div>



<?php
    Yii::app()->clientScript->registerScript('uom',
    " $('.uom_std').val($('#product_uom_id').val()).attr('readonly','readonly');;
    $('#product_uom_id').change(function(){ 
    $('.uom_std').val($(this).val()).attr('readonly','readonly'); return false;
    }); "   
    );
?>
