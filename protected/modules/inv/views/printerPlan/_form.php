<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'printer-plan-form',
        'enableAjaxValidation' => false,
        'method' => 'post',
        'type' => 'vertical',
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data'
        )
    ));
    ?>

    <?php
    if ($model->hasErrors())
        Yii::app()->user->setFlash('error', $form->errorSummary($model), 'Thông báo lỗi!!!', null, array('class' => ''));
    ?>
    <div class="row-fluid">
        <div class="span6">
            <?php echo $form->dropDownListRow($model, 'inv_printer_id', CHtml::listData(Printer::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn...')); ?>
        </div>
        <div class="span6">
            <?php echo $form->dropDownListRow($model, 'status', PrinterPlan::model()->listStatus(), array('class' => 'span')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
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
                'htmlOptions' => array('class' => 'span datepicker', 'id' => 'datefromprinter'),
            ));
            ?>
        </div>
        <div class="span6">
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
                'htmlOptions' => array('class' => 'span datepicker', 'id' => 'datetoprinter'),
            ));
            ?>
        </div>

    </div>
    <div class="form-actions span5">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
        ));
        ?>
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'reset',
            'icon' => 'remove',
            'label' => 'Hủy',
        ));
        ?>
    </div>

    <?php $this->endWidget(); ?>

</div>