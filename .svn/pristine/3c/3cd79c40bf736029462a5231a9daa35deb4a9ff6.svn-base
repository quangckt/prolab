<?php

$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'fixedHeader' => true,
    'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
    'responsiveTable' => true,
    'id' => 'hr-report-timeShift-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'selectableRows' => false,
    'rowCssClassExpression' => '$data->getCssClass($data)',
    'template' => '{items}{pager}',
    'columns' => array(
        array(
            'header' => 'Ngày',
            'name' => 'date',
            'htmlOptions' => array(
                'style' => 'width:100px;'
            ),
        ),
        array(
            'header' => 'Thứ',
            'name' => 'fullDay',
            'filter' => false,
            'htmlOptions' => array(
                'style' => 'width:70px;'
            ),
        ),
        array(
            'header' => 'Tên NV',
            'name' => 'emp_id',
            'value' => '$data->employee->lastname',
            'filter' => CHtml::listData(Employee::model()->findAll('department_id=:dep_id', array(':dep_id' => $dep_id)), 'id', 'lastname'),
            'htmlOptions' => array(
                'style' => 'width:105px;'
            ),
        ),
        array(
            'header' => 'Ca trực',
            'name' => 'shift_id',
            'value' => '$data->shift->name',
            'filter' => CHtml::listData(Shift::model()->findAll('shift_plan_id=:id', array(':id' => $plan_id)), 'id', 'name'),
            'htmlOptions' => array(
                'style' => 'width:85px;'
            ),
        ),
        array(
            'header' => 'Giờ đến (Lịch)',
            'name' => 'startTime',
            'filter' => false,
        ),
        array(
            'header' => 'Giờ về (Lịch)',
            'name' => 'endTime',
            'filter' => false,
        ),
        array(
            'header' => 'Giờ đến (Máy)',
            'name' => 'timeIn',
            'filter' => false,
        ),
        array(
            'header' => 'Giờ về (Máy)',
            'name' => 'timeOut',
            'filter' => false,
        ),
        array(
            'header' => 'Đến sớm/trễ',
            'name' => 'earlyLateTimeIn',
            'filter' => false,
        ),
        array(
            'header' => 'Về sớm/trễ',
            'name' => 'earlyLateTimeOut',
            'filter' => false,
        ),
        array(
            'header' => 'Giờ làm',
            'name' => 'timeWork',
            'filter' => false,
        ),
        array(
            'header' => 'Ngày làm',
            'type' => 'raw',
            'name' => 'dayWork',
            'filter' => false,
        ),
        array(
            'header' => 'Nghỉ kg phép',
            'type' => 'raw',
            'name' => 'dayOffNotAllowed',
            'filter' => false,
        ),
    ),
))
?>