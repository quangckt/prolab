 <?php
//	$model->factor= number_format($model->factor,5,'.',',');
?>
 
 <tr><td><b>1</b><?php echo $form->hiddenField($model,"[$id]product_id",array('class'=>'span')); ?>
</td><td> <?php echo $form->dropDownList($model,"[$id]uom_id",CHtml::listData(Uom::model()->findAll(),'id','name'), array('prompt'=>'Chọn...','class'=>'span uom-std ')); ?>
</td><td><b>=</b></td><td><?php echo $form->textField($model,"[$id]factor",array('class'=>'span','maxlength'=>10)); ?>
</td><td><?php echo $form->dropDownList($model,"[$id]convert_to_id",CHtml::listData(Uom::model()->findAll(),'id','name'), array('prompt'=>'Chọn...','class'=>'span')); ?>
</td><td>
<a href="#" class=" icon-trash" onclick="tabularInput.deleteRow(this);" rel="tooltip" title="Xóa dòng"></a>
</td></tr>