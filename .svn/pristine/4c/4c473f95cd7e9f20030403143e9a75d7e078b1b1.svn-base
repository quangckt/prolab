<?php
	$e = new Employee();
?>
<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'setHistory-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>
    <?php
if($e->hasErrors())
    Yii::app()->user->setFlash('error', $form->errorSummary(array_merge( array($e)) ,'Thông báo lỗi!!!', null,array('class'=>'')));
?>
    <div class="well">
   <div class="row-fluid" >
        <div class="title span"> <h6>Cửa hàng bộ phận cũ</h6></div>
        <div class="row-fluid">
            <div class="span5">
                <?php echo CHtml::encode($model->getAttributeLabel('shop_id').' : '); ?>
                <?php echo (isset($model->shop))?CHtml::encode($model->shop->name):""; ?>          
            </div>
            <div class="span7">
                <?php echo CHtml::encode($model->getAttributeLabel('job_id').' : '); ?>
                <?php echo (isset($model->job))?CHtml::encode($model->job->name):"" ; ?>         
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <?php echo CHtml::encode($model->getAttributeLabel('department_id').' : '); ?>
                <?php echo (isset($model->job))?CHtml::encode($model->department->name):""; ?>        
            </div>
        </div>
</div>

   <div class="row-fluid" >        
        <div class="title span">  <h6>Cửa hàng bộ phận mới</h6> </div>
     <?php echo $form->dropDownListRow($e,'shop_id',CHtml::listData(shop::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span',)); ?>          
     <?php echo $form->dropDownListRow($e,'job_id',CHtml::listData(Job::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span',)); ?>              
     <?php echo $form->dropDownListRow($e,'department_id',CHtml::listData(Department::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span',)); ?>    
     <div class="control-group ">
            <label class="control-label required" for="History_fromdate">
                Ngày chuyển
            <span class="required">*</span>
            </label>
         <div class="controls">           
        <?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'=>$h,
            'value'=>'fromdate',
            'attribute'=>'fromdate',
            'language' => 'vi',
            'options'=>array(
            'dateFormat'=>'dd-mm-yy',
            ),
            'htmlOptions'=>array('class'=>'span datepicker','id'=>'14587' ),
            ));
        ?>
             
        </div>
        </div>
        <div class="control-group ">
            <label class="control-label" for="History_description">Ghi chú</label>
            <div class="controls">
                <?php echo $form->textArea($h,'description',array('class'=>'span','rows'=>3)); ?>
            </div>
        </div>
        
    </div>         

    <div class="form-actions" id="btn_submit_emp">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>'Lưu',
            'htmlOptions'=>array('onclick'=>'js: $(".ui-draggable").find("a.close").trigger("click");'),
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Hủy',
		)); ?>
	</div>
    <?php $this->endWidget(); ?>
</div>
<script>
$(document).ready(function(){ 
    
 console.log(jQuery.datepicker.regional['vi']);    
});
</script> 