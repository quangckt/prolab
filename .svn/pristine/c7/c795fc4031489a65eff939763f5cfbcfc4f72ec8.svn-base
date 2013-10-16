
<div class="form well">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'check-inventory-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'vertical',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>
	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
<div class="row-fluid">
    <div class="span3">
         <?php echo $form->labelEx($model,'date',array('class'=>' ')); ?>
            <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->date),
                'attribute'=>'date',
                'language' => 'vi',
                'options'=>array(
                'dateFormat'=>'dd-mm-yy',
                ),
                'htmlOptions'=>array('class'=>'span' ),
            ));?>
    </div>
    <div class="span3">
        <?php echo $form->textFieldRow($model,'num',array('class'=>'span','maxlength'=>255)); ?>
    </div>
    <div class="span3">
        <?php echo $form->dropDownListRow($model,'wh_id',Chtml::listData(Warehouse::model()->findAll(),'id','name'),array('class'=>'span')) ;?>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <label> <?php echo $form->labelEx($model,'create_uid')?> </label>
        <span class="span uneditable-input"> <?php echo CHtml::encode($model->getCreateName());  ?></span>
    </div>
    <div class="span9">
        <?php echo $form->textAreaRow($model,'note',array('class'=>'span','maxlength'=>255,'rows'=>1)); ?>
    </div>
</div>
<div class="check-form" id="check-form">
<?php $this->renderPartial('_check',array(
    'form'=>$form,
    'lines'=>$lines,
 )); ?>
</div>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Tạo' : 'Lưu',
            'htmlOptions'=>array('id'=>'submit','name'=>'submit'),
            
		)); 
        echo ' ';?>

              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Hủy',
		)); ?>
	</div>
</fieldset>

<?php $this->endWidget(); ?>
</div>
<?php
$d= new CheckInventorydetails; $d->check_inventory_id=$model->id;
?>
<script>
    Prolab.behaviors.tabularInput=function(){
       var settings={
        lastline:<?php echo $lines->lastNew ?>,
        emptyline:new String(<?php echo CJSON::encode($this->renderPartial('_checkTr', array('id' => 'idRep', 'model' => $d, 'form' => $form), true)); ?>)
        } 
      $('#checkInventorydetails').tabularInput(settings);  
    };
Prolab.behaviors.productAutoComplete=function(content){
    
    //console.log($('#CheckInventory_wh_id').val());
    
  var options={extpar:'CheckInventory_whout_id'},url='<?php echo Yii::app()->createUrl("product/product/GetItems"); ?>';
  options.showProductInfo=function(obj,opt){
 }
$('.product-autocomplete', content).productAutoComplete(url,options).extPars=81;
}
var seq =<?php echo CJSON::encode(Sequence::item('CheckInventory'))?>;
    $('#CheckInventory_date').change(function () {
        var url="<?php echo Yii::app()->controller->createUrl('GetCountOfMonth') ;?>";
        var pData={date:$(this).val()};
        $.post(url,pData,function(data){
            var rel = eval("("+data+")");
            var num = seq.prefix + $('#CheckInventory_date').val().slice(3, -5) + $('#CheckInventory_date').val().slice(8) + '-'+rel.count;
            $('#CheckInventory_num').val(num);
        })
    });
</script>
