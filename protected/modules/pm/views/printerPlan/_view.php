<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datefrom')); ?>:</b>
	<?php echo CHtml::encode($data->datefrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateto')); ?>:</b>
	<?php echo CHtml::encode($data->dateto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inv_printer_id')); ?>:</b>
	<?php echo CHtml::encode($data->inv_printer_id); ?>
	<br />


</div>