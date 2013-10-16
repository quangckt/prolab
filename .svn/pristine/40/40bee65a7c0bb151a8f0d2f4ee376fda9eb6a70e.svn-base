<?php
/*$sumAmt = null;
foreach ($dataProvider->data as $item) {
    $sumAmt += $item->attributes['amt'];
    var_dump($sumAmt);
}
var_dump($dataProvider->data);
die;*/
?>
<h1 class="title">Chi tiết đợt chia lãi ngày <?php echo $day; ?></h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Đợt chia lãi', 'icon' => 'icon-arrow-left', 'url' => Yii::app()->controller->createUrl('allProfit')),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => array("/hr/share/index"), 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
        ),
    ));
    ?>
</div>
<div class="form alert alert-info">
    <div class="row-fluid">
        <div class="span2">Tổng giá trị lãi:</div>
        <div class="span2"><strong><?php echo $amtFormat; ?></strong></div>
        <div class="span2">Chủ đầu tư:</div>
        <div class="span2"><strong><?php echo $sumAmtCompany; ?></strong></div>
        <div class="span2">Cổ đông:</div>
        <div class="span2"><strong><?php echo $sumAmtEmployee; ?></strong></div>
    </div>
</div>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'employeeShareProfit-grid',
    'type' => 'striped bordered',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'selectableRows' => 2,
    'columns' => array(
        array(
            'name' => 'STT',
            'value' => '$row+1',
        ),
        array(
            'header' => 'Mã',
            'name' => 'emp_id',
            'value' => '$data->employee->code',
        ),
        array(
            'header' => 'Tên cổ đông',
            'name' => 'emp_id',
            'value' => '$data->employee->fullName',
        ),
        array(
            'header'=>'Giá trị lãi',
            'name' => 'amt',
            'type' => 'number',
        ),
        array(
            'name' => 'Lũy kế',
            'type' => 'number',
            'value' => array($this, 'sumValueOfProfit1'),
        ),
    ),
));
?>