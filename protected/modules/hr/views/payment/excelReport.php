<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      date		</th>
 		<th width="80px">
		      type		</th>
 		<th width="80px">
		      emp_id		</th>
 		<th width="80px">
		      batch_id		</th>
 		<th width="80px">
		      note		</th>
 		<th width="80px">
		      amt		</th>
 		<th width="80px">
		      tran_id		</th>
 		<th width="80px">
		      period_id		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->date; ?>
		</td>
       		<td>
			<?php echo $row->type; ?>
		</td>
       		<td>
			<?php echo $row->emp_id; ?>
		</td>
       		<td>
			<?php echo $row->batch_id; ?>
		</td>
       		<td>
			<?php echo $row->note; ?>
		</td>
       		<td>
			<?php echo $row->amt; ?>
		</td>
       		<td>
			<?php echo $row->tran_id; ?>
		</td>
       		<td>
			<?php echo $row->period_id; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
