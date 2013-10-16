<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      emp_id		</th>
 		<th width="80px">
		      type_relation		</th>
 		<th width="80px">
		      fullname		</th>
 		<th width="80px">
		      birthday		</th>
 		<th width="80px">
		      weddingday		</th>
 		<th width="80px">
		      numofbrothers		</th>
 		<th width="80px">
		      numofsiters		</th>
 		<th width="80px">
		      notes		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->emp_id; ?>
		</td>
       		<td>
			<?php echo $row->type_relation; ?>
		</td>
       		<td>
			<?php echo $row->fullname; ?>
		</td>
       		<td>
			<?php echo $row->birthday; ?>
		</td>
       		<td>
			<?php echo $row->weddingday; ?>
		</td>
       		<td>
			<?php echo $row->numofbrothers; ?>
		</td>
       		<td>
			<?php echo $row->numofsiters; ?>
		</td>
       		<td>
			<?php echo $row->notes; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

