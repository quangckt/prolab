<?php
	class dateRange extends CFormModel{
	 public $startdate;
     public $enddate;
     public $selectedItems;
     public function attributeLabels(){
       return array(
       'startdate'=>'Từ ngày',
       'enddate'=>'Đến ngày',
       'selectedItems'=>' ',
       ); 
     }  
	}
 $model= new dateRange();   
    
?>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'datePlan-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'horizontal',
    'action'=>Yii::app()->controller->createUrl("copyDataShift"),
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>
<div class="row-fluid">
    <div class="span1">
        <?php echo $form->labelEx($model, 'startdate', array('class' => ' '));?>
    </div>
    <div class="span11">
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->startdate),
            'attribute' => 'startdate',
            'language' => 'vi',
            'options' => array('dateFormat' => 'dd-mm-yy', ),
            'htmlOptions' => array('class' => 'span5 datepicker','id'=>'ShiftPlan_startdate1'),
            ));
        ?>
    </div>
</div>
<div class="row-fluid">.</div>
<div class="row-fluid">
    <div class="span1">
        <?php echo $form->labelEx($model, 'enddate', array('class' => ' '));?>
    </div>
    <div class="span11">
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->enddate),
            'attribute' => 'enddate',
            'language' => 'vi',
            'options' => array('dateFormat' => 'dd-mm-yy', ),
            'htmlOptions' => array('class' => 'span5 datepicker','id'=>'ShiftPlan_enddate1'),
            ));
        ?>
    </div>
</div>
<?php
	echo $form->hiddenField($model,'selectedItems',array('class'=>'listSeletedItems'));
?>
<div class="form-actions" id="btn_submit_emp">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
            'icon'=>'ok white',  
			'label'=>'Lưu',
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
            'icon'=>'remove',  
			'label'=>'Hủy',
		)); ?>
</div>


<?php $this->endWidget(); ?>
