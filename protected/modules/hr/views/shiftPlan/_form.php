<div class="form">
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'shift-plan-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array('enctype' => 'multipart/form-data')));
?>
     	<fieldset>
<?php if ($model->hasErrors())
    Yii::app()->user->setFlash('error', $form->errorSummary(array_merge(array($model)),
        'Thông báo lỗi!!!', null, array('class' => '')));
?>

<div class="row-fluid">
    <div class="span12">
    <?php echo $form->textFieldRow($model, 'name', array('class' => 'span'));?>
    </div>
</div>
<div class="row-fluid">
    <div class="span6">
        <?php echo $form->dropDownListRow($model, "department_id", CHtml::listData(Department::model()->findAll(), 'id', 'name'), array('prompt' => 'Chọn...', 'class' =>'span'));?>
    </div>
    <div class="span6">
        <?php

echo $form->dropDownListRow($model, 'status', array('0' => "Mở", '1' => "Khóa"),
    array('class' => 'span'));

?>
    </div>
</div>
<div class="row-fluid">    
    <div class="span6">
        <?php echo $form->labelEx($model, 'startdate', array('class' => ' ')); ?>
        <?php
    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->startdate),
    'attribute' => 'startdate',
    'language' => 'vi',
    'options' => array('dateFormat' => 'dd-mm-yy', ),
    'htmlOptions' => array('class' => 'span datepicker','id'=>'ShiftPlan_startdate547'),
    ));

?>
    </div>
    <div class="span6">
        <?php

echo $form->labelEx($model, 'enddate', array('class' => ' '));

?>
        <?php

$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->enddate),
    'attribute' => 'enddate',
    'language' => 'vi',
    'options' => array('dateFormat' => 'dd-mm-yy', ),
    'htmlOptions' => array('class' => 'span datepicker','id'=>'ShiftPlan_enddate427'),
    ));

?>
    </div>
</div>
<div class="row-fluid">
    <?php

echo $form->textAreaRow($model, 'note', array('class' => 'span'));

?>
</div>
	<div class="form-actions">
		<?php

$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'type' => 'primary',
    'icon' => 'ok white',
    'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
    ));

?>
              <?php

$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'reset',
    'icon' => 'remove',
    'label' => 'Hủy',
    ));

?>
	</div>
</fieldset>

<?php

$this->endWidget();

?>

</div>