<?php

$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'search-shift-plan-form',
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
    ));

?>
<div class="row-fluid">
    <div class="span3">
    <?php

echo $form->dropDownListRow($model, "department_id", CHtml::listData(Department::
    model()->findAll(), 'id', 'name'), array('prompt' => 'Chọn...', 'class' =>
        'span'));

?>
    </div>
    <div class="span3">
    <?php

echo $form->dropDownListRow($model, 'status', array('0' => "Mở", '1' => "khóa"),
    array('class' => 'span', 'prompt' => 'Chọn...'));

?>
    </div>
    <div class="span3">
    <?php

echo $form->labelEx($model, 'startdate', array('class' => ' '));

?>
        <?php

$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->startdate),
    'attribute' => 'startdate',
    'language' => 'vi',
    'options' => array('dateFormat' => 'dd-mm-yy', ),
    'htmlOptions' => array('class' => 'span datepicker'),
    ));

?>
    </div>
    <div class="span3">
    <?php

echo $form->labelEx($model, 'enddate', array('class' => ' '));

?>
        <?php

$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model' => $model,
    'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->enddate),
    'attribute' => 'enddate',
    'language' => 'vi',
    'options' => array('dateFormat' => 'dd-mm-yy', ),
    'htmlOptions' => array('class' => 'span datepicker'),
    ));

?>
    </div>
</div>
	<div class="form-actions">
		<?php

$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'type' => 'primary',
    'icon' => 'search white',
    'label' => 'Tìm'));

?>
               <?php

$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'button',
    'icon' => 'icon-remove-sign white',
    'label' => 'Hủy',
    'htmlOptions' => array('class' => 'btnreset btn-small')));

?>
	</div>

<?php

$this->endWidget();

?>


   <script>
	$(".btnreset").click(function(){
		$(":input","#search-shift-plan-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>