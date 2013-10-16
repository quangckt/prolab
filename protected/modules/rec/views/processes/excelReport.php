<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      code		</th>
 		<th width="80px">
		      distribute		</th>
 		<th width="80px">
		      scan		</th>
 		<th width="80px">
		      process		</th>
 		<th width="80px">
		      printImage		</th>
 		<th width="80px">
		      productGC		</th>
 		<th width="80px">
		      printPayment		</th>
 		<th width="80px">
		      deliverStails		</th>
 		<th width="80px">
		      deliverCustomer		</th>
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
			<?php echo $row->distribute; ?>
		</td>
       		<td>
			<?php echo $row->scan; ?>
		</td>
       		<td>
			<?php echo $row->process; ?>
		</td>
       		<td>
			<?php echo $row->printImage; ?>
		</td>
       		<td>
			<?php echo $row->productGC; ?>
		</td>
       		<td>
			<?php echo $row->printPayment; ?>
		</td>
       		<td>
			<?php echo $row->deliverStails; ?>
		</td>
       		<td>
			<?php echo $row->deliverCustomer; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

