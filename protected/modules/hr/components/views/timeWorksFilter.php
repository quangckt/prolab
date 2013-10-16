
<?php 
//var_dump($this->owner);
 $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
     'id'=>'search-form',
	'action'=>Yii::app()->createUrl("/reporting/report",array(
        'stimulsoft_client_key'=>$_GET['stimulsoft_client_key'],
        'stimulsoft_report_key'=>$_GET['stimulsoft_report_key'],
        'filter'=>$_GET['filter'],
    )),
	'method'=>'get',
   // 'htmlOptions'=>array('class'=>'well'),
    'type'=>'vertical',
    
));  ?>
<h3 class="title">Điều kiện</h3>
    <?php echo $form->labelEx($model,'fdate',array('class'=>' ')); ?>
<?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model,
    'value'=>$model->fdate,
    'attribute'=>'fdate',
    'language' => 'vi',
    'options'=>array(
    'dateFormat'=>'dd-mm-yy',
    ),
    'htmlOptions'=>array('class'=>'span','z-index'=>100 ),
));
?>
     <?php echo $form->labelEx($model,'tdate',array('class'=>' ')); ?>
    <?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model,
    'value'=>$model->tdate,
    'attribute'=>'tdate',
    'language' => 'vi',
    'options'=>array(
    'dateFormat'=>'dd-mm-yy',
    ),
    'htmlOptions'=>array('class'=>'span','z-index'=>101 ),
));
?>

 <?php echo $form->dropDownListRow($model,'dept_id',CHtml::listData(Department::model()->findAll(),'id','name'),array('prompt'=>'Tất cả','class'=>'span')); ?>       
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Xem')); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'botton', 'icon'=>'folder-close white', 'label'=>'Ðóng','htmlOptions'=>array('onClick'=>'window.close()'))); ?>
  <?php $this->endWidget(); ?>