<h1 class="title">Chi tiết đợt trả lãi <?php echo $name; ?> ngày <?php echo $date; ?></h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Các đợt trả lãi', 'icon' => 'icon-arrow-left', 'url' => Yii::app()->controller->createUrl('index')),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => array("/hr/share/index"), 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
        ),
    ));
    ?>
</div>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'periodDetail-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'selectableRows' => 1,
    'columns' => array(
        array(
            'header' => 'Stt',
            'name' => 'id',
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1', // row is zero based
        ),
        array(
            'header' => 'Mã',
            'name' => 'code',
        ),
        array(
            'header' => 'Tên cổ đông',
            'name' => 'fullName',
        ),
        array(
            'header' => 'Ngày',
            'name' => 'pdDate',
            'value' => 'date("d-m-Y", strtotime($data["pdDate"]))',
        ),
        array(
            'header' => 'Giá trị lãi',
            'name' => 'period',
            'type' => 'number',
        ),
        array(
            'header' => 'Ghi chú',
            'name' => 'note',
        ),
    ),
));
?>