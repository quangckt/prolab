<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelName')); ?>:</b>
	<?php echo CHtml::encode($data->modelName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fieldName')); ?>:</b>
	<?php echo CHtml::encode($data->fieldName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attributeLabel')); ?>:</b>
	<?php echo CHtml::encode($data->attributeLabel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('custom')); ?>:</b>
	<?php echo CHtml::encode($data->custom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('required')); ?>:</b>
	<?php echo CHtml::encode($data->required); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('readOnly')); ?>:</b>
	<?php echo CHtml::encode($data->readOnly); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linkType')); ?>:</b>
	<?php echo CHtml::encode($data->linkType); ?>
	<br />

	*/ ?>

</div>