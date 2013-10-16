<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      name		</th>
 		<th width="80px">
		      op		</th>
 		<th width="80px">
		      val		</th>
 		<th width="80px">
		      rate		</th>
 		<th width="80px">
		      type		</th>
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
			<?php echo $row->op; ?>
		</td>
       		<td>
			<?php echo $row->val; ?>
		</td>
       		<td>
			<?php echo $row->rate; ?>
		</td>
       		<td>
			<?php echo $row->type; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

