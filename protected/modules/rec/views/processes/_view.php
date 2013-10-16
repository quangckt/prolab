<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distribute')); ?>:</b>
	<?php echo CHtml::encode($data->distribute); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scan')); ?>:</b>
	<?php echo CHtml::encode($data->scan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('process')); ?>:</b>
	<?php echo CHtml::encode($data->process); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('printImage')); ?>:</b>
	<?php echo CHtml::encode($data->printImage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productGC')); ?>:</b>
	<?php echo CHtml::encode($data->productGC); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('printPayment')); ?>:</b>
	<?php echo CHtml::encode($data->printPayment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deliverStails')); ?>:</b>
	<?php echo CHtml::encode($data->deliverStails); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deliverCustomer')); ?>:</b>
	<?php echo CHtml::encode($data->deliverCustomer); ?>
	<br />

	*/ ?>

</div>