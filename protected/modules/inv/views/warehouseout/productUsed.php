
<p>Xác định hàng đã sử dụng </p>

<div class="well span4">
<?php 
  class f extends  CFormModel{
       public $fromDate;
       public $toDate;  
  }
  $model= new f;
  
 $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
     'id'=>'productUsed-form',
    'type'=>'vertical',
    )); ?>


<label>Từ ngày</label>
<?php
 $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model,
        'value'=>'',
        'attribute'=>'fromDate',
        'language' => 'vi',
        'options'=>array(
        'dateFormat'=>'dd-mm-yy',
        ),
        'htmlOptions'=>array('class'=>'span','z-index'=>100,'placeholder'=>'Từ ngày' ),
    ));
    ?>
<label>Đến ngày</label>    
 <?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model,
    'value'=>'',
    'attribute'=>'toDate',
    'language' => 'vi',
    'options'=>array(
    'dateFormat'=>'dd-mm-yy',
    ),
    'htmlOptions'=>array('class'=>'span','z-index'=>101,'placeholder'=>'Đến ngày' ),
));
?><?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>' white', 'label'=>'Tính hàng sử dụng ')); ?>
<?php $this->endWidget(); ?>

</div>