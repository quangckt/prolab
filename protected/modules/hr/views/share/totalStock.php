<h1 class="title">Tổng hợp cổ phần</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => array("/hr/share/index"), 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
        ),
    ));
    ?>
</div>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'employeeFromBatch-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{pager}{items}{pager}',
    'selectableRows' => 1,
    'columns' => array(
        array(
            'header' => 'STT',
            'name' => 'id',
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
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
            'header' => 'Tổng giá trị',
            'name' => 'amtOfStock',
            'type' => 'number',
        ),
        array(
            'header' => 'Tổng cổ phần',
            'name' => 'qtyOfStock',
            'type' => 'number',
        ),
        array(
            'header' => 'Tỷ lệ cổ phần (%)',
            'name' => 'rateOfStock',
            'type' => 'numberTwo',
        ),
        array(
            'header' => 'Tổng vay',
            'name' => 'currentpayPeriod',
            'type' => 'number',
        ),
        array(
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
        ),
    ),
)); ?>