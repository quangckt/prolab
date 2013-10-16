<?php
$this->beginWidget('bootstrap.widgets.TbBox', array(
    'title' => 'Xử lý công việc',
    'headerIcon' => 'icon-home',));
?>



<div class="well">
    <?php
    $model = new ShiftPlan();

    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'shift-plan-form-select',
        'enableAjaxValidation' => false,
        'method' => 'post',
        'type' => 'vertical',
            //'htmlOptions' => array('enctype' => 'multipart/form-data')
            ));
    ?>
    <fieldset>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->dropDownListRow($model, "id", CHtml::listData(ShiftPlan::model()->findAll('status=0'), 'id', 'nameEx'), array('multiple' => true, 'class' => 'span')); ?>
            </div>

            <div class="span6">
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'icon' => 'ok white',
                    'label' => 'Đổi ca trực',
                    'htmlOptions' => array('value' => 'shiftChange/index', 'name' => 'action', 'class' => '')
                ));
                echo " ";
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'icon' => 'ok white',
                    'label' => 'Trực thay',
                    'htmlOptions' => array('value' => 'shiftReplace/index', 'name' => 'action')
                ));
                echo " ";
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'icon' => 'ok white',
                    'label' => 'Xếp lịch làm việc ',
                    'htmlOptions' => array('value' => 'shiftDetail/index', 'name' => 'action')
                ));
                echo "<hr/> ";
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'icon' => 'ok white',
                    'label' => 'Chi tiết ca trực',
                    'htmlOptions' => array('value' => 'shift/index', 'name' => 'action')
                ));
                echo "<hr/> ";
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'icon' => 'ok white',
                    'label' => 'Điều chỉnh giờ làm',
                    'htmlOptions' => array('value' => 'shiftDetail/updateTimeR', 'name' => 'action')
                ));
                echo " ";
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'icon' => 'ok white',
                    'label' => 'Duyệt ngày nghỉ',
                    'htmlOptions' => array('value' => 'shiftDetail/acceptDayOf', 'name' => 'action')
                ));
                echo" ";
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'icon' => 'ok white',
                    'label' => 'Xếp loại',
                    'htmlOptions' => array('value' => 'shiftDetail/grade', 'name' => 'action')
                ));
                echo "<hr/>";
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'icon' => 'ok white',
                    'label' => 'Tổng hợp chi tiết',
                    'htmlOptions' => array('value' => 'shiftDetail/detReport', 'name' => 'action')
                ));
//                $this->widget('bootstrap.widgets.TbButton', array(
//                    'buttonType' => 'submit',
//                    'type' => 'primary',
//                    'icon' => 'ok white',
//                    'label' => 'Chi tiết giờ làm',
//                    'htmlOptions' => array('value' => 'shiftdetail/admin', 'name' => 'action')
//                ));
                echo " ";
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'submit',
                    'type' => 'primary',
                    'icon' => 'ok white',
                    'label' => 'Tổng hợp báo cáo',
                    'htmlOptions' => array('value' => 'shiftDetail/genReport', 'name' => 'action')
                ));
                ?>
            </div>
    </fieldset>

    <?php $this->endWidget(); ?>
</div>

<?php
$this->endWidget();
?>
