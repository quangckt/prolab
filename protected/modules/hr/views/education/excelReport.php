<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      emp_id		</th>
 		<th width="80px">
		      study_at		</th>
 		<th width="80px">
		      study_long		</th>
 		<th width="80px">
		      study_field		</th>
 		<th width="80px">
		      levelofedu		</th>
 		<th width="80px">
		      finished_year		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->emp_id; ?>
		</td>
       		<td>
			<?php echo $row->study_at; ?>
		</td>
       		<td>
			<?php echo $row->study_long; ?>
		</td>
       		<td>
			<?php echo $row->study_field; ?>
		</td>
       		<td>
			<?php echo $row->levelofedu; ?>
		</td>
       		<td>
			<?php echo $row->finished_year; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

