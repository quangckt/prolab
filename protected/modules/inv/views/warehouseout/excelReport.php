<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      num		</th>
 		<th width="80px">
		      date		</th>
 		<th width="80px">
		      note		</th>
 		<th width="80px">
		      type		</th>
 		<th width="80px">
		      create_date		</th>
 		<th width="80px">
		      create_uid		</th>
 		<th width="80px">
		      update_date		</th>
 		<th width="80px">
		      update_uid		</th>
 		<th width="80px">
		      status		</th>
 		<th width="80px">
		      branch_id		</th>
 		<th width="80px">
		      amounttotal		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->num; ?>
		</td>
       		<td>
			<?php echo $row->date; ?>
		</td>
       		<td>
			<?php echo $row->note; ?>
		</td>
       		<td>
			<?php echo $row->type; ?>
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
			<?php echo $row->status; ?>
		</td>
       		<td>
			<?php echo $row->branch_id; ?>
		</td>
       		<td>
			<?php echo $row->amounttotal; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

