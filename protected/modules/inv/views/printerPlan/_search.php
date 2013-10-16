<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'search-printer-plan-form',
    'action' => Yii::app()->createUrl($this->route),
    'type' => 'vertical',
    'method' => 'get',
        ));
?>


<div class="row-fluid">
    <div class="span4">
        <?php echo $form->dropDownListRow($model, 'inv_printer_id', Chtml::listData(Printer::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn...')); ?>
    </div>
    <div class="span4">
        <?php echo $form->labelEx($model, 'datefrom', array('class' => '')) ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->datefrom),
                'attribute' => 'datefrom',
                'language' => 'vi',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                ),
                'htmlOptions' => array('class' => 'span datepicker', 'id' => 'datefromprinterSearch'),
            ));
            ?>
    </div>
    <div class="span4">
       <?php echo $form->labelEx($model, 'dateto', array('class' => '')) ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->dateto),
                'attribute' => 'dateto',
                'language' => 'vi',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                ),
                'htmlOptions' => array('class' => 'span datepicker', 'id' => 'datetoprinterSearch'),
            ));
            ?>
    </div>
</div>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'icon' => 'search white', 'label' => 'Tìm')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'button', 'icon' => 'icon-remove-sign white', 'label' => 'Hủy', 'htmlOptions' => array('class' => 'btnreset btn-small'))); ?>
</div>

<?php $this->endWidget(); ?>


<script>
    $(".btnreset").click(function() {
        $(":input", "#search-printer-plan-form").each(function() {
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