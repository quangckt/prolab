<h1 class="title">Bán cổ phần</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array(
                'label' => 'Tạo mới',
                'icon' => 'icon-plus',
                'url' => Yii::app()->controller->createUrl('createSaleStock'),
                'linkOptions' => array(
                    'class' => 'ajaxFormModal',
                    'title' => 'Bán cổ phần',
                    'ajaxModalSubmited' => 'yiiGridViewUpdate("sell-Stock")'
                )
            ),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => Yii::app()->controller->createUrl('/hr/share/index')),
            array('label' => 'Export to Excel', 'icon' => 'icon-download', 'url' => Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions' => array('target' => '_blank'), 'visible' => true),
        ),
    ));
    ?>
</div>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'sell-Stock',
    //'filter' => $person,
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'columns' => array(
        array(
            'name' => 'STT',
            'value' => '$row+1',
        ),
        array(
            'header' => 'Mã',
            'name' => 'code',
            'type' => 'raw',
            'value' => 'CHtml::link($data["code"], Yii::app()->controller->createUrl("deSellStock&emp_id=" . $data["emp_id"]), array("title" => "Chi tiết các đợt bán cổ phần"))',
        ),
        array(
            'header'=>'Tên Cổ đông',
            'name' => 'fullName',
            'type' => 'raw',
        ),
        array(
            'header'=>'Tổng cổ phần bán',
            'name' => 'sumAmt',
            'type' => 'number',
        ),
        array(
            'header' => 'Tồng giá trị bán',
            'name' => 'sumQty',
            'type' => 'number',
        ),
    ),
));
?>
<div class="search-form" style="display:none">
    <?php //$this->renderPartial('_search_capitalIncrease', array(
    //'model' => $model,
//)); ?>
</div><!-- search-form -->
