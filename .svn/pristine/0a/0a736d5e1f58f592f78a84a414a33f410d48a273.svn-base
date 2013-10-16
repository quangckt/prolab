<h1 class="title">Cập nhật trả nợ vay</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Các đợt trả nợ vay', 'icon' => 'icon-arrow-left', 'url' => Yii::app()->controller->createUrl('allPay')),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => array("/hr/share/index"), 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
        ),
    ));
    ?>
</div>
<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'payLoan-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>
    <fieldset class="well">
        <div class="row-fluid">
            <?php echo $form->dropDownListRow($model, 'emp_id', CHtml::listData(Employee::model()->findAll(), 'id', 'codeFullName'), array('class' => '', 'disabled' => true)) ?>
        </div>
        <div class="row-fluid">
            <?php echo $form->labelEx($model, 'date', array('class' => '')) ?>
            <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'value' => "date",
            'attribute' => "date",
            'language' => 'vi',
            'options' => array(
                'dateFormat' => 'dd-mm-yy',
            ),
            'htmlOptions' => array('class' => 'span datepicker'),
        ));
            ?>
            <label>Giá trị trả *</label>
            <?php echo $form->textField($model, 'amt', array('class' => 'isnum')) ?>
        </div>

        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'id' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
        )); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'reset',
            'icon' => 'remove',
            'label' => 'Hủy',
        )); ?>
        </div>
    </fieldset>
    <?php $this->endWidget(); ?>
</div>
<?php //echo $this->renderPartial('_formPayPeriod', array('model' => $model, 'lines_relation' => $lines_relation, 'listEmp' => $listEmp)); ?>