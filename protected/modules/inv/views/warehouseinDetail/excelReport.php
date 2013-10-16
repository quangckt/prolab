<?php if ($model !== null):?>
<?php $item=$model[0];?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      <?php echo $item->getAttributeLabel('num'); ?> </th>
 		<th width="80px">
		      <?php echo $item->getAttributeLabel('date'); ?> </th>
 		<th width="80px">
		      <?php echo $item->getAttributeLabel('note'); ?> </th>
 		<th width="80px">
		      <?php echo $item->getAttributeLabel('invdate'); ?> </th>
 		<th width="80px">
		      <?php echo $item->getAttributeLabel('invnum'); ?> </th>
 		<th width="80px">
		      <?php echo $item->getAttributeLabel('supplier_id'); ?> </th>        
 		<th width="80px">
		      <?php echo $item->getAttributeLabel('paymentterm'); ?> </th>        
 		<th width="80px">
		      paid		</th>
 		<th width="80px">
		      create_date		</th>
 		<th width="80px">
		      create_uid		</th>
 		<th width="80px">
		      update_date		</th>
 		<th width="80px">
		      update_uid		</th>
 		<th width="80px">
		      status		</th>
 		<th width="80px">
		      branch_id		</th>
 		<th width="80px">
		      amounttotal		</th>
 		<th width="80px">
		      amounttax		</th>
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
			<?php echo $row->note; ?>
		</td>
       		<td>
			<?php echo $row->invdate; ?>
		</td>
       		<td>
			<?php echo $row->invnum; ?>
		</td>
       		<td>
			<?php echo $row->supplier_id; ?>
		</td>
       		<td>
			<?php echo $row->paymentterm; ?>
		</td>
       		<td>
			<?php echo $row->paid; ?>
		</td>
       		<td>
			<?php echo $row->create_date; ?>
		</td>
       		<td>
			<?php echo $row->create_uid; ?>
		</td>
       		<td>
			<?php echo $row->update_date; ?>
		</td>
       		<td>
			<?php echo $row->update_uid; ?>
		</td>
       		<td>
			<?php echo $row->status; ?>
		</td>
       		<td>
			<?php echo $row->branch_id; ?>
		</td>
       		<td>
			<?php echo $row->amounttotal; ?>
		</td>
       		<td>
			<?php echo $row->amounttax; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

