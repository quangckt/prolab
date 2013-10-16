<?php
$rights = Rights::getAssignedRoles();
$checkRole = isset($rights['nhanvien']) ? true : false;
if (!$checkRole) {

    $this->widget('bootstrap.widgets.TbBox', array(
        'title' => 'Thông tin cổ phần',
        'headerIcon' => 'icon-home',
        'content' => $this->renderPartial('_infoStock', array('model' => $model), true)
    ));

    $this->widget('bootstrap.widgets.TbBox', array(
        'title' => 'Tổng hợp cổ phần',
        'headerIcon' => 'icon-home',
        'content' => $this->renderPartial('_infoOptionOfStock', array('dataProvider' => $dataProvider, 'checkRole' => $checkRole), true),
    ));
} else {
    echo '<h1 class="title">Tổng hợp cổ phần hiện có của bạn</h1>';
    echo '<hr/>';
    echo '<div class="well well-small">';
    $this->renderPartial('_infoOptionOfStock', array('dataProvider' => $dataProvider1, 'checkRole' => $checkRole));
    echo '</div>';
    echo '<div class="well">';
    $this->renderPartial('detailStocker', array('dataProviderBuy' => $dataProviderBuy, 'dataProviderSell' => $dataProviderSell, 'dataProviderCI' => $dataProviderCI, 'dataProviderPayPeriod' => $dataProviderPayPeriod, 'checkRole' => $checkRole));
    echo '</div>';
}
?>