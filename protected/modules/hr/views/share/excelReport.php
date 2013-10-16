<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      valueofstock		</th>
 		<th width="80px">
		      totalassets		</th>
 		<th width="80px">
		      note		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->valueofstock; ?>
		</td>
       		<td>
			<?php echo $row->totalassets; ?>
		</td>
       		<td>
			<?php echo $row->note; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

