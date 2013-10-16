<h1 class="title">Trả nợ vay</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Các đợt trả nợ vay', 'icon' => 'icon-arrow-left', 'url' => Yii::app()->controller->createUrl('allPay')),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => array("/hr/share/index"), 'linkOptions' => array('class' => 'search-button'), 'accesskey' => 'f'),
        ),
    ));
    ?>
</div>

<?php echo $this->renderPartial('_formPayPeriod', array('model' => $model, 'lines_relation' => $lines_relation, 'listEmp' => $listEmp)); ?>