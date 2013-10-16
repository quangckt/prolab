<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      code		</th>
 		<th width="80px">
		      name		</th>
 		<th width="80px">
		      tel		</th>
 		<th width="80px">
		      web		</th>
 		<th width="80px">
		      email		</th>
 		<th width="80px">
		      active		</th>
 		<th width="80px">
		      create_date		</th>
 		<th width="80px">
		      create_uid		</th>
 		<th width="80px">
		      update_date		</th>
 		<th width="80px">
		      update_uid		</th>
 		<th width="80px">
		      customer		</th>
 		<th width="80px">
		      supplier		</th>
 		<th width="80px">
		      comment		</th>
 		<th width="80px">
		      branch_id		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->code; ?>
		</td>
       		<td>
			<?php echo $row->name; ?>
		</td>
       		<td>
			<?php echo $row->tel; ?>
		</td>
       		<td>
			<?php echo $row->web; ?>
		</td>
       		<td>
			<?php echo $row->email; ?>
		</td>
       		<td>
			<?php echo $row->active; ?>
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
			<?php echo $row->customer; ?>
		</td>
       		<td>
			<?php echo $row->supplier; ?>
		</td>
       		<td>
			<?php echo $row->comment; ?>
		</td>
       		<td>
			<?php echo $row->branch_id; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

