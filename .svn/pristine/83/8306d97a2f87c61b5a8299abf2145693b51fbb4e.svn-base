<h1 class="title">Các đợt chi cổ đông</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Chi cổ đông', 'icon' => ' icon-share', 'url' => YII::app()->controller->createUrl('shareStocker')),
            array('label' => 'Thông tin cổ phần', 'icon' => ' icon-info-sign', 'url' => YII::app()->createUrl('hr/share/index')),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
        ),
    ));
    ?>
</div>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'profit-grid',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'columns' => array(
        array(
            'header' => 'STT',
            'name' => 'id',
            'value' => '$row+1', // row is zero based
        ),
        array(
            'name' => 'date',
            'type' => 'raw',
            'value' => 'CHtml::link($data->date,array("/hr/profitDetail/showEOST&profit_id=$data->id&amt=$data->amt"))',
            'htmlOptions' => array(
                'title' => 'Chi tiết đợt chi cổ đông',
            ),
        ),
        array(
            'header' => 'Giá trị chi',
            'name' => 'amt',
            'type' => 'number',
            'value' => '$data->amt',
            'htmlOptions' => array(
                'class' => 'isnum',
            ),
        ),
        'note',
    ),
));?>