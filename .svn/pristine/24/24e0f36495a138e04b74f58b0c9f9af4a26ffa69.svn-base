<?php
	       $url = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('HrAssets'));         
        //$file = $url . DIRECTORY_SEPARATOR . 'shiftchange.js';
        $file = $url . '/shiftchange.js';
        Yii::app()->clientScript->registerScriptFile($file,CClientScript::POS_BEGIN);
?>

<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'shift-replace-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'vertical',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); 
if(isset($model->plan_id)){
    $plan = ShiftPlan::model()->findByPk($model->plan_id);
    $listEmp = CHtml::listData(Employee::model()->findAll('department_id=:department_id',array(':department_id'=>$plan->department_id)),'id','fullName');  
}else{
    $listEmp = CHtml::listData(Employee::model()->findAll(),'id','fullName');
}
?>
<fieldset>
<div class="well">
	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12',)); ?>
        		
 <div class="row-fluid">
    <div class="span6">
        <?php echo $form->dropDownListRow($model,"old_emp_id",$listEmp,array('prompt'=>'Chọn...','class'=>'span oldemp')); ?>
    </div>
    <div class="span6">
     <?php echo $form->dropDownListRow($model,"new_emp_id",$listEmp,array('prompt'=>'Chọn...','class'=>'span')); ?>
    </div>
 </div>
 
 
 <div class="row-fluid">
      
    <?php
    $from2=array();
    if($model->old_emp_id>0){
	$sql=" select d.* From hr_shift s inner join hr_shift_detail d on s.id=d.shift_id where s.shift_plan_id=:planid and d.emp_id=:empid order by d.date";
    $detail = ShiftDetail::model()->findAllBySql($sql, array(':planid'=>$plan->id, ':empid'=>$model->old_emp_id));
    $from2=CHtml::listData($detail,'id','nameTime');
    }    
     echo $form->dropDownListRow($model,"detail_id",$from2,array('prompt'=>'Chọn...','class'=>'span detailshift ')); ?>
    <?php echo $form->textFieldRow($model,'note',array('class'=>'span','maxlength'=>255)); ?>
 </div>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Tạo' : 'Lưu',
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Hủy',
		)); ?>
	</div>
</div>    
</fieldset>
<?php $this->endWidget(); ?>
</div>
