<?php 
 $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
     'id'=>'search-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
    'htmlOptions'=>array('class'=>'well'),
     'type'=>'horizontal1',
    
));  ?>
   <div class="row-fluid">
   <div class="span2">
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
   <div class="span2">
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
?>
   </div>
   
   <div class="span2">
    <?php echo $form->dropDownListRow($model,'category_id',CHtml::listData(Category::model()->findAll(),'id','name'),array('prompt'=>'Tất cả','class'=>'span')); ?>   
   </div>
   
   
  </div> 
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Xem')); ?>

<?php $this->endWidget(); ?>