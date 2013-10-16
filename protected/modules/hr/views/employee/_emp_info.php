<div class="well">
<div class="row-fluid">
<div class="span9">
    <div class="row-fluid">
        <div class="span3">
            <?php echo $form->textFieldRow($model,'code',array('class'=>'span')); ?>
        </div>
        <div class="span3">
            <?php echo $form->textFieldRow($model,'firstname',array('class'=>'span')); ?>
        </div>
        <div class="span3">
            <?php echo $form->textFieldRow($model,'middlename',array('class'=>'span')); ?>
        </div>
        <div class="span3">
            <?php echo $form->textFieldRow($model,'lastname',array('class'=>'span')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span2">
            <?php echo $form->labelEx($model,'birthday',array('class'=>' ')); ?>
            <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->birthday),
                'attribute'=>'birthday',
                'language' => 'vi',
                'options'=>array(
                'dateFormat'=>'dd-mm-yy',
                ),
                'htmlOptions'=>array('class'=>'span' ),
            ));?>
        </div>
        <div class="span2">
            <?php echo $form->textFieldRow($model,'plate_of_birth',array('class'=>'span')); ?>
        </div>
        <div class="span2">
            <?php echo $form->dropDownListRow($model,'sex',array('0'=>"Nam",'1'=>"Nữ"),array('prompt'=>'Chọn...','class'=>'span ajaxupdate listPartner','update'=>'listPartner')); ?>
        </div>
        <div class="span2">
            <?php echo $form->textFieldRow($model,'email',array('class'=>'span')); ?>
        </div>
        <div class="span2">
            <?php echo $form->dropDownListRow($model,"levelofedu_id",CHtml::listData(Levelofedu::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span')); ?>
        </div>
        <div class="span2">
            <?php echo $form->textFieldRow($model,'field_edu',array('class'=>'span')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span2">
        <?php echo $form->textFieldRow($model,'identification',array('class'=>'span')); ?>
        </div>
        <div class="span2">
        <?php echo $form->labelEx($model,'identification_date',array('class'=>' ')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'=>$model,
            'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->identification_date),
            'attribute'=>'identification_date',
            'language' => 'vi',
            'options'=>array(
            'dateFormat'=>'dd-mm-yy',
            ),
            'htmlOptions'=>array('class'=>'span' ),
        ));
        ?>
        </div>
        <div class="span2">
            <?php echo $form->textFieldRow($model,'identification_plate',array('class'=>'span')); ?>
        </div>
        <div class="span3">
            <?php echo $form->textFieldRow($model,'home_phone',array('class'=>'span')); ?>
        </div>
        <div class="span3">
            <?php echo $form->textFieldRow($model,'mobile_phone',array('class'=>'span')); ?>
        </div>   
    </div>
</div>
<div class="span3">
<div class="row-fluid">
<?php
	if($model->image!=null){
         echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->image,"image",array('class'=>'thumbnail','style'=>'width:150px;'));	   
	}else{
	    echo CHtml::image(Yii::app()->request->baseUrl.'/images/User.png',"image",array('class'=>'thumbnail','style'=>'width:150px;'));
	}
?>
   
</div>
<div class="row-fluid">
   <?php echo CHtml::activeFileField($model, 'image',array('class'=>'span')); ?> 
</div>        
</div>
</div>   	
<div class="row-fluid">
    <div class="span3">
    <?php echo $form->textFieldRow($model,'address',array('class'=>'span')); ?>
    </div>
    <div class="span2">
    <?php echo $form->dropDownListRow($model,'city_id',CHtml::listData(City::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span ')); ?>
    </div>
    <div class="span1">
    <?php echo $form->dropDownListRow($model,'district_id',CHtml::listData(District::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span ')); ?>
    </div>
    <div class="span3">
    <?php echo $form->textFieldRow($model,'address_tmp',array('class'=>'span')); ?>
    </div>
    <div class="span2">
    <?php echo $form->dropDownListRow($model,'city_tmp_id',CHtml::listData(City::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span ')); ?>
    </div>
    <div class="span1">
    <?php echo $form->dropDownListRow($model,'district_tmp_id',CHtml::listData(District::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span ')); ?>
    </div>
</div>
</div>	
