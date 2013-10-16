<?php

$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    //'fixedHeader' => true,
    //'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
    //'responsiveTable' => true,
    'id' => 'hr-bonus-percent-time-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $modelBonus->search(false),
    'filter' => $modelBonus,
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
            'value' => '$data->emp->lastname',
            'filter' => CHtml::listData(Employee::model()->findAll('department_id=:dep_id', array(':dep_id' => $dep_idBonus)), 'id', 'lastname'),
            'htmlOptions' => array(
                'style' => 'width:105px;'
            ),
        ),
        array(
            'header' => 'Ca trực',
            'name' => 'shift_id',
            'value' => '$data->shift->name',
            'filter' => CHtml::listData(Shift::model()->findAll('shift_plan_id=:id', array(':id' => $splan_idBonus)), 'id', 'name'),
            'htmlOptions' => array(
                'style' => 'width:85px;'
            ),
        ),
        array(
            'header' => 'Giờ đến (Lịch)',
            'name' => 'id',
            'value' => '$data->shift->starttime',
            'filter' => false,
        ),
        array(
            'header' => 'Giờ về (Lịch)',
            'name' => 'id',
            'value' => '$data->shift->endtime',
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
            'name' => 'earlyTimeIn',
            'filter' => false,
        ),
        array(
            'header' => 'Thưởng/Phạt %',
            'type' => 'raw',
            'name' => 'bonusFineTimeIn',
            'filter' => false,
            'htmlOptions' => array(
                'style' => 'background-color:#7BFBBE;',
            ),
            'headerHtmlOptions' => array(
                'style' => 'background-color:#7BFBBE;',
            ),
            'filterHtmlOptions' => array(
                'style' => 'background-color:#7BFBBE;',
            ),
        ),
        array(
            'header' => 'Về sớm/trễ',
            'name' => 'earlyTimeOut',
            'filter' => false,
        ),
        array(
            'header' => 'Thưởng/Phạt %',
            'type' => 'raw',
            'name' => 'bonusFineTimeOut',
            'filter' => false,
            'htmlOptions' => array(
                'style' => 'background-color:#7BFBBE;',
            ),
            'headerHtmlOptions' => array(
                'style' => 'background-color:#7BFBBE;',
            ),
            'filterHtmlOptions' => array(
                'style' => 'background-color:#7BFBBE;',
            ),
        ),
        array(
            'header' => 'Giờ làm',
            'name' => 'timeWork',
            'filter' => false,
        ),
        array(
            'header' => 'Tổng thưởng/phạt %',
            'type' => 'raw',
            'name' => 'sumBonusFine',
            'filter' => false,
            'htmlOptions' => array(
                'style' => 'background-color:#7BFBBE;',
            ),
            'headerHtmlOptions' => array(
                'style' => 'background-color:#7BFBBE;',
            ),
            'filterHtmlOptions' => array(
                'style' => 'background-color:#7BFBBE;',
            ),
        ),
    ),
));
?>