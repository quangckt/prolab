<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'search-processes-form',
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
    'htmlOptions' => array(
        'class' => 'well well-small'
    )
        ));
?>
<div class="row-fluid">
    <div class="span8">
        <?php echo $form->textFieldRow($model, 'code', array('class' => 'span', 'maxlength' => 255)); ?>
    </div>
    <div class="span2">
        <span>&nbsp;</span>
        <?php echo $form->checkBoxRow($model, 'distribute', array('class' => '')); ?>
    </div>
    <div class="span2">
        <span>&nbsp;</span>
        <?php echo $form->checkBoxRow($model, 'scan', array('class' => '')); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span2">
        <?php echo $form->checkBoxRow($model, 'process', array('class' => '')); ?>
    </div>
    <div class="span2">
        <?php echo $form->checkBoxRow($model, 'printImage', array('class' => '')); ?>
    </div>
    <div class="span2">
        <?php echo $form->checkBoxRow($model, 'productGC', array('class' => '')); ?>
    </div>
    <div class="span2">
        <?php echo $form->checkBoxRow($model, 'printPayment', array('class' => '')); ?>
    </div>
    <div class="span2">
        <?php echo $form->checkBoxRow($model, 'deliverStails', array('class' => '')); ?>
    </div>
    <div class="span2">
        <?php echo $form->checkBoxRow($model, 'deliverCustomer', array('class' => '')); ?>
    </div>
</div>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'icon' => 'search white', 'label' => 'Tìm')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'button', 'icon' => 'icon-remove-sign white', 'label' => 'Hủy', 'htmlOptions' => array('class' => 'btnreset btn-small'))); ?>
</div>

<?php $this->endWidget(); ?>


<script>
    $(".btnreset").click(function() {
        $(":input", "#search-processes-form").each(function() {
            var type = this.type;
            var tag = this.tagName.toLowerCase(); // normalize case
            if (type == "text" || type == "password" || tag == "textarea")
                this.value = "";
            else if (type == "checkbox" || type == "radio")
                this.checked = false;
            else if (tag == "select")
                this.selectedIndex = "";
        });
    });
</script>