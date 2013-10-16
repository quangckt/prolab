<?php
if (!$checkRole) {
    $columns[] = array(
        'header' => 'STT',
        'name' => 'id',
        'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
    );
}
$columns[] = array(

    'header' => 'Mã',
    'name' => 'code',
);

$columns[] = array(
    'header' => 'Tên cổ đông',
    'name' => 'fullName',
);
$columns[] = array(
    'header' => 'Tổng giá trị',
    'name' => 'amtOfStock',
    'type' => 'number',
);
$columns[] = array(
    'header' => 'Tổng cổ phần',
    'name' => 'qtyOfStock',
    'type' => 'number',
);
$columns[] = array(
    'header' => 'Tỷ lệ cổ phần (%)',
    'name' => 'rateOfStock',
    'type' => 'numberTwo',
);
$columns[] = array(
    'header' => 'Tổng vay',
    'name' => 'currentpayPeriod',
    'type' => 'number',
);
if (!$checkRole) {
    $columns[] = array(
        'class' => 'bootstrap.widgets.TbButtonColumn',
        'template' => '{view}',
        'buttons' => array(
            'view' => array(
                'label' => 'Xem chi tiết',
                'url' => '$this->grid->controller->createUrl("detailStocker",array("id"=>$data["id"]))',
                'options' => array(
                    'class' => 'btn-small view',
                )
            ),
        ),
        //'htmlOptions' => array('style' => 'width: 115px'),
    );
}
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'employeeFromBatch-grid',
    'type' => $checkRole ? '' : 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{items}{pager}',
    'selectableRows' => 1,
    'columns' => $columns,
)); ?>