<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'employee-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>
    <?php
    if ($model->hasErrors() || $lines_relation->hasErrors || $lines_history->hasErrors || $lines_education->hasErrors)
        Yii::app()->user->setFlash('error', $form->errorSummary(array_merge(array($model), $lines_relation->items, $lines_history->items, $lines_education->items), 'Thông báo lỗi!!!', null, array('class' => '')));
    ?>
    <?php $this->widget('bootstrap.widgets.TbTabs', array(
    'type' => 'tabs',
    'placement' => 'top', // 'above', 'right', 'below' or 'left'
    'tabs' => array(
        array('label' => 'Thông tin chung', 'content' => $this->renderPartial('_emp_info', array('model' => $model, 'form' => $form), true, false), 'active' => true,),
        array('label' => 'Quan hệ gia đình', 'content' => $this->renderPartial('_emp_relation', array('model' => $model, 'form' => $form, 'lines_relation' => $lines_relation), true, false)),
        array('label' => 'Thông tin công việc', 'content' => $this->renderPartial('_emp_history', array('model' => $model, 'form' => $form, 'lines_history' => $lines_history, 'checkRole' => $checkRole), true, false)),
        array('label' => 'Quá trình học tập', 'content' => $this->renderPartial('_emp_education', array('model' => $model, 'form' => $form, 'lines_education' => $lines_education), true, false)),
        array('label' => 'Nhận xét', 'content' => $this->renderPartial('_emp_description', array('model' => $model, 'form' => $form), true)),
    )
)); ?>

    <div class="form-actions" id="btn_submit_emp">
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
<?php
$d = new EmpRelation;
$d->emp_id = $model->id;
$e = new History;
$e->emp_id = $model->id;
$f = new Education;
$f->emp_id = $model->id;

?>

<script type="text/javascript">
    $(document).ready(function () {
        if ($('#Employee_status').val() == 1) {
            $('#btn_submit_emp').hide();
        } else {
            $('#btn_submit_emp').show();
        }
    });
    Prolab.behaviors.tabularInput = function () {
        var settings = {
            lastline:<?php echo $lines_relation->lastNew ?>,
            emptyline:new String(<?php echo CJSON::encode($this->renderPartial('_emp_relation_tr', array('id' => 'idRep', 'model' => $d, 'form' => $form), true)); ?>)
        }
        $('#emp_relation').tabularInput(settings);

        var settings1 = {
            lastline:<?php echo $lines_history->lastNew ?>,
            emptyline:new String(<?php echo CJSON::encode($this->renderPartial('_emp_history_tr', array('id' => 'idRep', 'model' => $e, 'form' => $form), true)); ?>)
        }
        $('#emp_history').tabularInput(settings1);
        var settings3 = {
            lastline:<?php echo $lines_education->lastNew ?>,
            emptyline:new String(<?php echo CJSON::encode($this->renderPartial('_emp_education_tr', array('id' => 'idRep', 'model' => $f, 'form' => $form), true)); ?>)
        }
        $('#emp_education').tabularInput(settings3);
    };
</script>
     



