
<?php if($model->warehousein_id==null) $model->warehousein_id=-1;?>
<tr class="line"><td>
<?php echo $form->hiddenField($model,"[$id]warehousein_id", array('class'=>'')); ?>
<?php echo $form->hiddenField($model,"[$id]product_id", array('class'=>'')); ?>
</td><td >
<?php 
$pid="Warehouseinline_".$id."_product_id";
$uom="Warehouseinline_".$id."_uom_id";
$price="Warehouseinline_".$id."_price";
echo $form->textField($model,"[$id]description", 
    array('class'=>'span products product-autocomplete',
    'rel_product_id'=>$pid,
    'rel_uom_id'=>$uom,
    'rel_price'=>$price,
    )); ?>

</td><td>
<?php echo $form->dropDownList($model,"[$id]uom_id",CHtml::listData(Uom::model()->findAll(),'id','name'), 
    array('prompt'=>'.......','class'=>'span uom_std')); ?>
</td><td>
<?php echo $form->textField($model,"[$id]qty",
    array('class'=>'span isnum qty',)); ?>
</td><td >
<?php echo $form->textField($model,"[$id]price",  array('class'=>'span isnum price','onblur'=>'ratePrice(this)')); ?>
</td><td>
<?php echo $form->textField($model,"[$id]subtotal",
    array('class'=>'span isnum subtotal','readonly'=>'readonly','tabIndex'=>-1,)); ?>
</td><td>
<a href="#" class="remove-line icon-trash" tabIndex='-1'  rel="tooltip" title="Xóa dòng" ></a>
</td></tr>
