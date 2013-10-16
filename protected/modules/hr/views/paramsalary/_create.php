<?php  $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'create-paramsalary-form',
    'action' => Yii::app()->controller->createUrl('create'),
    'method' => 'post',
    'htmlOptions' => array(
        'class' => 'well',
    ),
));  ?>

<div class="row-fluid">
    <div class="span2">
        <?php echo $form->dropDownListRow($model, 'shop_id', CHtml::listData(Shop::model()->findAll(), 'id', 'name'), array('class' => 'span')); ?>
    </div>
    <div class="span2">
        <?php echo $form->textFieldRow($model, 'amountOfRice', array('class' => 'span', 'maxlength' => 19)); ?>
    </div>
    <div class="span2">
        <?php echo $form->textFieldRow($model, 'basic', array('class' => 'span', 'maxlength' => 19)); ?>
    </div>
    <div class="span2">
        <?php echo $form->textFieldRow($model, 'rateIndirecSal', array('class' => 'span', 'maxlength' => 19)); ?>
    </div>
    <div class="span4">
        <?php echo $form->textFieldRow($model, 'productSal', array('class' => 'span', 'maxlength' => 19)); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <?php echo $form->textFieldRow($model, 'totalBonusDirecSal', array('class' => 'span', 'maxlength' => 19)); ?>
    </div>
    <div class="span3">
        <?php echo $form->textFieldRow($model, 'totalBonusIndirectSal', array('class' => 'span', 'maxlength' => 19)); ?>
    </div>
    <div class="span3">
        <?php echo $form->textFieldRow($model, 'addIndirectSal', array('class' => 'span', 'maxlength' => 19)); ?>
    </div>
    <div class="span3">
        <?php echo $form->textFieldRow($model, 'reserFundSal', array('class' => 'span', 'maxlength' => 19)); ?>
    </div>
</div>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'type' => 'primary',
    'icon' => 'search white',
    'label' => 'Tạo'
)); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'button', 'icon' => 'icon-remove-sign white', 'label' => 'Hủy', 'htmlOptions' => array('class' => 'btnreset btn-small'))); ?>
</div>

<?php $this->endWidget(); ?>


<script>
    $(".btnreset").click(function () {
        $(":input", "#create-paramsalary-form").each(function () {
            var type = this.type;
            var tag = this.tagName.toLowerCase(); // normalize case
            if (type == "text" || type == "password" || tag == "textarea") this.value = "";
            else if (type == "checkbox" || type == "radio") this.checked = false;
            else if (tag == "select") this.selectedIndex = "";
        });
    });
</script>