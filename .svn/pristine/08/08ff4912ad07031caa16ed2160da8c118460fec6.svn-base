<h1 class="title">Các đợt trả lãi vay</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Trả lãi vay', 'icon' => ' icon-share', 'url' => YII::app()->controller->createUrl('payPeriod')),
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
            'value' => '$row+1', // row is zero based
        ),
        array(
            'header' => 'Kỳ trả lãi',
            'name' => 'name',
            'type' => 'raw',
            'value' => 'CHtml::link($data->name,array("/hr/payperiod/showEOP&period_id=$data->id&date=$data->date&name=$data->name"))',
            'htmlOptions' => array(
                'title' => 'Chi tiết đợt trả lãi vay',
            ),
        ),
        array(
            'header' => 'ngày',
            'name' => 'date',
        ),
        array(
            'header' => 'Tỷ lệ lãi vay',
            'name' => 'rateloan',
            'type' => 'numberTwo',
        ),
        array(
            'header' => 'Giá trị',
            'name' => 'amt',
            'type' => 'number',
            'value' => array($this, 'sumValue'),
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Sửa',
                    'options' => array(
                        'class' => 'update',
                    )
                ),
                'delete' => array(
                    'label' => 'Xóa',
                    'options' => array(
                        'class' => 'delete',
                    )
                ),
            ),
        )
    ),
));?>