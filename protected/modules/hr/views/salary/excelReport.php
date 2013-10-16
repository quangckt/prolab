<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      monthYear		</th>
 		<th width="80px">
		      emp_id		</th>
 		<th width="80px">
		      salGrade		</th>
 		<th width="80px">
		      allowanJob		</th>
 		<th width="80px">
		      minSal		</th>
 		<th width="80px">
		      directSal		</th>
 		<th width="80px">
		      borrow		</th>
 		<th width="80px">
		      backPay		</th>
 		<th width="80px">
		      advance		</th>
 		<th width="80px">
		      advanPay		</th>
 		<th width="80px">
		      otherRec		</th>
 		<th width="80px">
		      sociInsuran		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->monthYear; ?>
		</td>
       		<td>
			<?php echo $row->emp_id; ?>
		</td>
       		<td>
			<?php echo $row->salGrade; ?>
		</td>
       		<td>
			<?php echo $row->allowanJob; ?>
		</td>
       		<td>
			<?php echo $row->minSal; ?>
		</td>
       		<td>
			<?php echo $row->directSal; ?>
		</td>
       		<td>
			<?php echo $row->borrow; ?>
		</td>
       		<td>
			<?php echo $row->backPay; ?>
		</td>
       		<td>
			<?php echo $row->advance; ?>
		</td>
       		<td>
			<?php echo $row->advanPay; ?>
		</td>
       		<td>
			<?php echo $row->otherRec; ?>
		</td>
       		<td>
			<?php echo $row->sociInsuran; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

