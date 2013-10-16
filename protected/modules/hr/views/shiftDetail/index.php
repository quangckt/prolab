<?php
$this->breadcrumbs = array(
    'Hr Shift Details' => array('index'),
    'Create',
);
$plan = ShiftPlan::model()->findByPk($plan_id);
?>
<div class="row-fluid">
    <div class="span7">
        <h1 class="title">Bố trí lịch trực <?php echo $plan->department->name;?> từ ngày <?php echo $plan->startdate;?>
            đến
            ngày <?php echo $plan->enddate;?></h1>
    </div>
    <div class="span3">
        <?php echo $this->renderPartial('../shiftPlan/select_plan'); ?>
    </div>
</div>

<hr/>


<?php echo $this->renderPartial('_form', array('plan_id' => $plan_id, 'listEventShift' => $listEventShift)); ?>