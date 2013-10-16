<?php

$this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider' => $dataProvider,
    'template' => '{items}',
    'type' => 'striped bordered condensed',
    'hideHeader' => true,
    'emptyText' => Rights::t('core', 'Người dùng này chưa có quyền hạn nào!!!'),
    'columns' => array(
        array(
            'name' => 'name',
            'header' => Rights::t('core', 'Name'),
            'type' => 'raw',
            'htmlOptions' => array('class' => 'name-column'),
            'value' => '$data->getNameText()',
        ),
        array(
            'name' => 'type',
            'header' => Rights::t('core', 'Type'),
            'type' => 'raw',
            'htmlOptions' => array('class' => 'type-column'),
            'value' => '$data->getTypeText()',
        ),
        array(
            'header' => '&nbsp;',
            'type' => 'raw',
            'htmlOptions' => array('class' => 'actions-column'),
            'value' => '$data->getRevokeAssignmentLink()',
        ),
    )
));
?>