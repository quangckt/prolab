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
		      company		</th>
 		<th width="80px">
		      tel		</th>
 		<th width="80px">
		      phone		</th>
 		<th width="80px">
		      manager		</th>
 		<th width="80px">
		      email		</th>
 		<th width="80px">
		      address		</th>
 		<th width="80px">
		      area		</th>
 		<th width="80px">
		      produce		</th>
 		<th width="80px">
		      otherInfo		</th>
 		<th width="80px">
		      emp_id		</th>
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
			<?php echo $row->company; ?>
		</td>
       		<td>
			<?php echo $row->tel; ?>
		</td>
       		<td>
			<?php echo $row->phone; ?>
		</td>
       		<td>
			<?php echo $row->manager; ?>
		</td>
       		<td>
			<?php echo $row->email; ?>
		</td>
       		<td>
			<?php echo $row->address; ?>
		</td>
       		<td>
			<?php echo $row->area; ?>
		</td>
       		<td>
			<?php echo $row->produce; ?>
		</td>
       		<td>
			<?php echo $row->otherInfo; ?>
		</td>
       		<td>
			<?php echo $row->emp_id; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

