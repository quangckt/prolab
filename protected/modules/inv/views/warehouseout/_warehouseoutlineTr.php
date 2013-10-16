<?php if($model->warehouseout_id==null) $model->warehouseout_id=-1;?>
<tr class="line"><td>
<?php echo $form->hiddenField($model,"[$id]warehouseout_id", array('class'=>'')); ?>
<?php echo $form->hiddenField($model,"[$id]product_id", array('class'=>'')); ?>
</td><td >
<?php 
$pid="Warehouseoutline_".$id."_product_id";
$uom="Warehouseoutline_".$id."_uom_id";
$price="Warehouseoutline_".$id."_price";
//$wh="Warehouseoutline_".$id."_wh_id";

echo $form->textField($model,"[$id]description", 
    array('class'=>'span products product-autocomplete',
    'rel_product_id'=>$pid,
    'rel_uom_id'=>$uom,
    'rel_price'=>$price,
  //  'rel_wh_id'=>$wh,
    )); ?>

</td><td >
<?php echo $form->dropDownList($model,"[$id]uom_id",CHtml::listData(Uom::model()->findAll(),'id','name'), 
    array('prompt'=>'Chọn..','class'=>'span uom_std',)); ?>
</td><td>
<?php echo $form->textField($model,"[$id]qty",
    array('class'=>'span isnum qty','onchange'=>'check(this)')); ?>
</td><td >
<?php echo $form->textField($model,"[$id]counter",  array('class'=>'span  counter',)); ?>
</td>
<td>
<a href="#" class="remove-line icon-trash" tabIndex='-1'  rel="tooltip" title="Xóa dòng" ></a>
</td></tr>
