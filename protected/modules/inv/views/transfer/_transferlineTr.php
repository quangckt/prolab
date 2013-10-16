<?php if($model->trans_id==null) $model->trans_id=-1;?>
<tr class="line">
<td> <?php echo $form->hiddenField($model,"[$id]trans_id", array('class'=>'')); ?>
<?php echo $form->hiddenField($model,"[$id]product_id", array('class'=>'')); ?>
</td>
<td>
<?php 
$pid="Transferline_".$id."_product_id";
$uom="Transferline_".$id."_uom_id";
echo $form->textField($model,"[$id]description", 
    array('class'=>'span products product-autocomplete',
    'rel_product_id'=>$pid,
    'rel_uom_id'=>$uom,
    )); ?>

</td>
<td>
<?php echo $form->dropDownList($model,"[$id]uom_id",CHtml::listData(Uom::model()->findAll(),'id','name'), 
    array('prompt'=>'Chọn..','class'=>'span uom_std')); ?>
</td>
<td>
<?php echo $form->textField($model,"[$id]qty",
    array('class'=>'span isnum qty','onchange'=>'check(this)')); ?>
</td>
<td>
<a href="#" class="remove-line icon-trash" tabIndex='-1'  rel="tooltip" title="Xóa dòng" ></a>
</td>
</tr>