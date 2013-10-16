<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      emp_id		</th>
 		<th width="80px">
		      valueSeniority		</th>
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
			<?php echo $row->valueSeniority; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

