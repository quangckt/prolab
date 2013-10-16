<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_emp_id')); ?>:</b>
	<?php echo CHtml::encode($data->old_emp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_emp_id')); ?>:</b>
	<?php echo CHtml::encode($data->new_emp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('old_detail_id')); ?>:</b>
	<?php echo CHtml::encode($data->old_detail_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('new_detail_id')); ?>:</b>
	<?php echo CHtml::encode($data->new_detail_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />


</div>