<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'type'=>'striped',
	'dataProvider'=>Warehousein::model()->search(),
	'template'=>"{items}",
	'columns'=>array(
         array(
        		'name'=>'id',
                'header'=>'số',
        		'value'=>'$data->id',
             ),     
         array(
        		'name'=>'num',
        		'value'=>'$data->num',
        
             ),     
         array(
        		'name'=>'date',
        		'sortable'=>false,
        		'value'=>'$data->date',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
        
         array(
        		'name'=>'status',
        		'sortable'=>false,
        		'value'=>'$data->status',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
         array(
        		'name'=>'create_uid',
        		'sortable'=>false,
        		'value'=>'$data->create_uid',
         		'headerHtmlOptions'=>array('width'=>'80'),
         		'htmlOptions'=>array('width'=>'80'),
        
             ),     
	),
)); ?>

<?php if ($model !== null):?>
<?php $item=$model[0];?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		     <?php  echo $item->getAttributeLabel('num');  ?></th>
 		<th width="80px">
		      date		</th>
 		<th width="80px">
		      description		</th>
 		<th width="80px">
		      status		</th>
 		<th width="80px">
		      create_uid		</th>
 		<th width="80px">
		      create_date		</th>
 		<th width="80px">
		      update_uid		</th>
 		<th width="80px">
		      update_date		</th>
 		<th width="80px">
		      branch_id		</th>
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
			<?php //echo $row->description; ?>
		</td>
       		<td>
			<?php echo $row->status; ?>
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
			<?php echo $row->branch_id; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
