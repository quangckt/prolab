<?php
$shiftPlanMenu = ShiftPlan::model()->findAll('status=0');
$listMenuPlan = array();
foreach ($shiftPlanMenu as $item) {
    $listMenuPlan[] = array(
        'label' => $item->name . " - " . $item->department->name,
        'url' => Yii::app()->createUrl('hr/shiftDetail/admin', array('splan_id' => $item->id)),
        'visible' => isset($_GET['splan_id']) ? $_GET['splan_id'] != $item->id : 'true',
    );
}
$this->widget('bootstrap.widgets.TbMenu', array(
    'type' => 'pills',
    'items' => array(
        array(
            'label' => isset($name_plan) ? $name_plan : 'Giờ làm việc chi tiết',
            'url' => '#',
            'active' => true,
            'items' => $listMenuPlan,
        ),
    ),
    'htmlOptions' => array(
        //'class' => 'pull-left',
        'style' => 'font-weight: bold;',
    ),
));
?>