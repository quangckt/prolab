<?php
    $uomname='??';
   if(isset($model->uom)) $uomname=$model->uom->name;


$model->length= number_format($model->length,1,',','.');
$model->width= number_format($model->width,2,',','.');
$model->thickness= number_format($model->thickness,3,',','.');

    
?>	
<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
    'type'=>'horizontal1',
	'htmlOptions'=>array('enctype'=>'multipart/form-data')
));?> 

<?php
    if($model->hasErrors())
    Yii::app()->user->setFlash('error', $form->errorSummary($model ,'Thông báo lỗi!!!', null,array('class'=>'')));
?>

<fieldset class="well">
<div class="row-fluid"> 
    <div class="span5">
        <?php echo $form->textFieldRow($model,'name',array('class'=>'span','maxlength'=>255)); ?>
    </div><div class="span3">
        <?php echo $form->textFieldRow($model,'code',array('class'=>'span','maxlength'=>20)); ?>
    </div>
    <div class="span2">
                <?php echo $form->dropDownListRow($model,'uom_id',CHtml::listData(Uom::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 đvt ...','class'=>'span ajaxupdate','update'=>'listUom')); ?>
            </div>
            
    <div class="span2" >
        <?php echo $form->labelEx($model,'active',array('class'=>' ')); ?>
       <?php echo $form->checkBox($model,'active',array('class'=>'')); ?>
    </div>
</div>

<div class="row-fluid">
    <div class="span3">
        <?php echo $form->dropDownListRow($model,'category_id',CHtml::listData(Category::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 nhóm ...','class'=>'span ajaxupdate','update'=>'listCategory')); ?>
    </div><div class="span3 ">    
        <?php echo $form->dropDownListRow($model,'type_id',CHtml::listData(ProductType::model()->findAll(),'id','getIdAndName'), array('prompt'=>'Chọn 1 loại ...','class'=>'span ajaxupdate','update'=>'listProductType')); ?>
    </div><div class="span3 ">    
        <?php echo $form->dropDownListRow($model,'class',Lookup::items('productClass'), array('prompt'=>'Chọn 1 loại ...','class'=>'span')); ?>
    </div><div class="span3">    
        <?php echo $form->dropDownListRow($model,'default_wh_id',CHtml::listData(Warehouse::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 kho ...','class'=>'span ajaxupdate','update'=>'listWarehouse'));?>     
     </div>
</div>

<div class="row-fluid">
    <div class="span3">    
        <?php echo $form->textFieldRow($model,'length',array('class'=>'span')); ?>
    </div><div class="span3">    
        <?php echo $form->textFieldRow($model,'width',array('class'=>'span')); ?>
    </div><div class="span3">    
        <?php echo $form->textFieldRow($model,'thickness',array('class'=>'span'));?>
    </div><div class="span3">    
        <?php echo $form->dropDownListRow($model,'hascounter',array('0'=>'không','1'=>'có'), array('class'=>'span')); ?>
    </div>
</div>

<div class="row-fluid">
    <div class="span6 ">
    <label>Chuyển đổi đơn vị tính</label>
    <div class="well">
         <div class="row-fluid">
         <div class="span12">
         <label>ĐVT mua  =  ĐVT chuẩn</label>
         <div class="span2">
                <?php 
                $model->pouom_radio= number_format($model->pouom_radio,2,',','.');
                echo $form->textField($model,'pouom_radio', array('class'=>'span '));?>
           </div>   
            <div class="span3">
            <?php echo $form->dropDownList($model,'po_uom_id',CHtml::listData(Uom::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 đvt ...','class'=>'span'));?>
            </div> 
             <div class="span1">
              <span>=</span>
             </div>
            <div class="span2"> 
               <?php
               $model->pouom_radio_std= number_format($model->pouom_radio_std,2,',','.'); 
               echo $form->textField($model,'pouom_radio_std', array('class'=>'span '));?>
             </div>
            <div class="span3"> 
               <div class="uom-std"><?php echo $uomname ?></div>
             </div>
         </div>                 
          </div> 
         <div class="row-fluid">
         <div class="span12">
          <label>ĐVT bán  =  ĐVT chuẩn</label>
         <div class="span2">  
               <?php 
               $model->souom_radio= number_format($model->souom_radio,2,',','.');
               echo $form->textField($model,'souom_radio', array('class'=>'span '));?>
              </div>           
            <div class="span3 ">    
                <?php 
                
                echo $form->dropDownList($model,'so_uom_id',CHtml::listData(Uom::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 đvt ...','class'=>'span'));?>
             </div>
               
            <div class="span1">
              <span>=</span>
             </div>
             
              <div class="span2">
               <?php 
                $model->souom_radio_std= number_format($model->souom_radio_std,2,',','.');
               echo $form->textField($model,'souom_radio_std', array('class'=>'span '));?>
            </div>
            <div class="span3 ">  
               <div class="uom-std"><?php echo $uomname ?></div>  
            </div>
          </div>  
      </div>
      <div class="row-fluid">
         <div class="span12">
          <label>ĐVT sản xuất  =  ĐVT chuẩn</label>
         <div class="span2">  
               <?php 
               $model->workuom_radio= number_format($model->workuom_radio,2,',','.');
               echo $form->textField($model,'workuom_radio', array('class'=>'span '));?>
              </div>           
            <div class="span3 ">    
                <?php 
                
                echo $form->dropDownList($model,'work_uom_id',CHtml::listData(Uom::model()->findAll(),'id','name'), array('prompt'=>'Chọn 1 đvt ...','class'=>'span'));?>
             </div>
               
            <div class="span1">
              <span>=</span>
             </div>
             
              <div class="span2">
               <?php 
                $model->workuom_radio_std= number_format($model->workuom_radio_std,2,',','.');
               echo $form->textField($model,'workuom_radio_std', array('class'=>'span '));?>
            </div>
            <div class="span3 ">  
               <div class="uom-std"><?php echo $uomname ?></div>  
            </div>
          </div>  
      </div>
    </div>
   </div> 
    <div class="span6">
    <?php echo$form->textAreaRow($model,'note',array('rows'=>6, 'cols'=>50, 'class'=>'span '));
    ?>
    </div>
</div>
    
<div class="row-fluid">
	<div class="form-actions">

              
            
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
            'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Tạo' : 'Lưu',
            
		)); ?>
                
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                'icon'=>'remove',  
			'label'=>'Hủy',
		)); ?>
	</div>
 
</div>

</fieldset>


<?php $this->endWidget(); ?>
</div>

<script>
    $('#Product_uom_id').change(function(){ 
        $('.uom-std').html($(this).find('option:selected').text()); 
        return false;
    });
    $('#Product_length').change(function(){
        if($('#Product_length').val()=='0'||$('#Product_width').val()=='0,00'){
            return;
        }
        var width =parseFloat($('#Product_width').val().replace(/\./g,'').replace(',','.'));
        var lenght =parseFloat($('#Product_length').val().replace(/\./g,'').replace(',','.'));
        if(isNaN(width)||isNaN(lenght))return;
        $('#Product_workuom_radio').val((width*lenght/100));
        $('#Product_workuom_radio').val($('#Product_workuom_radio').val().replace('.',','));
    });
    $('#Product_width').change(function(){
        if($('#Product_length').val()=='0'||$('#Product_width').val()=='0,00'){
            return;
        }
        var width =parseFloat($('#Product_width').val().replace(/\./g,'').replace(',','.'));
        var lenght =parseFloat($('#Product_length').val().replace(/\./g,'').replace(',','.'));
        if(isNaN(width)||isNaN(lenght))return;
        $('#Product_workuom_radio').val((width*lenght/100));
        $('#Product_workuom_radio').val($('#Product_workuom_radio').val().replace('.',','));
     
    });       
</script>