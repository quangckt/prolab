<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      profit_id		</th>
 		<th width="80px">
		      emp_id		</th>
 		<th width="80px">
		      amt		</th>
 		<th width="80px">
		      type		</th>
 		<th width="80px">
		      date		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->profit_id; ?>
		</td>
       		<td>
			<?php echo $row->emp_id; ?>
		</td>
       		<td>
			<?php echo $row->amt; ?>
		</td>
       		<td>
			<?php echo $row->type; ?>
		</td>
       		<td>
			<?php echo $row->date; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

