
<table width="100%" class="items tabularInput" id="transferline">
<thead>
<tr>
    <th></th>
    <th style="min-width: 250px;"><label>Mã hàng</label></th>
    <th><label style="min-width:60px" class="">ÐVT</label></th>
    <th><label>Số lượng</label></th>
    <th></th>
</tr>
</thead>
<tbody class="lines" >
<?php foreach($lines->items as $id=>$line): ?>
<?php  $this->renderPartial('_transferlineTr',array('form'=>$form,'model'=>$line,'id'=>$id));   ?>
<?php endforeach;?>
</tbody>
<tfoot>
    <tr><td colspan="7"><a href="#" class="add-line"><i  class="icon-plus"></i>Thêm dòng</a></td></tr>
    <tr><td colspan="7"><div style="display: none" class=" product-info alert fade in alert-info "></div></td></tr>
</tfoot>
</table>
