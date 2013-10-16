<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      modelName		</th>
 		<th width="80px">
		      fieldName		</th>
 		<th width="80px">
		      attributeLabel		</th>
 		<th width="80px">
		      modified		</th>
 		<th width="80px">
		      custom		</th>
 		<th width="80px">
		      type		</th>
 		<th width="80px">
		      required		</th>
 		<th width="80px">
		      readOnly		</th>
 		<th width="80px">
		      linkType		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->modelName; ?>
		</td>
       		<td>
			<?php echo $row->fieldName; ?>
		</td>
       		<td>
			<?php echo $row->attributeLabel; ?>
		</td>
       		<td>
			<?php echo $row->modified; ?>
		</td>
       		<td>
			<?php echo $row->custom; ?>
		</td>
       		<td>
			<?php echo $row->type; ?>
		</td>
       		<td>
			<?php echo $row->required; ?>
		</td>
       		<td>
			<?php echo $row->readOnly; ?>
		</td>
       		<td>
			<?php echo $row->linkType; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

