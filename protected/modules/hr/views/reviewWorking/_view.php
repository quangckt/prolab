<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_id')); ?>:</b>
	<?php echo CHtml::encode($data->emp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shift_details_id')); ?>:</b>
	<?php echo CHtml::encode($data->shift_details_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_working_id')); ?>:</b>
	<?php echo CHtml::encode($data->status_working_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_uid')); ?>:</b>
	<?php echo CHtml::encode($data->create_uid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_uid')); ?>:</b>
	<?php echo CHtml::encode($data->update_uid); ?>
	<br />

	*/ ?>

</div>