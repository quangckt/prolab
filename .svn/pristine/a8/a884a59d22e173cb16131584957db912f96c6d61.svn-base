<?php
/*$sumAmt = null;
foreach ($dataProvider->data as $item) {
    $sumAmt += $item->attributes['amt'];
    var_dump($sumAmt);
}
var_dump($dataProvider->data);
die;*/
?>
<h1 class="title">Chi tiết đợt chi cổ đông ngày <?php echo $day; ?></h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Các đợt chi cổ đông', 'icon' => 'icon-arrow-left', 'url' => Yii::app()->controller->createUrl('allShareStocker')),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => array("/hr/share/index"), 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
        ),
    ));
    ?>
</div>
<div class="form alert alert-info">
    <div class="row-fluid">
        <div class="span2">Tổng giá trị chi:</div>
        <div class="span2"><strong><?php echo $amtFormat; ?></strong></div>
        <div class="span2">Chủ đầu tư:</div>
        <div class="span2"><strong><?php echo $sumAmtCompany; ?></strong></div>
        <div class="span2">Nhân viên:</div>
        <div class="span2"><strong><?php echo $sumAmtEmployee; ?></strong></div>
    </div>
</div>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'employeeShareProfit-grid',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'selectableRows' => 1,
    'columns' => array(
        array(
            'class' => 'CCheckBoxColumn',
            'id' => 'selection',
        ),
        array(
            'name' => 'STT',
            'type' => 'raw',
            'value' => '$row+1',
        ),
        array(
            'name' => 'Mã',
            'type' => 'raw',
            'value' => array($this, 'codeLastName'),
        ),
        array(
            'name' => 'Tên nhân viên',
            'type' => 'raw',
            'value' => '$data->employee->fullName',
        ),
        array(
            'name' => 'Giá trị',
            'type' => 'number',
            'value' => '$data->amt',
            'htmlOptions' => array(
                'class' => 'isnum',
            ),
        ),
    ),
));
?>