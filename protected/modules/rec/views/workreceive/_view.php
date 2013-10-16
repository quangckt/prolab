<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id2')); ?>:</b>
	<?php echo CHtml::encode($data->user_id2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datereceive')); ?>:</b>
	<?php echo CHtml::encode($data->datereceive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datedeliver')); ?>:</b>
	<?php echo CHtml::encode($data->datedeliver); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('godeliver')); ?>:</b>
	<?php echo CHtml::encode($data->godeliver); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('receiveonline')); ?>:</b>
	<?php echo CHtml::encode($data->receiveonline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VAT')); ?>:</b>
	<?php echo CHtml::encode($data->VAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comp_id')); ?>:</b>
	<?php echo CHtml::encode($data->cus_id); ?>
	<br />

	*/ ?>

</div>