
<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
'id'=>'warehousein-form',
'enableAjaxValidation'=>false,
'method'=>'post',
//'type'=>'horizontal',
//'focus'=>array($model,'date'),
'htmlOptions'=>array(
'enctype'=>'multipart/form-data'
)
)); ?>
<fieldset class="well">
<?php
if($model->hasErrors() || $lines->hasErrors)
    Yii::app()->user->setFlash('error', $form->errorSummary(array_merge( array($model),$lines->items) ,'Thông báo lỗi!!!', null,array('class'=>'')));
?>
<div class="well">
<div class="row-fluid">
<div class="span2">
<?php echo $form->labelEx($model,'date',array('class'=>' ')); ?>
<?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model,
    'value'=>$model->date,
    'attribute'=>'date',
    'language' => 'vi',
    'options'=>array(
    'dateFormat'=>'dd-mm-yy',
    ),
    'htmlOptions'=>array('class'=>'span' ),
));
?>
</div>

<div class="span2">
<?php echo $form->textFieldRow($model,'num',array('class'=>'span','maxlength'=>50)); ?>
</div>

<div class="span2">
<?php echo $form->labelEx($model,'invdate',array('class'=>' ')); ?>
<?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model,
    'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->date),
    'attribute'=>'invdate',
    'language' => 'vi',
    'options'=>array(
    'dateFormat'=>'dd-mm-yy',
    ),
    'htmlOptions'=>array('class'=>'span' ),
));
?>
</div>
<div class="span2"><?php echo $form->textFieldRow($model,'invnum',array('class'=>'span','maxlength'=>50)); ?></div>
<div class="span2"><?php echo $form->dropDownListRow($model,'paymentterm',Warehousein::model()->getPaymentterm(),array('class'=>'span',)); ?></div>
<div class="span2">
<?php echo $form->uneditableRow($model,'displayStatus',array('class'=>'span')); ?>
</div>
</div>

<div class="row-fluid">
<div class="span3">
<?php echo $form->dropDownListRow($model,'supplier_id',CHtml::listData(Partner::model()->findAll("supplier=1"),'id','name'),
    array('prompt'=>'Chọn...','class'=>'span ajaxupdate listPartner','update'=>'listPartner')); ?>
</div>    
<div class="span3">
<?php echo $form->dropDownListRow($model,'wh_id',CHtml::listData(Warehouse::model()->findAll(),'id','name'),
    array('class'=>'span ajaxupdate listWarehouse','update'=>'listWarehouse')); ?>
</div>
<div class="span4"><?php echo  $form->textAreaRow($model,'note',array('rows'=>1, 'cols'=>50, 'class'=>'span'));?></div>
<div class="span2">
<label> <?php echo $form->labelEx($model,'create_uid')?> </label>
 <span class="span uneditable-input"> <?php echo CHtml::encode($model->getCreateName());  ?></span>
</div>
</div>
</div>

<div class="well">
<div class='row-fluid'>
<?php echo $this->renderPartial('_warehouseinline', array('form'=>$form,'model'=>$model,'lines'=>$lines),true,false);?>
</div>
</div>

<div class="form-actions">
<?php $this->widget('bootstrap.widgets.TbButton', array(
'buttonType'=>'submit',
'type'=>'primary', 'icon'=>'ok white',
'label'=>$model->isNewRecord ? 'Tạo' : 'Lưu',
));
echo ' ';
 ?>


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
$d= new Warehouseinline; $d->warehousein_id=$model->id;
?>

<script type="text/javascript">
var seq =<?php echo CJSON::encode(Sequence::item('Warehousein'))?>;
    $('#Warehousein_date').change(function () {
        var url="<?php echo Yii::app()->controller->createUrl('GetCountOfMonth') ;?>";
        var pData={date:$(this).val()};
        $.post(url,pData,function(data){
            var rel = eval("("+data+")");
            var num = seq.prefix + $('#Warehousein_date').val().slice(3, -5) + $('#Warehousein_date').val().slice(8) + '-'+rel.count;
            $('#Warehousein_num').val(num);
        })
    });
Prolab.behaviors.tabularInput=function(){
       var settings={
        lastline:<?php echo $lines->lastNew ?>,
        emptyline:new String(<?php echo CJSON::encode($this->renderPartial('_warehouseinlineTr', array('id' => 'idRep', 'model' => $d, 'form' => $form), true)); ?>)
        } 
      $('#warehouseinline').tabularInput(settings);  
    };   
Prolab.behaviors.productAutoComplete=function(content){
  var options={},url='<?php echo Yii::app()->createUrl("product/product/GetItems"); ?>';
  options.showProductInfo=function(obj,opt){
    check(obj,opt);
    $('form .product-info').html(obj.code + '- '+ obj.name + ' / Giá mua gần nhất: '+ obj.lastcost+' / nhập ngày: '+ obj.lastpodate).show();
 }
$('.product-autocomplete', content).productAutoComplete(url,options).extPars=$('#CheckInventory_whout_id').val();
}
var kt=[];
function check(obj,opt){
    var n = opt.updatePrice.split('_')[1];
    kt[n]={'obj':obj};
}
function ratePrice(self){
    var n = self.id.split('_')[1];
    if($('#Warehouseinline_'+n+'_description').val()==''&&$(self).val()>0){
        alert('Chưa chọn mặt hàng !');
        return;
    }
    var object =kt[n];
    obj =object.obj;
    if(obj.lastcost==0){
        return;    
    }else{
        var k='';
        var price = $(self).val().replace(/\./g,'').replace(',','.');
        var lastCost = obj.lastcost.replace(/\./g,'').replace(',','.');
        if(price-lastCost>0){
            var present = ((price- lastCost)/lastCost)*100;
            k=' / tỷ lệ giá : tăng '+present.toFixed(2)+' %';
        }
        if(price-lastCost<0){
            var present = (( lastCost-price)/lastCost)*100;
            k=' / tỷ lệ giá : giảm '+present.toFixed(2)+' %';
        }
        $('form .product-info').html(obj.code + '- '+ obj.name + ' / Giá mua gần nhất: '+ obj.lastcost+' / nhập ngày: '+ obj.lastpodate+k).show();    
    } 
}
 
</script>
