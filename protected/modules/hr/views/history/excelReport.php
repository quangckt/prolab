<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      emp_id		</th>
 		<th width="80px">
		      position_id		</th>
 		<th width="80px">
		      todate		</th>
 		<th width="80px">
		      fromdate		</th>
 		<th width="80px">
		      shop_id		</th>
 		<th width="80px">
		      department_id		</th>
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
			<?php echo $row->position_id; ?>
		</td>
       		<td>
			<?php echo $row->todate; ?>
		</td>
       		<td>
			<?php echo $row->fromdate; ?>
		</td>
       		<td>
			<?php echo $row->shop_id; ?>
		</td>
       		<td>
			<?php echo $row->department_id; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

