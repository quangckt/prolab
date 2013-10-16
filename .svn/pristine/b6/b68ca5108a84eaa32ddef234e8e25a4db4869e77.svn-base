<?php

$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'fixedHeader' => true,
    'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
    'responsiveTable' => true,
    'id' => 'hr-report-timeShift-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->sumReportByType($plan_id, 'timeWork'),
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
            'header' => 'Ngày lV(Lịch)',
            'name' => 'shiftDay',
        ),
        array(
            'header' => 'Giờ lV(Lịch)',
            'name' => 'timeShift',
        ),
        array(
            'header' => 'Đến sớm',
            'name' => 'earlyTimeIn',
        ),
        array(
            'header' => 'Đến trễ',
            'name' => 'lateTimeIn',
        ),
        array(
            'header' => 'Về sớm',
            'name' => 'earlyTimeOut',
        ),
        array(
            'header' => 'Về trễ',
            'name' => 'lateTimeOut',
        ),
        array(
            'header' => 'Giờ LV(thực tế)',
            'name' => 'timeWork',
        ),
        array(
            'header' => 'Ngày lV(Thực tế)',
            'name' => 'dayWork',
        ),
        array(
            'header' => 'Ngày nghỉ',
            'name' => 'dayOffNotAllowed',
        ),
    ),
))
?>