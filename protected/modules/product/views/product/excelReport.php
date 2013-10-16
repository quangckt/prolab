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
		      create_uid		</th>
 		<th width="80px">
		      create_date		</th>
 		<th width="80px">
		      update_uid		</th>
 		<th width="80px">
		      update_date		</th>
 		<th width="80px">
		      description		</th>
 		<th width="80px">
		      costmethod		</th>
 		<th width="80px">
		      class		</th>
 		<th width="80px">
		      category_id		</th>
 		<th width="80px">
		      type_id		</th>
 		<th width="80px">
		      po_uom_id		</th>
 		<th width="80px">
		      uom_id		</th>
 		<th width="80px">
		      sale_uom_id		</th>
 		<th width="80px">
		      work_uom_id		</th>
 		<th width="80px">
		      length		</th>
 		<th width="80px">
		      width		</th>
 		<th width="80px">
		      hegth		</th>
 		<th width="80px">
		      thickness		</th>
 		<th width="80px">
		      note		</th>
 		<th width="80px">
		      minqtystock		</th>
 		<th width="80px">
		      qtyinstock		</th>
 		<th width="80px">
		      default_wh_id		</th>
 		<th width="80px">
		      lastcost		</th>
 		<th width="80px">
		      lastpodate		</th>
 		<th width="80px">
		      avgcost		</th>
 		<th width="80px">
		      stdcost		</th>
 		<th width="80px">
		      qtysale		</th>
 		<th width="80px">
		      qtypo		</th>
 		<th width="80px">
		      active		</th>
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
			<?php echo $row->create_uid; ?>
		</td>
       		<td>
			<?php echo $row->create_date; ?>
		</td>
       		<td>
			<?php echo $row->update_uid; ?>
		</td>
       		<td>
			<?php echo $row->update_date; ?>
		</td>
       		<td>
			<?php echo $row->description; ?>
		</td>
       		<td>
			<?php echo $row->costmethod; ?>
		</td>
       		<td>
			<?php echo $row->class; ?>
		</td>
       		<td>
			<?php echo $row->category_id; ?>
		</td>
       		<td>
			<?php echo $row->type_id; ?>
		</td>
       		<td>
			<?php echo $row->po_uom_id; ?>
		</td>
       		<td>
			<?php echo $row->uom_id; ?>
		</td>
       		<td>
			<?php echo $row->sale_uom_id; ?>
		</td>
       		<td>
			<?php echo $row->work_uom_id; ?>
		</td>
       		<td>
			<?php echo $row->length; ?>
		</td>
       		<td>
			<?php echo $row->width; ?>
		</td>
       		<td>
			<?php echo $row->hegth; ?>
		</td>
       		<td>
			<?php echo $row->thickness; ?>
		</td>
       		<td>
			<?php echo $row->note; ?>
		</td>
       		<td>
			<?php echo $row->minqtystock; ?>
		</td>
       		<td>
			<?php echo $row->qtyinstock; ?>
		</td>
       		<td>
			<?php echo $row->default_wh_id; ?>
		</td>
       		<td>
			<?php echo $row->lastcost; ?>
		</td>
       		<td>
			<?php echo $row->lastpodate; ?>
		</td>
       		<td>
			<?php echo $row->avgcost; ?>
		</td>
       		<td>
			<?php echo $row->stdcost; ?>
		</td>
       		<td>
			<?php echo $row->qtysale; ?>
		</td>
       		<td>
			<?php echo $row->qtypo; ?>
		</td>
       		<td>
			<?php echo $row->active; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

