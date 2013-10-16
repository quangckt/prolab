<h1 class="title">Các đợt chia lãi</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Chia lãi', 'icon' => ' icon-share', 'url' => YII::app()->controller->createUrl('index')),
            array('label' => 'Nhận lãi', 'icon' => ' icon-ok-sign', 'url' => YII::app()->controller->createUrl('acceptProfit')),
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
            'value' => '$row+1',
        ),
        array(
            'name' => 'date',
            'type' => 'raw',
            'value' => 'CHtml::link($data->date,array("/hr/profitDetail/showEOSP&profit_id=$data->id&amt=$data->amt"))',
            'htmlOptions' => array(
                'title' => 'Chi tiết đợt chia lãi',
            ),
        ),
        array(
            'name' => 'amt',
            'type' => 'number',
        ),
        'note',
    ),
));?>