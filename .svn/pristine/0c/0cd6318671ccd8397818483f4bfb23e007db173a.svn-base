<h1 class="title">Trợ cấp nghỉ việc</h1>
<hr />
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array(
                'label' => 'Cập nhật lũy kế ban đầu',
                'icon' => 'icon-search',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'search-button'
                ),
                'accesskey' => 'f'
            ),
        ),
    ));
    ?>
</div>

<?php
$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'fixedHeader' => true,
    'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
    'responsiveTable' => true,
    'id' => 'seniority-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->backPay('2012-12-30'),
    'selectableRows' => false,
    'template' => '{items}',
    'columns' => array(
        array(
            'header' => 'STT',
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
        array(
            'header' => 'Mã',
            'name' => 'code',
        ),
        array(
            'header' => 'Tên',
            'name' => 'lastname',
        ),
        array(
            'header' => 'Cửa hàng',
            'name' => 'shop.name',
        ),
        array(
            'header' => 'Ngày thử việc',
            'name' => 'probationary_date',
            'value' => 'date("d-m-Y", strtotime($data["official_register_date"]))',
        ),
        array(
            'header' => 'Ngày làm chính thức',
            'name' => 'official_register_date',
            'value' => 'date("d-m-Y", strtotime($data["official_register_date"]))',
        ),
        array(
            'header' => 'Số năm thâm niên',
            'name' => 'numberYearMonth',
        ),
        array(
            'header' => 'Số tháng thâm niên',
            'name' => 'numberMonth',
        ),
        array(
            'header' => 'Số tiền truy lãnh',
            'type' => 'number',
            'name' => 'valueBackPay',
        ),
    ),
));
?>
