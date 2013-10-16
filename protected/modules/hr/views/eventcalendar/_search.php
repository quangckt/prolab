<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-eventcalendar-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'assignedTo',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'calendarId',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'visibility',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'associationId',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'associationType',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'associationName',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'startDate',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'dueDate',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'showTime',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'priority',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'createDate',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'complete',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'reminder',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'completedBy',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'completeDate',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'lastUpdated',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'updatedBy',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'workflowId',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'stageNumber',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'allDay',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'color',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textAreaRow($model,'syncGoogleCalendarEventId',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-eventcalendar-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>