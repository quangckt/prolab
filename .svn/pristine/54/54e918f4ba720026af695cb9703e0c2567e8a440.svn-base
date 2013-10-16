<h1 class="title">Những nhân viên viên mua cổ phần <?php echo $monthAndYear; ?></h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Mua cổ phần', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('create&batch_id=' . $batch_id), 'linkOptions' => array('class' => 'ajaxFormModal', 'title' => 'Mua cổ phần ' . $monthAndYear, 'accesskey' => 't', 'ajaxModalSubmited' => 'yiiGridViewUpdate("employeeFromBatch-grid")'), 'visible' => $amtOfStockToSell == 0 ? false : true),
            array('label' => 'Phát hành cổ phần', 'icon' => 'icon-arrow-left', 'url' => array("/hr/batch/index")),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => array("/hr/share/index"), 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
        ),
    ));
    ?>
</div>
<div class="alert alert-info">
    <?php if ($amtOfStockToSell == 0) {
    echo 'Số cổ phần phát hành cho đợt này đã được mua hết!!!';
} else {
    echo 'Số cổ phần còn để mua: <strong>' . number_format($amtOfStockToSell, 0, ',', '.') . '</strong>';
} ?>
</div>
<?php
$dialog = $this->widget('ext.ecolumns.EColumnsDialog', array(
    'options' => array(
        'title' => 'Layout settings',
        'autoOpen' => false,
        'show' => 'fade',
        'hide' => 'fade',
    ),
    'htmlOptions' => array('style' => 'display: none'), //disable flush of dialog content
    'ecolumns' => array(
        'gridId' => 'employeeFromBatch-grid', //id of related grid
        'storage' => 'db', //where to store settings: 'db', 'session', 'cookie'
        'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side
        //'model' => $dataProvider->model, //model is used to get attribute labels
        'columns' => array(
            'date',
            array(
                'header' => 'Tên cổ đông',
                'name' => 'emp_id',
                'type' => 'raw',
                'value' => '$data->employee->fullName',
            ),
            array(
                'name' => 'qty',
                'type' => 'number',
            ),
            array(
                'name' => 'amt',
                'type' => 'number',
            ),
            array(
                'name' => 'Thanh toán',
                'type' => 'number',
                'value' => array($this, 'cashBuy'),
            ),
            array(
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{update} {delete}',
                'buttons' => array(
                    'update' => array(
                        'label' => 'Sửa',
                        //'url' => 'array("/hr/eventCalendar/updateHoliday&id=$data->id")',
                        'options' => array(
                            'class' => ' update ajaxFormModal',
                            'ajaxModalSubmited' => 'yiiGridViewUpdate("employeeFromBatch-grid")',
                        )
                    ),
                    'delete' => array(
                        'label' => 'Xóa',
                        'options' => array(
                            'class' => ' delete'
                        )
                    )
                ),
                'htmlOptions' => array('style' => 'width: 115px'),
            )
        ),
    )));
?>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'employeeFromBatch-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'selectableRows' => 1,
    'columns' => $dialog->columns(),
)); ?>
