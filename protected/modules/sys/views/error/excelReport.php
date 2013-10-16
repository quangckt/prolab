<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      subject		</th>
 		<th width="80px">
		      errorArea		</th>
 		<th width="80px">
		      content		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->subject; ?>
		</td>
       		<td>
			<?php echo $row->errorArea; ?>
		</td>
       		<td>
			<?php echo $row->content; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

