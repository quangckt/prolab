<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('basic')); ?>:</b>
	<?php echo CHtml::encode($data->basic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amountOfRice')); ?>:</b>
	<?php echo CHtml::encode($data->amountOfRice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rateIndirecSal')); ?>:</b>
	<?php echo CHtml::encode($data->rateIndirecSal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('productSal')); ?>:</b>
	<?php echo CHtml::encode($data->productSal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalBonusDirecSal')); ?>:</b>
	<?php echo CHtml::encode($data->totalBonusDirecSal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalBonusIndirectSal')); ?>:</b>
	<?php echo CHtml::encode($data->totalBonusIndirectSal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('addIndirectSal')); ?>:</b>
	<?php echo CHtml::encode($data->addIndirectSal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserFundSal')); ?>:</b>
	<?php echo CHtml::encode($data->reserFundSal); ?>
	<br />

	*/ ?>

</div>