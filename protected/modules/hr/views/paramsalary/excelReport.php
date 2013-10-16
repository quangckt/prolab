<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      basic		</th>
 		<th width="80px">
		      amountOfRice		</th>
 		<th width="80px">
		      rateIndirecSal		</th>
 		<th width="80px">
		      productSal		</th>
 		<th width="80px">
		      totalBonusDirecSal		</th>
 		<th width="80px">
		      totalBonusIndirectSal		</th>
 		<th width="80px">
		      addIndirectSal		</th>
 		<th width="80px">
		      reserFundSal		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->basic; ?>
		</td>
       		<td>
			<?php echo $row->amountOfRice; ?>
		</td>
       		<td>
			<?php echo $row->rateIndirecSal; ?>
		</td>
       		<td>
			<?php echo $row->productSal; ?>
		</td>
       		<td>
			<?php echo $row->totalBonusDirecSal; ?>
		</td>
       		<td>
			<?php echo $row->totalBonusIndirectSal; ?>
		</td>
       		<td>
			<?php echo $row->addIndirectSal; ?>
		</td>
       		<td>
			<?php echo $row->reserFundSal; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

