<?php
$oneline= new CheckInventorydetails();
?>
<table width="100%" class="items tabularInput" id="checkInventorydetails">
<thead>
<tr><th style="display: none;width: 0%;">
</th><th>
<label>Mặt hàng</label>
</th><th>
<label>ĐVT </label>
</th><th>
<label>Số lượng </label>
</th>
</tr>
</thead>
<tbody class="lines" >
<?php  foreach($lines->items as $id=>$line): ?>
<?php  $this->renderPartial('_checkTr',array('form'=>$form,'model'=>$line,'id'=>$id));   ?>
<?php  endforeach;?>
</tbody>
<tfoot>
<tr>
<td colspan="4">
<a href="#" class="add-line"><i  class="icon-plus"></i>Thêm dòng</a>
</td>
</tr>
<tr>

<td colspan="6">
    <div style="display: none" class=" product-info alert fade in alert-info "></div>
</td>

</tr>
</tfoot>
</table>
