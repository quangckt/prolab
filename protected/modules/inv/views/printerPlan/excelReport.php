<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      datefrom		</th>
 		<th width="80px">
		      dateto		</th>
 		<th width="80px">
		      inv_printer_id		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->datefrom; ?>
		</td>
       		<td>
			<?php echo $row->dateto; ?>
		</td>
       		<td>
			<?php echo $row->inv_printer_id; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

