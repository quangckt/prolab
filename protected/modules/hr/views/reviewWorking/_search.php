<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-review-working-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  
    if($model->date==null){
        $now = date('Y-m-d',strtotime(time()));
        $model->date =$now;
    }
?>
<div class="row-fluid">
    <div class="span2">
        <?php echo $form->dropDownListRow($model,'department_id',Chtml::listData(Department::model()->findAll(),'id','name'),array('class'=>'span')); ?>
    </div>
    <div class="span2">
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
</div>
   <div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Tìm')); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Hủy', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>
	

<?php $this->endWidget(); ?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-review-working-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>