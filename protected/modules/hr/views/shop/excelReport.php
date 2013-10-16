<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      name		</th>
 		<th width="80px">
		      address		</th>
 		<th width="80px">
		      phone		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->name; ?>
		</td>
       		<td>
			<?php echo $row->address; ?>
		</td>
       		<td>
			<?php echo $row->phone; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

