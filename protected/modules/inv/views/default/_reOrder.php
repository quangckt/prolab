
<?php

$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'limit-grid',
    'type' => 'bordered ',
    'dataProvider' => Inventory::model()->searchLimit(),
    'template' => '{pager}{items}{pager}',
    'columns' => array(
        array(
            'header' => 'Mã hàng',
            'name' => 'product.code'
        ),
        array(
            'header' => 'Tên hàng',
            'type' => 'raw',
            'value' => 'CHtml::link($data->product->name,array("/inv/warehousein/create"))'
        ),
        array(
            'header' => 'ĐVT',
            'name' => 'product.uom.name',
            'htmlOptions' => array('class' => 'isnum', 'style' => 'width:40px')
        ),
        array(
            'header' => 'nhóm',
            'name' => 'product.category.name',
        ),
        array(
            'header' => 'Kho',
            'name' => 'wh.name'
        ),
        array(
            'header' => 'Số lượng tồn',
            'value' => '$data->qty',
            'htmlOptions' => array('class' => 'isnum'),
            'type' => 'number'
        )
    ),
));
?>