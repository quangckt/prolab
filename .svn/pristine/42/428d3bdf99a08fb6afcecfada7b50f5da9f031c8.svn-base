<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'search-detailssales-form',
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
        ));
?>
<div class="row-fluid">
    <div class="span6">
        <?php echo $form->textFieldRow($model, 'name', array('class' => 'span', 'maxlength' => 255)); ?>
    </div>
    <div class="span6">
        <?php echo $form->dropDownListRow($model, 'rec_aggreSale_id', CHtml::listData(Aggregatesales::model()->findAll(), 'id', 'name'), array('class' => 'span')); ?>
    </div>
</div>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'icon' => 'search white', 'label' => 'Tìm')); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'button', 'icon' => 'icon-remove-sign white', 'label' => 'Hủy', 'htmlOptions' => array('class' => 'btnreset btn-small', 'onclick' => 'js:$(".search-form").slideToggle("fast");'))); ?>
</div>

<?php $this->endWidget(); ?>