<?php
$url = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('HrAssets'));
//$file = $url . DIRECTORY_SEPARATOR . 'shiftchange.js';
$file = $url . '/shiftchange.js';
Yii::app()->clientScript->registerScriptFile($file, CClientScript::POS_BEGIN);
?>
<?php
if (!empty($plan)) {
    ?>
<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'shift-change-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>

    <fieldset>
        <?php
        if ($model->hasErrors())
            Yii::app()->user->setFlash('error', $form->errorSummary(array($model), 'Thông báo lỗi!!!', null, array('class' => '')));
        ?>
        <div class="row-fluid">
            <div class="well span6">
                <?php echo $form->dropDownListRow($model, 'emp_from', CHtml::listData(Employee::model()->findAll('department_id=:department_id', array(':department_id' => $plan->department_id)), 'id', 'fullName'), array('class' => 'span empFrom', 'prompt' => 'Chọn...')); ?>

                <?php
                $from1 = array();
                if ($model->emp_from > 0) {
                    $sql = " select d.* From hr_shift s inner join hr_shift_detail d on s.id=d.shift_id where s.shift_plan_id=:planid and d.emp_id=:empid order by d.date";
                    $detail = ShiftDetail::model()->findAllBySql($sql, array(':planid' => $plan->id, ':empid' => $model->emp_from));
                    $from1 = CHtml::listData($detail, 'id', 'nameTime');
                }
                ?>

                <?php echo $form->dropDownListRow($model, 'from_id', $from1, array('class' => 'span fromid ')); ?>
            </div>

            <div class="well span6">
                <?php echo $form->dropDownListRow($model, 'emp_to', CHtml::listData(Employee::model()->findAll('department_id=:department_id', array(':department_id' => $plan->department_id)), 'id', 'fullName'), array('class' => 'span empTo', 'prompt' => 'Chọn...')); ?>

                <?php
                $from2 = array();
                if ($model->emp_to > 0) {
                    $sql = " select d.* From hr_shift s inner join hr_shift_detail d on s.id=d.shift_id where s.shift_plan_id=:planid and d.emp_id=:empid order by d.date";
                    $detail = ShiftDetail::model()->findAllBySql($sql, array(':planid' => $plan->id, ':empid' => $model->emp_to));
                    $from2 = CHtml::listData($detail, 'id', 'nameTime');
                }
                ?>

                <?php echo $form->dropDownListRow($model, 'to_id', $from2, array('class' => 'span  toid ')); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="well span">
                <?php echo $form->textFieldRow($model, 'note', array('class' => 'span')); ?>
            </div>
        </div>

        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => $model->isNewRecord ? 'Đổi' : 'Lưu',
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
<?php } else { ?><h1 class="title">Bạn chưa có lịch trực cho tháng này!!!</h1><?php } ?>