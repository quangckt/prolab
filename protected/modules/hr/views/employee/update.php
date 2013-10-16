<?php
$this->breadcrumbs = array(
    'Employees' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

?>

<h1 class="title">Sửa thông tin nhân viên </h1>
<hr/>
<div class="tools-bar">
    <?php
    $rights = Rights::getAssignedRoles();
    $checkRole = isset($rights['nhanvien']) ? true : false;
    if ($checkRole) {

    } else {
        $emp = new Employee;
        $emp->id = $model->id;
        $emp->status = $model->status;
        $emp->date_layoff = $model->date_layoff;
        $emp->description_layoff = $model->description_layoff;
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type' => 'pills',
            'items' => array(
                array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('create'), 'linkOptions' => array('accesskey' => 't')),
                array('label' => 'In', 'icon' => 'icon-print', 'url' => Reports::createUrl('hr_employee.mrt', array('id' => $model->id)), 'linkOptions' => array('target' => "_blank"), 'accesskey' => 'p'),
                array('label' => 'Liệt kê', 'icon' => 'icon-th-list', 'url' => Yii::app()->controller->createUrl('index'), 'linkOptions' => array('accesskey' => 'l')),
                array('label' => 'Xử lý', 'icon' => 'icon-tasks', 'url' => '#', 'items' => array(
                    array('label' => 'Xét duyệt nhân viên nghỉ việc', 'icon' => 'icon-lock',
                        'url' => Yii::app()->controller->createUrl('UpdateLayOff', array('id' => $model->id)),
                        'linkOptions' => array('class' => 'ajaxFormModal', 'title' => 'Xét duyệt nhân viên nghỉ việc')),
                    array('label' => 'Chuyển công tác', 'icon' => 'icon-repeat',
                        'url' => Yii::app()->controller->createUrl('UpdateHistory', array('id' => $model->id)),
                        'linkOptions' => array('class' => 'ajaxFormModal', 'title' => 'Chuyển công tác')),
                ),
                )
            )));
    }
    ?>
</div>
<?php echo $this->renderPartial('_form', array('model' => $model, 'lines_relation' => $lines_relation, 'lines_history' => $lines_history, 'lines_education' => $lines_education, 'checkRole' => $checkRole)); ?>



