<h1 class="title">Tăng vốn cổ phần</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Tạo mới', 'icon' => 'icon-plus', 'url' => Yii::app()->controller->createUrl('createCapitalIncrease'), 'linkOptions' => array('class' => 'ajaxFormModal', 'title' => 'Tăng vốn cổ phần', 'ajaxModalSubmited' => 'yiiGridViewUpdate("capitalIncrease-grid")')),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => array("/hr/share/index"), 'linkOptions' => array('class' => 'search-button', 'title' => 'test'), 'accesskey' => 'f'),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),

        ),
    ));
    ?>
</div>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'capitalIncrease-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'selectableRows' => 1,
    'columns' => array(
        'date',
        array(
            'name' => 'code',
            'type' => 'raw',
            'value' => array($this, 'showLink'),
        ),
        'name',
        array(
            'name' => 'amt',
            'type' => 'number',
            'htmlOptions' => array(
                'class' => 'isnum'
            ),
        ),
        'note',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Sửa',
                    'url' => 'array("/hr/batch/updateCapitalIncrease&id=$data->id&row=$row")',
                    'options' => array(
                        'class' => 'update ajaxFormModal',
                        'ajaxModalSubmited' => 'yiiGridViewUpdate("capitalIncrease-grid")',
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
