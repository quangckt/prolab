<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-shift-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>
<div class="well">
<div class="row-fluid">
<div class="span3">
<?php echo $form->textFieldRow($model,'code',array('class'=>'span')); ?>
</div>
<div class="span3">
<?php echo $form->textFieldRow($model,'name',array('class'=>'span')); ?>
</div>
<div class="span3">
<?php echo $form->labelEx($model,'starttime',array('class'=>' ')); ?>
             <?php
             $model->starttime= substr($model->starttime, 0, -3);
             $this->widget('application.extensions.jui_timepicker.JTimePicker', array(
                'model'=>$model,
                 'attribute'=>'starttime',
                 // additional javascript options for the date picker plugin
                 'options'=>array(
                      'hourText'=>'Giờ',
                      'minuteText'=>'Phút',
                     'showPeriod'=>false,
                     ),
                 'htmlOptions'=>array('class'=>'span timepicker'),
             ));
            ?>
</div>
<div class="span3">
  <?php 
           $model->endtime= substr($model->endtime, 0, -3);
             
             echo $form->labelEx($model,'endtime',array('class'=>' ')); ?>
             <?php
             $this->widget('application.extensions.jui_timepicker.JTimePicker', array(
                'model'=>$model,
                 'attribute'=>'endtime',
                 // additional javascript options for the date picker plugin
                 'options'=>array(
                     'showPeriod'=>false,
                     ),
                 'htmlOptions'=>array('class'=>'span'),
             ));
            ?>
</div>
</div>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>
</div>
<?php $this->endWidget(); ?>
   <script>
	$(".btnreset").click(function(){
		$(":input","#search-shift-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>