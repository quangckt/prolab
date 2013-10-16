<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'holiday-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'horizontal',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    )
)); ?>

    <fieldset class="well">
        <?php
        if ($model->hasErrors())
            Yii::app()->user->setFlash('error', $form->errorSummary(array($model), 'Thông báo lỗi!!!', null, array('class' => '')));
        ?>
        <!--####################--FORM DETAILS----#################-->
        <div class="row-fluid">
            <?php echo $form->labelEx($model, 'description', array('class' => '')); ?>
            <?php echo $form->textArea($model, 'description', array('class' => 'span', 'id' => 'description')); ?>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->labelEx($model, 'startDate', array('class' => '')); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->startDate),
                'attribute' => 'startDate',
                'language' => 'vi',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                ),
                'htmlOptions' => array('class' => 'span datepicker', 'id'=>'std'),
            ));?>
            </div>
            <div class="span6">
                <?php echo $form->labelEx($model, 'dueDate', array('class' => ' ')); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->dueDate),
                'attribute' => 'dueDate',
                'language' => 'vi',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                ),
                'htmlOptions' => array('class' => 'span datepicker', 'id'=>'dud'),
            ));?>
            </div>
        </div>
        <!--####################--FORM DETAILS----#################-->
        <div class="row-fluid">
            <div class="form-actions">
                <?php
                if (!$model->isNewRecord) {
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'url' => Yii::app()->controller->createUrl('delete', array('id' => $model->id)),
                        'type' => 'primary',
                        'icon' => 'remove white',
                        'label' => 'Xóa',
                    ));
                }
                ?>
                <?php
                if (!$model->isNewRecord) {
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType' => 'submit',
                        'type' => 'primary',
                        'icon' => 'ok white',
                        'label' => 'Lưu',
                    ));
                } else {
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType' => 'submit',
                        'type' => 'primary',
                        'icon' => 'ok white',
                        'label' => 'Tạo',
                    ));
                }
                ?>
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'reset',
                    'icon' => 'remove',
                    'label' => 'Hủy',
                )); ?>
            </div>
        </div>
    </fieldset>
    <?php $this->endWidget(); ?>
</div>