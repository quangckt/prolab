<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_id')); ?>:</b>
	<?php echo CHtml::encode($data->emp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_in')); ?>:</b>
	<?php echo CHtml::encode($data->time_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_out')); ?>:</b>
	<?php echo CHtml::encode($data->time_out); ?>
	<br />


</div>