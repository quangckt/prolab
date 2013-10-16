<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'processes-form',
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
        Yii::app()->user->setFlash('error', $form->errorSummary($model, 'Thông báo lỗi!!!', null, array('class' => '')));
    ?>
    <div class="row-fluid">
        <div class="span12">
            <?php echo $form->textFieldRow($model, 'code', array('class' => 'span', 'maxlength' => 255)); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3">
            <?php echo $form->checkBoxRow($model, 'distribute', array('class'=>'')); ?>
        </div>
        <div class="span3">
            <?php echo $form->checkBoxRow($model, 'scan', array('class' => '')); ?>
        </div>
        <div class="span3">
            <?php echo $form->checkBoxRow($model, 'process', array('class' => '')); ?>
        </div>
        <div class="span3">
            <?php echo $form->checkBoxRow($model, 'printImage', array('class' => '')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3">
            <?php echo $form->checkBoxRow($model, 'productGC', array('class' => '')); ?>
        </div>
        <div class="span3">
            <?php echo $form->checkBoxRow($model, 'printPayment', array('class' => '')); ?>
        </div>
        <div class="span3">
            <?php echo $form->checkBoxRow($model, 'deliverStails', array('class' => '')); ?>
        </div>
        <div class="span3">
            <?php echo $form->checkBoxRow($model, 'deliverCustomer', array('class' => '')); ?>
        </div>
    </div>
    <div class="form-actions">
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
            'htmlOptions' => array(
                'data-dismiss' => 'modal'
            )
        ));
        ?>
    </div>
    <?php $this->endWidget(); ?>
</div>