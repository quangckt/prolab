<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'paramsalary-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
        'class' => 'well',
    )
)); ?>
    <div class="row-fluid">
        <?php if ($model->hasErrors()) Yii::app()->user->setFlash('error', $form->errorSummary(array($model), 'Thông báo lỗi!!!', null, array('class' => ''))); ?>
        <div class="span4">
            <?php echo $form->dropDownListRow($model, 'shop_id', CHtml::listData(Shop::model()->findAll(), 'id', 'name'), array('class' => 'span')); ?>
        </div>
        <div class="span4">
            <?php echo CHtml::activeLabelEx($model, 'month', array('class' => '')); ?>
            <?php echo $form->numberField($model, 'month', array('class' => 'span', 'value' => !empty($model->month) ? $model->month : date('m'))); ?>
        </div>
        <div class="span4">
            <?php echo CHtml::activeLabelEx($model, 'year', array('class' => '')); ?>
            <?php echo $form->numberField($model, 'year', array('class' => 'span', 'value' => !empty($model->year) ? $model->year :date('Y'))); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">
            <?php echo $form->textFieldRow($model, 'amountOfRice', array('class' => 'span isnum', 'maxlength' => 19)); ?>
        </div>
        <div class="span4">
            <?php echo $form->textFieldRow($model, 'basic', array('class' => 'span isnum', 'maxlength' => 19)); ?>
        </div>
        <div class="span4">
            <?php echo $form->textFieldRow($model, 'rateIndirecSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <?php echo $form->textFieldRow($model, 'totalBonusDirecSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
        </div>
        <div class="span6">
            <?php echo $form->textFieldRow($model, 'totalBonusIndirectSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">
            <?php echo $form->textFieldRow($model, 'productSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
        </div>
        <div class="span4">
            <?php echo $form->textFieldRow($model, 'addIndirectSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
        </div>
        <div class="span4">
            <?php echo $form->textFieldRow($model, 'reserFundSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
        </div>
    </div>
    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
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
    <?php $this->endWidget(); ?>
</div>
