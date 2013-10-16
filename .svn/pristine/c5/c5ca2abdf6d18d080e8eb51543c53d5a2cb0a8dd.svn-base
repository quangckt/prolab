<h1 class="title">Các đợt trả nợ vay</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Trả nợ vay', 'icon' => ' icon-share', 'url' => YII::app()->controller->createUrl('payPeriodLoan')),
            array('label' => 'Thông tin cổ phần', 'icon' => ' icon-info-sign', 'url' => YII::app()->createUrl('hr/share/index')),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
        ),
    ));
    ?>
</div>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'profit-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'columns' => array(
        array(
            'header' => 'STT',
            'name' => 'id',
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
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
            'header' => 'Giá trị trả',
            'name' => 'amt',
            'type' => 'number',
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Sửa',
                    'url' => 'Yii::app()->createUrl("hr/payperiod/updatePayperiodLoan&id=$data->id")',
                    'options' => array(
                        'class' => 'ajaxFormModal update',
                        'ajaxModalSubmited' => 'yiiGridViewUpdate("profit-grid")',
                    )
                ),
                'delete' => array(
                    'label' => 'Xóa',
                    'url' => 'Yii::app()->createUrl("hr/payment/delete&id=$data->id")',
                    'options' => array(
                        'class' => 'delete',
                    )
                ),
            ),
            'htmlOptions' => array('style' => 'width: 115px'),
        ),
    ),
));?>