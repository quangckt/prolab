
<h1 class="title"><i class="icon-con"></i><span>Bảo trì số liệu kho </span></h1>

<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'warehouse-form',
	'enableAjaxValidation'=>false,
     'method'=>'post',
	//'type'=>'horizontal',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data',
    'class'=>' well'
	)
)); ?>


<fieldset>

<?php
    if($model->hasErrors())
	echo $form->errorSummary($model ,'Thông báo lỗi!!!', null,array('class'=>' nomodal'));
?>
<?php echo $form->datepickerRow($model,'fromdate' , array(
        'prepend'=>'<i class="icon-calendar"></i>', 
         'options'=>array(
        'format'=>'dd-mm-yyyy',
        'language'=>'vi'),
        ))  ?>
<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
             'icon'=>'ok white',  
			'label'=>'Xử lý',
		)); ?>
</div>
</fieldset>

<?php $this->endWidget(); ?>

</div>