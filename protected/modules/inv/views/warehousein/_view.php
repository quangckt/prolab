
<table width="100%">
<tr>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('num')); ?>:</b>
	<?php echo CHtml::encode($data->num); ?>
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('invdate')); ?>:</b>
	<?php echo CHtml::encode($data->invdate); ?>
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('invnum')); ?>:</b>
	<?php echo CHtml::encode($data->invnum); ?>
</td>
</tr>
<tr>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentterm')); ?>:</b>
        <?php $p=$data->getPaymentterm(); ?>
	<?php echo CHtml::encode($p[$data->paymentterm]); ?>
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('displayStatus')); ?>:</b>
	<?php echo CHtml::encode($data->displayStatus); ?>
</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->supplier->name); ?>

</td>
<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('wh_id')); ?>:</b>
	<?php echo CHtml::encode($data->wh->name); ?>
</td>
</tr>
<tr>
<td colspan="4">
	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
</td>
</tr>
</table>

<table width="100%" border="1" cellspacing="1" cellpadding="2">
<thead>
    <tr><th>
    <label>Mã hàng</label>
    </th><th>
    <label>Tên hàng</label>
    </th><th>
    <label class="">ĐVT</label>
    </th><th>
    <label>Số lượng</label>
    </th><th>
    <label>Đơn giá</label>
    </th><th>
    <label>Thành tiền</label>
    </th></tr>
</thead>
<tbody class="lines" >
<?php foreach($data->warehouseinlines as $id=>$line): ?>
<tr class="line">
<td>
	<?php echo CHtml::encode($line->product->code); ?>
</td><td>
    <?php echo CHtml::encode($line->description); ?>
</td><td>
<?php echo CHtml::encode($line->uom->name); ?>
</td>
<td>
<?php echo CHtml::encode($line->qty); ?>
</td><td>
<?php echo CHtml::encode($line->price); ?>
</td><td>
<?php echo CHtml::encode($line->subtotal); ?>
</td>
</td></tr>
<?php endforeach;?>
</tbody>
<tfoot>
    <tr>
    <td colspan="4">
    
    </td>
    <td>
    <b><?php echo CHtml::encode($data->getAttributeLabel('amounttotal')); ?>:</b>
    </td>
    <td >
     <?php echo CHtml::encode($data->amounttotal); ?>
    </td>
    </tr>
</tfoot>
</table>




