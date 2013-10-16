<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-employee-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>
<div class="well">
    <div class="row-fluid">
        <div class="span3">
            <?php echo $form->textFieldRow($model,'code',array('class'=>'span')); ?>        
        </div>
        <div class="span3">
           <?php echo $form->textFieldRow($model,'lastname',array('class'=>'span')); ?>       
        </div>
        <div class="span3">
           <?php echo $form->textFieldRow($model,'mobile_phone',array('class'=>'span')); ?>       
        </div>
        <div class="span3">
            <?php echo $form->dropDownListRow($model,'job_id',CHtml::listData(Job::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span')); ?>      
        </div>
                
    </div>
    <div class="row-fluid">
        <div class="span3">
            <?php echo $form->dropDownListRow($model,'department_id',CHtml::listData(Department::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span')); ?>      
        </div>
         <div class="span3">
            <?php echo $form->dropDownListRow($model,'shop_id',CHtml::listData(Shop::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span')); ?>      
        </div>
        <div class="span3">
            <?php echo $form->dropDownListRow($model,'status',array('0'=>"Đang làm việc",'1'=>"Nghỉ việc"),array('prompt'=>'Chọn...','class'=>'span ')); ?>     
        </div>
        <div class="span3">
            <?php echo $form->dropDownListRow($model,'sex',array('0'=>"Nam",'1'=>"Nữ"),array('prompt'=>'Chọn...','class'=>'span')); ?>
        </div>
    </div>
</div>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-employee-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>