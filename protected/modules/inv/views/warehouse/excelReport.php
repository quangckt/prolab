<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      name		</th>
 		<th width="80px">
		      branch_id		</th>
 		<th width="80px">
		      active		</th>
 		<th width="80px">
		      create_uid		</th>
 		<th width="80px">
		      create_date		</th>
 		<th width="80px">
		      update_uid		</th>
 		<th width="80px">
		      update_date		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->name; ?>
		</td>
       		<td>
			<?php echo $row->branch_id; ?>
		</td>
       		<td>
			<?php echo $row->active; ?>
		</td>
       		<td>
			<?php echo $row->create_uid; ?>
		</td>
       		<td>
			<?php echo $row->create_date; ?>
		</td>
       		<td>
			<?php echo $row->update_uid; ?>
		</td>
       		<td>
			<?php echo $row->update_date; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
