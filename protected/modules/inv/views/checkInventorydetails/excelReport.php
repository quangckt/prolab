<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      qty		</th>
 		<th width="80px">
		      check_inventory_id		</th>
 		<th width="80px">
		      product_id		</th>
 		<th width="80px">
		      last_update		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->qty; ?>
		</td>
       		<td>
			<?php echo $row->check_inventory_id; ?>
		</td>
       		<td>
			<?php echo $row->product_id; ?>
		</td>
       		<td>
			<?php echo $row->last_update; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

