<?php

$oneline= new Warehouseinline();


?>
<table width="100%" class="items tabularInput" id="warehouseinline">
<thead>
<tr><th >
</th><th style="min-width: 250px;">
<label>Mặt hàng</label>
</th><th>
<label style="min-width:60px" class="">ĐVT</label>
</th><th>
<label>Số lượng</label>
</th><th>
<label>Đơn giá</label>
</th><th>
<label>Thành tiền</label>
</th><th>
</th></tr>
</thead>
<tbody class="lines" >
<?php foreach($lines->items as $id=>$line): ?>
<?php  $this->renderPartial('_warehouseinlineTr',array('form'=>$form,'model'=>$line,'id'=>$id));   ?>
<?php endforeach;?>
</tbody>
<tfoot>
<tr>
<td colspan="4">
<a href="#" class=" btlink add-line"><i  class="icon-plus"></i>Thêm dòng</a>
</td>
<td>
<?php echo $form->label($model,'amounttotal',array('class'=>'span isnum ')); ?>
</td>
<td>
<?php echo $form->textField($model,'amounttotal',array('class'=>'span isnum grandtotal ','readonly'=>'readonly','tabIndex'=>-1)); ?>
</td>
</tr>
<tr>

<td colspan="6">
    <div style="display: none" class=" product-info alert fade in alert-info "></div>
</td>

</tr>
</tfoot>
</table>
