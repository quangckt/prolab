<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      dateout		</th>
 		<th width="80px">
		      numout		</th>
 		<th width="80px">
		      note		</th>
 		<th width="80px">
		      user1		</th>
 		<th width="80px">
		      user2		</th>
 		<th width="80px">
		      existbegin		</th>
 		<th width="80px">
		      used		</th>
 		<th width="80px">
		      existend		</th>
 		<th width="80px">
		      pm_print_id		</th>
 		<th width="80px">
		      pm_printplan_id		</th>
 		<th width="80px">
		      product_item_id		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->dateout; ?>
		</td>
       		<td>
			<?php echo $row->numout; ?>
		</td>
       		<td>
			<?php echo $row->note; ?>
		</td>
       		<td>
			<?php echo $row->user1; ?>
		</td>
       		<td>
			<?php echo $row->user2; ?>
		</td>
       		<td>
			<?php echo $row->existbegin; ?>
		</td>
       		<td>
			<?php echo $row->used; ?>
		</td>
       		<td>
			<?php echo $row->existend; ?>
		</td>
       		<td>
			<?php echo $row->pm_print_id; ?>
		</td>
       		<td>
			<?php echo $row->pm_printplan_id; ?>
		</td>
       		<td>
			<?php echo $row->product_item_id; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

