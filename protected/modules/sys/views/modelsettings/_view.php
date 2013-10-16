<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('classname')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->classname),array('view','id'=>$data->classname)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />


</div>