<div class="tools-bar">
    <?php
    if (!isset($checkRole))
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type' => 'pills',
            'items' => array(
                array('label' => 'Tổng hợp cổ phần', 'icon' => 'icon-arrow-left', 'url' => array("/hr/share/totalstock"), 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
                array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => array("/hr/share/index"), 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
                array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
            ),
        ));
    ?>
</div>
<div class="row-fluid">
    <div class="span6">
        <span class="label label-warning title" style="font-size: 15px;">Chi tiết mua cổ phần</span>
        <?php
        $gridColumns = array(
            array(
                'header' => 'STT',
                'name' => 'id',
                'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
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
                'name' => 'tdate',
                'type' => 'raw',
                'value' => 'date("d-m-Y",strtotime($data["tdate"]))',
            ),
            array(
                'header' => 'Giá trị',
                'type' => 'number',
                'name' => 'amtBuy',
            ),
            array(
                'header' => 'Số cổ phần',
                'type' => 'number',
                'name' => 'qtyBuy',
            ),
            array(
                'header' => 'Thanh toán',
                'type' => 'number',
                'name' => 'amtCash',
            ),
        );
        $this->widget('bootstrap.widgets.TbGroupGridView', array(
            'type' => 'striped bordered condensed',
            'dataProvider' => $dataProviderBuy,
            'template' => "{pager}{items}",
            'extraRowColumns' => array('name'),
            'extraRowExpression' => '"<b>".$data["name"]."</b>"',
            'columns' => $gridColumns
        ));
        ?>
    </div>
    <div class="span6">
        <span class="label label-warning" style="font-size: 15px;">Chi tiết tăng vốn cổ phần</span>
        <?php
        $gridColumns = array(
            array(
                'header' => 'STT',
                'name' => 'id',
                'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
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
                'name' => 'tdate',
                'type' => 'raw',
                'value' => 'date("d-m-Y",strtotime($data["tdate"]))',
            ),
            array(
                'header' => 'Giá trị',
                'type' => 'number',
                'name' => 'amtCI',
            ),
            array(
                'header' => 'Số cổ phần',
                'type' => 'number',
                'name' => 'qtyCI',
            ),
            array(
                'header' => 'Thanh toán',
                'type' => 'number',
                'name' => 'amtCashCI',
            ),
        );
        $this->widget('bootstrap.widgets.TbGroupGridView', array(
            'type' => 'striped bordered condensed',
            'dataProvider' => $dataProviderCI,
            'template' => "{pager}{items}",
            'extraRowColumns' => array('name'),
            'extraRowExpression' => '"<b>".$data["name"]."</b>"',
            'columns' => $gridColumns
        ));
        ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span6">
        <span class="label label-warning" style="font-size: 15px;">Chi tiết bán cổ phần</span>
        <?php
        $gridColumns = array(
            array(
                'header' => 'STT',
                'name' => 'id',
                'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
            ),
            array(
                'header' => 'Mã đợt',
                'name' => 'emp_id',
                'type' => 'raw',
                'value' => array($this, 'batchCode'),
            ),
            array(
                'header' => 'Tên cổ đông',
                'name' => 'emp_id',
                'value' => '$data->employee->fullName'
            ),
            array(
                'header' => 'Ngày',
                'name' => 'date',
            ),
            array(
                'header' => 'Số cổ phần',
                'type' => 'number',
                'name' => 'qty',
            ),
            array(
                'header' => 'Giá trị',
                'type' => 'number',
                'name' => 'amt',
                'footer' => $dataProviderSell->itemCount === 0 ? '' : $dataProviderSell->model->getTotal($dataProviderSell->data['0']->attributes['emp_id']),
            ),
        );
        $this->widget('bootstrap.widgets.TbGroupGridView', array(
            'type' => 'striped bordered condensed', //condensed
            'dataProvider' => $dataProviderSell,
            'template' => "{pager}{items}",
            'columns' => $gridColumns,
        ));
        ?>
    </div>
    <div class="span6">
        <span class="label label-warning" style="font-size: 15px;">Chi tiết trả nợ vay</span>
        <?php
        $gridColumns = array(
            array(
                'header' => 'STT',
                'name' => 'id',
                'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
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
                'header' => 'Ngày',
                'name' => 'date',
            ),
            array(
                'header' => 'Giá trị',
                'type' => 'number',
                'name' => 'amt',
                'footer' => $dataProviderPayPeriod->itemCount === 0 ? '' : $dataProviderPayPeriod->model->getTotal($dataProviderSell->data['0']->attributes['emp_id']),
            ),
        );
        $this->widget('bootstrap.widgets.TbGroupGridView', array(
            'type' => 'striped bordered condensed',
            'dataProvider' => $dataProviderPayPeriod,
            'template' => "{pager}{items}",
            'columns' => $gridColumns
        ));
        ?>
    </div>
</div>