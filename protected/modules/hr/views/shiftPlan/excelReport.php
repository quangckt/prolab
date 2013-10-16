<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      department_id		</th>
 		<th width="80px">
		      startdate		</th>
 		<th width="80px">
		      enddate		</th>
 		<th width="80px">
		      status		</th>
 		<th width="80px">
		      note		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->department_id; ?>
		</td>
       		<td>
			<?php echo $row->startdate; ?>
		</td>
       		<td>
			<?php echo $row->enddate; ?>
		</td>
       		<td>
			<?php echo $row->status; ?>
		</td>
       		<td>
			<?php echo $row->note; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

