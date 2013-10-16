<?php
$splitToArray = explode("\n", Yii::app()->settings->get('hr', 'color_events'));
$listEventColor1 = array();
foreach ($splitToArray as $key => $v) {
    $listEventColor1[] = array(
        $key => trim($v),
    );
}
?>
<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'shift-form',
	'enableAjaxValidation'=>false,
    'method'=>'post',
	'type'=>'vertical',
	'htmlOptions'=>array(
	'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>
		<?php
    if($model->hasErrors())
    Yii::app()->user->setFlash('error', $form->errorSummary(array_merge( array($model)) ,'Thông báo lỗi!!!', null,array('class'=>'')));
    ?>
 <div class="well">
    <div class="row-fluid">
        <div class="span4">
        <?php echo $form->textFieldRow($model,'code',array('class'=>'span')); ?>
        </div>
        <div class="span4">
        <?php echo $form->textFieldRow($model,'name',array('class'=>'span')); ?>
        </div>
        <div class="span4">
        <?php echo $form->dropDownListRow($model,'isovernight',array('0'=>"Không",'1'=>"Có"),array('class'=>'span')); ?>
        </div>
   </div>
   <div class="row-fluid">
        <div class="span6">
        
        <?php
        $listTime= array();
        for($i=6;$i<=23;$i++) {
           $j=0;
           while($j<=55){
            $t=sprintf('%02d:%02d',$i,$j);
            $listTime[$t]=$t;
             $j+=15;
            }
        }
        ?>
        
        <?php 
        echo $form->dropDownListRow($model,'starttime',$listTime,array('class'=>'span')); ?>
           
        </div>
        <div class="span6">
             <?php 
            echo $form->dropDownListRow($model,'endtime',$listTime,array('class'=>'span')); 
            ?>
        </div>
    </div>
    <div class="row-fluid">
        <?php echo $form->textAreaRow($model,'note',array('class'=>'span','row'=>3)); ?>
    </div>
    <div class="row-fluid">
    <?php echo $form->labelEx($model, 'colorEvent', array('class' => '')); ?>
    <?php foreach ($splitToArray as $key => $v) { ?>
    <div
        style="background-color:<?php echo trim($v);?>; display:inline-block; width:18px; height:18px; padding-top: 0px; padding-left: 5px; padding-bottom: 2px;z-index: 100;">
        <input type="radio"
               name="choose_color"
        <?php if ($model->colorEvent == trim($v)) {
        echo 'checked';
    } ?>
        "
        value="<?php echo trim($v);?>"/>
    </div>
    <?php } ?>
</div>
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
</fieldset>

<?php $this->endWidget(); ?>
 </div>       		
</div>