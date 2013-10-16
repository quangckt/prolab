<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-shift-change-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    
));
if(isset($model->plan_id)){
    $plan = ShiftPlan::model()->findByPk($model->plan_id);
    $listEmp = CHtml::listData(Employee::model()->findAll('department_id=:department_id',array(':department_id'=>$plan->department_id)),'id','fullName');  
}else{
    $listEmp = CHtml::listData(Employee::model()->findAll(),'id','fullName');
} 
 ?>
<div class="row-fluid">
    <div class="span3">
        <?php echo $form->dropDownListRow($model,"emp_from",$listEmp,array('prompt'=>'Chọn...','class'=>'span')); ?>
    </div>
    <div class="span3">
        <?php  echo $form->dropDownListRow($model,"emp_to",$listEmp,array('prompt'=>'Chọn...','class'=>'span')); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model,'date_from',array('class'=>' ')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'=>$model,
            'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->date_from),
            'attribute'=>'date_from',
            'language' => 'vi',
            'options'=>array(
            'dateFormat'=>'dd-mm-yy',
            ),
            'htmlOptions'=>array('class'=>'span' ),
        ));
        ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model,'date_to',array('class'=>' ')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'=>$model,
            'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->date_to),
            'attribute'=>'date_to',
            'language' => 'vi',
            'options'=>array(
            'dateFormat'=>'dd-mm-yy',
            ),
            'htmlOptions'=>array('class'=>'span' ),
        ));
        ?>
    </div>
</div>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-shift-change-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>