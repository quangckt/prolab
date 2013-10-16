<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'batch-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
));?>
    <fieldset class="well">
        <?php
        if ($model->hasErrors()) {
            Yii::app()->user->setFlash('error', $form->errorsummary(array($model), 'Thông báo lỗi!!!', null, array('class' => '')));
        } ?>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'code', array('class' => 'span')) ?>
            </div>
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'name', array('class' => 'span', 'maxlength' => 255)); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'amt', array('class' => 'span isnum',
                'onblur' => 'js:{test();}'));?>
            </div>
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'qty', array('class' => 'span isnum', 'readOnly' => true, 'placeHolder' => 'Nhập giá trị...')); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->labelEx($model, 'date', array('class' => '')) ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->date),
                'attribute' => 'date',
                'language' => 'vi',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                ),
                'htmlOptions' => array('class' => 'span datepicker', 'id' => 'std', 'style' => 'z-index:999;'),
            ));?>
            </div>
            <div class="span6">
                <?php echo $form->textFieldRow($model, 'note', array('class' => 'span', 'maxlength' => 255)); ?>
            </div>
        </div>
        <div class="alert alert-warning" style="display: none;">
            Bạn chưa xác định gí trị một cổ phần!
            chọn <?php echo CHtml::link('đây', array('/hr/share/index')); ?> để xác định giá trị
        </div>
        <div class="form-actions">
            <?php if (isset(Share::model()->find()->valueofstock)) {
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'submit',
                'type' => 'primary',
                'icon' => 'ok white',
                'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
            ));
            echo "<script type=\"text/javascript\">
                    var alertWarning = false;
                </script>";
        } else {
            echo "<script type=\"text/javascript\">
                    var alertWarning = true;
                </script>";
        }
            ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'reset',
            'icon' => 'remove',
            'label' => 'Hủy',
        )); ?>
        </div>
    </fieldset>
    <?php $this->endWidget(); ?>
</div>