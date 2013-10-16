<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      code		</th>
 		<th width="80px">
		      name		</th>
 		<th width="80px">
		      date		</th>
 		<th width="80px">
		      qty		</th>
 		<th width="80px">
		      amt		</th>
 		<th width="80px">
		      note		</th>
 		<th width="80px">
		      dateloan		</th>
 		<th width="80px">
		      monthloan		</th>
 		<th width="80px">
		      type		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->code; ?>
		</td>
       		<td>
			<?php echo $row->name; ?>
		</td>
       		<td>
			<?php echo $row->date; ?>
		</td>
       		<td>
			<?php echo $row->qty; ?>
		</td>
       		<td>
			<?php echo $row->amt; ?>
		</td>
       		<td>
			<?php echo $row->note; ?>
		</td>
       		<td>
			<?php echo $row->dateloan; ?>
		</td>
       		<td>
			<?php echo $row->monthloan; ?>
		</td>
       		<td>
			<?php echo $row->type; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

