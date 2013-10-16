<?php

$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'id' => 'hr-report-bonusValue-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->sumReportByType($plan_id, 'bonusValue'),
    'selectableRows' => false,
    'template' => '{items}{pager}',
    'columns' => array(
        array(
            'header' => 'STT',
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
        array(
            'header' => 'Mã NV',
            'name' => 'code',
        ),
        array(
            'header' => 'Tên NV',
            'name' => 'lastname',
        ),
        array(
            'header' => 'Cửa hàng',
            'name' => 'shopName',
        ),
        array(
            'header' => 'Bộ phận',
            'name' => 'depName',
        ),
        array(
            'header' => 'Thưởng cơ bản',
            'type' => 'number',
            'name' => 'valueBonusStan',
        ),
        array(
            'header' => 'Tỷ lệ thưởng đến',
            'name' => 'rateBonusTimeIn',
        ),
        array(
            'header' => 'Giá trị thưởng đến',
            'type' => 'number',
            'name' => 'valueBonusTimeIn',
        ),
        array(
            'header' => 'Tỷ lệ thưởng về',
            'name' => 'rateBonusTimeOut',
        ),
        array(
            'header' => 'Giá trị thưởng về',
            'type' => 'number',
            'name' => 'valueBonusTimeOut',
        ),
        array(
            'header' => 'Thưởng đến+về',
            'type' => 'number',
            'name' => 'sumValueBonus',
        ),
        array(
            'header' => 'Ngày nghỉ',
            'name' => 'dayOffNotAllowed',
        ),
        array(
            'header' => 'Ngày thưởng',
            'name' => 'dateBonus',
        ),
        array(
            'header' => 'Thưởng ngày phép',
            'type' => 'number',
            'name' => 'bonusDayAllowed',
        ),
        array(
            'header' => 'Thưởng trách nhiệm',
            'type' => 'number',
            'name' => 'bonusRespon',
        ),
        array(
            'header' => 'Thưởng CV vượt trội',
            'type' => 'number',
            'name' => 'bonusOutStan',
        ),
        array(
            'header' => 'Tổng thưởng',
            'type' => 'number',
            'name' => 'sumAllBonus',
        ),
    ),
))
?>