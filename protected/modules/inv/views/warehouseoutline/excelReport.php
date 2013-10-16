<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      warehouseout_id		</th>
 		<th width="80px">
		      product_id		</th>
 		<th width="80px">
		      qty		</th>
 		<th width="80px">
		      description		</th>
 		<th width="80px">
		      price		</th>
 		<th width="80px">
		      wh_id		</th>
 		<th width="80px">
		      note		</th>
 		<th width="80px">
		      subtotal		</th>
 		<th width="80px">
		      subvat		</th>
 		<th width="80px">
		      create_date		</th>
 		<th width="80px">
		      create_uid		</th>
 		<th width="80px">
		      update_date		</th>
 		<th width="80px">
		      update_uid		</th>
 		<th width="80px">
		      uom_id		</th>
 		<th width="80px">
		      factor		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->warehouseout_id; ?>
		</td>
       		<td>
			<?php echo $row->product_id; ?>
		</td>
       		<td>
			<?php echo $row->qty; ?>
		</td>
       		<td>
			<?php echo $row->description; ?>
		</td>
       		<td>
			<?php echo $row->price; ?>
		</td>
       		<td>
			<?php echo $row->wh_id; ?>
		</td>
       		<td>
			<?php echo $row->note; ?>
		</td>
       		<td>
			<?php echo $row->subtotal; ?>
		</td>
       		<td>
			<?php echo $row->subvat; ?>
		</td>
       		<td>
			<?php echo $row->create_date; ?>
		</td>
       		<td>
			<?php echo $row->create_uid; ?>
		</td>
       		<td>
			<?php echo $row->update_date; ?>
		</td>
       		<td>
			<?php echo $row->update_uid; ?>
		</td>
       		<td>
			<?php echo $row->uom_id; ?>
		</td>
       		<td>
			<?php echo $row->factor; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

