<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      date		</th>
 		<th width="80px">
		      emp_id		</th>
 		<th width="80px">
		      time_in		</th>
 		<th width="80px">
		      time_out		</th>
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
			<?php echo $row->emp_id; ?>
		</td>
       		<td>
			<?php echo $row->time_in; ?>
		</td>
       		<td>
			<?php echo $row->time_out; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

