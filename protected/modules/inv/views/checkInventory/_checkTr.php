
<?php if($model->check_inventory_id==null) $model->check_inventory_id=-1;?>
<?php
    $model->qty = number_format($model->qty,2,',','.');
?>
<tr class="line"><td style="display: none;width: 0%;">
<?php  echo $form->hiddenField($model,"[$id]check_inventory_id", array('class'=>'')); ?>
<?php  echo $form->hiddenField($model,"[$id]product_id", array('class'=>'')); ?>
</td><td >
<?php 
$pid="CheckInventorydetails_".$id."_product_id";
$uom="CheckInventorydetails_".$id."_uom_id";
echo $form->textField($model,"[$id]description", 
    array('class'=>'span products product-autocomplete',
    'rel_product_id'=>$pid,
    'rel_uom_id'=>$uom,
    )); ?>
</td><td>
<?php 
//$id= isset($model->uom_id)?$model->uom_id:0;

echo $form->dropDownList($model,"[$id]uom_id",CHtml::listData(Uom::model()->findAll(),'id','name'), 
    array('prompt'=>'.......','class'=>'span uom_std')); ?>
</td><td>
<?php echo $form->textField($model,"[$id]qty",array('class'=>'span isnum qty')) ; ?>
</td><td>
<a href="#" class="remove-line icon-trash" tabindex='-1'  rel="tooltip" title="Xóa dòng" ></a>
</td></tr>
