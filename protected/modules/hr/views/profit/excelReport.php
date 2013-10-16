<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      date		</th>
 		<th width="80px">
		      amt		</th>
 		<th width="80px">
		      amtdebit		</th>
 		<th width="80px">
		      note		</th>
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
			<?php echo $row->amt; ?>
		</td>
       		<td>
			<?php echo $row->amtdebit; ?>
		</td>
       		<td>
			<?php echo $row->note; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

