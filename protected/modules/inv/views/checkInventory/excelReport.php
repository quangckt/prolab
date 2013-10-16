<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      num		</th>
 		<th width="80px">
		      date		</th>
 		<th width="80px">
		      wh_id		</th>
 		<th width="80px">
		      user_create		</th>
 		<th width="80px">
		      note		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->num; ?>
		</td>
       		<td>
			<?php echo $row->date; ?>
		</td>
       		<td>
			<?php echo $row->wh_id; ?>
		</td>
       		<td>
			<?php echo $row->user_create; ?>
		</td>
       		<td>
			<?php echo $row->note; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

