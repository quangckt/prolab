<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateout')); ?>:</b>
	<?php echo CHtml::encode($data->dateout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numout')); ?>:</b>
	<?php echo CHtml::encode($data->numout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user1')); ?>:</b>
	<?php echo CHtml::encode($data->user1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user2')); ?>:</b>
	<?php echo CHtml::encode($data->user2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('existbegin')); ?>:</b>
	<?php echo CHtml::encode($data->existbegin); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('used')); ?>:</b>
	<?php echo CHtml::encode($data->used); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('existend')); ?>:</b>
	<?php echo CHtml::encode($data->existend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pm_print_id')); ?>:</b>
	<?php echo CHtml::encode($data->pm_print_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pm_printplan_id')); ?>:</b>
	<?php echo CHtml::encode($data->pm_printplan_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_item_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_item_id); ?>
	<br />

	*/ ?>

</div>