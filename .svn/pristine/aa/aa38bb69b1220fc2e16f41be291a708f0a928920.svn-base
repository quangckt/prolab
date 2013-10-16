<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'shiftdetail-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    //'action'=>Yii::app()->controller->createUrl("create"),
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    )
)); ?>
<fieldset class="well">
<?php
if ($model->hasErrors())
    Yii::app()->user->setFlash('error', $form->errorSummary(array($model), 'Thông báo lỗi!!!', null, array('class' => '')));
?>
<div class="row-fluid">
    <div class="span6">
        <?php echo $form->dropDownListRow($model,'emp_id',CHtml::listData(Employee::model()->findAll('department_id=:department_id',array(':department_id'=>$dept)),'id','codeLastName'),array('class'=>'span ')); ?>            
    </div>
    <div class="span6">
        <?php echo $form->labelEx($model,'date',array('class'=>' ')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model,
        'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->date),
        'attribute'=>'date',
        'language' => 'vi',
        'options'=>array(
        'dateFormat'=>'dd-mm-yy',
        ),
        'htmlOptions'=>array('class'=>'span datepicker','id'=>'ShiftDetail_date' ),
        ));
        ?>
    </div>            
</div>
<div class="row-fluid">
    <div class="span6">
        <?php echo $form->dropDownListRow($model,'shift_id',CHtml::listData(Shift::model()->findAll('shift_plan_id=:shift_plan_id',array(':shift_plan_id'=>$plan)),'id','nameTime'),array('class'=>'span ')); ?>    
    </div>
    <div class="span6">
        <?php echo $form->labelEx($model,'date_correct',array('class'=>' ')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model,
        'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->date_correct),
        'attribute'=>'date_correct',
        'language' => 'vi',
        'options'=>array(
        'dateFormat'=>'dd-mm-yy',
        ),
        'htmlOptions'=>array('class'=>'span datepicker','id'=>'date_correct_1' ),
        ));
        ?>
    </div>
</div>
<?php
$listTime= array();
for($i=6;$i<=23;$i++) {
    $j=0;
    while($j<=55){
        $t=sprintf('%02d:%02d',$i,$j);
        $listTime[$t]=$t;
        $j+=15;
    }
}
?>
<div class="row-fluid">
    <div class="span6">
        <?php echo $form->dropDownListRow($model,'from_correct',$listTime,array('class'=>'span ','prompt'=>'Chọn...')); ?>            
    </div>            
    <div class="span6">
        <?php echo $form->dropDownListRow($model,'to_correct',$listTime,array('prompt'=>'Chọn...','class'=>'span ')); ?>    
    </div>
</div>
<div class="row-fluid">
    <?php echo $form->textAreaRow($model,'note',array('rows'=>3, 'class'=>'span')); ?>
</div>                
<div class="form-actions">
    <input id="ShiftDetail_mode" class="mode" name="ShiftDetail[mode]" type="hidden"/>
    <?php
    if (!$model->isNewRecord) {
        $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'icon' => 'ok white',
        'label' => 'Lưu',
        'htmlOptions'=>array('id'=>'update','value'=>'update','onclick'=>"$('.mode').val('save'); ")
        ));
    } else {
        $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'icon' => 'ok white',
        'label' => 'Tạo',
        ));
    }
    ?>
    <?php
    if (!$model->isNewRecord) {
    $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'type' => 'primary',
    'icon' => 'remove white',
    'label' => 'Xóa',
    'htmlOptions'=>array('id'=>'delete','name'=>'delete','value'=>'delete','onclick'=>"$('.mode').val('del'); ")
    ));
    }
    ?>
<?php
    $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'reset',
    'icon' => 'remove',
    'label' => 'Hủy',
)); ?>
</div>

</fieldset>
<?php $this->endWidget(); ?>
</div>
