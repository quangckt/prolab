<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emp_id')); ?>:</b>
	<?php echo CHtml::encode($data->emp_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('study_at')); ?>:</b>
	<?php echo CHtml::encode($data->study_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('study_long')); ?>:</b>
	<?php echo CHtml::encode($data->study_long); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('study_field')); ?>:</b>
	<?php echo CHtml::encode($data->study_field); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('levelofedu')); ?>:</b>
	<?php echo CHtml::encode($data->levelofedu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finished_year')); ?>:</b>
	<?php echo CHtml::encode($data->finished_year); ?>
	<br />


</div>