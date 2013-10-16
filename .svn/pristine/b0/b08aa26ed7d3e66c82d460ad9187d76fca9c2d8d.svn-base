<?php  $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'search-hr-shift-detail-form',
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
));  ?>

<?php echo $form->textFieldRow($model, 'date', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'emp_id', CHtml::listData(Employee::model()->findAll(), 'id', 'lastname'),
    array('class' => 'span5')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'icon' => 'search white', 'label' => 'Tìm')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'button', 'icon' => 'icon-remove-sign white', 'label' => 'Hủy', 'htmlOptions' => array('class' => 'btnreset btn-small'))); ?>
</div>

<?php $this->endWidget(); ?>


<script>
    $(".btnreset").click(function () {
        $(":input", "#search-hr-shift-detail-form").each(function () {
            var type = this.type;
            var tag = this.tagName.toLowerCase(); // normalize case
            if (type == "text" || type == "password" || tag == "textarea") this.value = "";
            else if (type == "checkbox" || type == "radio") this.checked = false;
            else if (tag == "select") this.selectedIndex = "";
        });
    });
</script>