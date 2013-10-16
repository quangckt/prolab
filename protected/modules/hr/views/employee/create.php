<?php
$this->breadcrumbs = array(
    'Employees' => array('index'),
    'Create',
);

?>
<h1 class="title">Thêm nhân viên</h1>
<hr/>
<div class="tools-bar">
    <fieldset>
        <?php
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type' => 'pills',
            'items' => array(
                array('label' => 'Liệt kê', 'icon' => 'icon-th-list', 'url' => Yii::app()->controller->createUrl('index'), 'linkOptions' => array()),
            ),
        ));

        ?>
        <?php $right = Rights::getAssignedRoles(); $checkRole = isset($right['nhanvien']) ? true : false;?>
        <?php echo $this->renderPartial('_form', array('model' => $model, 'lines_relation' => $lines_relation, 'lines_history' => $lines_history, 'lines_education' => $lines_education, 'checkRole' => $checkRole)); ?>
</div>


