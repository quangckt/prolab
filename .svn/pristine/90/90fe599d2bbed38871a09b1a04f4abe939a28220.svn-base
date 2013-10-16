<?php

$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    //'fixedHeader' => true,
    //'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
    //'responsiveTable' => true,
    'id' => 'hr-report-bonusValue-grid',
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
            'header' => 'Ngày làm',
            'name' => 'dayWorkOfValue',
            'htmlOptions' => array(
                'style' => 'width:85px;'
            ),
        ),
        array(
            'header' => 'Thưởng cơ bản',
            'type' => 'number',
            'name' => 'valueBonusStan',
            'filter' => false,
        ),
        array(
            'header' => 'TL thưởng đến %',
            'name' => 'rateBonusTimeIn',
            'filter' => false,
        ),
        array(
            'header' => 'GT thưởng đến',
            'type' => 'number',
            'name' => 'valueBonusTimeIn',
            'filter' => false,
        ),
        array(
            'header' => 'TL thưởng về %',
            'name' => 'rateBonusTimeOut',
            'filter' => false,
        ),
        array(
            'header' => 'GT thưởng về',
            'type' => 'number',
            'name' => 'valueBonusTimeOut',
            'filter' => false,
        ),
        array(
            'header' => 'Thưởng đến/về',
            'type' => 'number',
            'name' => 'sumValueBonus',
            'filter' => false,
        ),
        array(
            'header' => 'Ngày nghỉ',
            'name' => 'dayOffNotAllowed',
            'filter' => false,
        ),
        array(
            'header' => 'Ngày thưởng',
            'type' => 'raw',
            'name' => 'dateBonus',
            'filter' => false,
        ),
        array(
            'header' => 'Thưởng ngày phép',
            'type' => 'number',
            'name' => 'bonusDayAllowed',
            'filter' => false,
        ),
        array(
            'header' => 'XL trách nhiệm',
            'type' => 'raw',
            'name' => 'typeRespon',
            'filter' => false,
        ),
        array(
            'header' => 'Thưởng trách nhiệm',
            'type' => 'number',
            'name' => 'bonusRespon',
            'filter' => false,
        ),
        array(
            'header' => 'XL CV vượt trội',
            'type' => 'raw',
            'name' => 'typeOutStan',
            'filter' => false,
        ),
        array(
            'header' => 'Thưởng CV vượt trội',
            'type' => 'number',
            'name' => 'bonusOutStan',
            'filter' => false,
        ),
        array(
            'header' => 'Tổng thưởng',
            'type' => 'number',
            'name' => 'sumAllBonus',
            'filter' => false,
        ),
    ),
));
?>