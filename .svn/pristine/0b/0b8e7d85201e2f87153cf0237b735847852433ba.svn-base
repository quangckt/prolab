<?php
$criteria = new CDbCriteria();
$criteria->addCondition('batch_id=1');
$test = Transaction::model()->findAll($criteria);
?>
<h1 class="title">Phát hành cổ phần</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('create'), 'linkOptions' => array('class' => 'ajaxFormModal', 'title' => 'Phát hành cổ phần', 'accesskey' => 't', 'ajaxModalSubmited' => 'yiiGridViewUpdate("batch-grid")')),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => array("/hr/share/index"), 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
        ),
    ));
    ?>
</div>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'batch-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'selectableRows' => 2,
    'columns' => array(
        array(
            'name' => 'code',
            'type' => 'raw',
            'value' => 'CHtml::link($data->code, array("/hr/transaction/showEFB&batch_id=$data->id"))',
        ),
        'name',
        array(
            'name' => 'amt',
            'type' => 'number',
        ),
        array(
            'name' => 'qty',
            'type' => 'number',
        ),
        'date',
        'note',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Sửa',
                    'options' => array(
                        'class' => ' update ajaxFormModal',
                        'ajaxModalSubmited' => 'yiiGridViewUpdate("batch-grid")'
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
)); ?>
<script type="text/javascript">
    var alertWarning = false;
    if (alertWarning == true) {
        $('.alert-warning').attr('style', 'display:auto');
    }
    var test = function () {
        var batch_amt = $('#Batch_amt').val().replace(/\./g, '');
        if (batch_amt == 0) {
            alert('Vui lòng nhập một giá trị > 0 !');
            $('#Batch_qty').val('');
        } else {
            $('#Batch_qty').val(batch_amt /<?php $valueOfStock = Share::model()->find(); if (isset($valueOfStock)) echo is_null($valueOfStock->valueofstock) ? '0' : $valueOfStock->valueofstock;?>);
        }
    };
</script>

