<?php 
 $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
     'id'=>'search-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    'htmlOptions'=>array('class'=>'well'),
    'type'=>'horizontal1',
    
));  ?>
   <div class="row-fluid">
   <div class="span3">
   	<?php //echo $form->dropDownListRow($model,'month', $model->listMonth(), array('class'=>'span','maxlength'=>20)); ?>
    <?php echo $form->labelEx($model,'fdate',array('class'=>' ')); ?>
<?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model,
    'value'=>$model->fdate,
    'attribute'=>'fdate',
    'language' => 'vi',
    'options'=>array(
    'dateFormat'=>'dd-mm-yy',
    ),
    'htmlOptions'=>array('class'=>'span' ),
));
?>

   </div>
   <div class="span3">
	<?php //echo $form->dropDownListRow($model,'year',$model->listYear(),array('class'=>'span')); ?>
     <?php echo $form->labelEx($model,'tdate',array('class'=>' ')); ?>
    <?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model,
    'value'=>$model->tdate,
    'attribute'=>'tdate',
    'language' => 'vi',
    'options'=>array(
    'dateFormat'=>'dd-mm-yy',
    ),
    'htmlOptions'=>array('class'=>'span' ),
));
?>   </div>
   <?php if(isset($isStock)) :?>
   <div class="span3">
    <?php echo $form->dropDownListRow($model,'pid',CHtml::listData(Product::model()->findAll(),'id','getCodeAndName'),array('prompt'=>'Ch?n mã hàng','class'=>'span')); ?>   
   </div>
   <?php endif ?>
   <div class="span3">
    <?php echo $form->dropDownListRow($model,'whid',CHtml::listData(warehouse::model()->findAll(),'id','name'),array('class'=>'span')); ?>   
   </div>
   
   
  </div> 
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Xem')); ?>

<?php $this->endWidget(); ?>