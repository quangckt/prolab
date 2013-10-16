<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      note		</th>
 		<th width="80px">
		      form1_id		</th>
 		<th width="80px">
		      to1_id		</th>
 		<th width="80px">
		      form2_id		</th>
 		<th width="80px">
		      to2_id		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->note; ?>
		</td>
       		<td>
			<?php echo $row->form1_id; ?>
		</td>
       		<td>
			<?php echo $row->to1_id; ?>
		</td>
       		<td>
			<?php echo $row->form2_id; ?>
		</td>
       		<td>
			<?php echo $row->to2_id; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

