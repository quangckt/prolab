<h1 class="title">Chi tiết các đợt bán cổ phần của cổ đông (<?php echo $fullName; ?>)</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array(
                'label' => 'Bán cổ phần',
                'icon' => 'icon-arrow-left',
                'url' => Yii::app()->controller->createUrl('indexSaleStock'),
            ),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => Yii::app()->controller->createUrl('/hr/share/index')),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),

        ),
    ));
    ?>
</div>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'detail-Sale-Stock',
    //'filter' => $person,
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'columns' => array(
        array(
            'name' => 'Mã đợt',
            'type' => 'raw',
            'value' => array($this, 'batchCode'),
        ),
        array(
            'name' => 'Ngày bán',
            'type' => 'raw',
            'value' => '$data->date'
        ),
        array(
            'name' => 'Số cổ phần bán',
            'type' => 'number',
            'value' => '$data->qty',
        ),
        array(
            'name' => 'Giá trị bán',
            'type' => 'number',
            'value' => '$data->amt',
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Sửa',
                    'url' => 'Yii::app()->controller->createUrl("updateSaleStock&id=$data->id")',
                    'options' => array(
                        'class' => 'ajaxFormModal update',
                        'title' => 'Sửa',
                        'ajaxModalSubmited'=>'yiiGridViewUpdate("detail-Sale-Stock")'
                    )
                ),
                'delete' => array(
                    'label' => 'Xóa',
                    'url' => 'Yii::app()->controller->createUrl("deleteST&id=$data->id")',
                    'options' => array(
                        'class' => 'delete'
                    )
                )
            ),
            'htmlOptions' => array('style' => 'width: 115px'),
        ),
    ),
));
?>