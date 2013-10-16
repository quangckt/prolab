<?php

$plan = ShiftPlan::model()->findByPk($plan_id);
$empOfDept = Employee::model()->findAll('department_id=:department_id and status =0', array(':department_id' => $plan->department_id));
$shiftOfPlan = $plan->shifts;
?>

<div class="well">
    <div class="row-fluid">
        <div class="span10">
            <?php echo $this->renderPartial('_shift_calendar', array('plan' => $plan, 'listEventShift' => $listEventShift));?>
        </div>
        <div class="span2">
            <h6 class="title"><?php echo $plan->department->name;?></h6>
            <?php echo CHtml::checkBoxList('list_emp', -1, CHtml::listData($empOfDept, 'id', 'lastname'), array('labelOptions' => array('style' => 'display:inline',), 'class' => 'row', 'checkAll' => 'Chọn hết'));?>
            <div id='wrap'>
                <div id='shift-box'>
                    <div id='shift-events'>
                        <h6 class='title'>Ca làm việc</h6>
                        <?php
                        foreach ($shiftOfPlan as $k => $item) {
                            ?>
                            <div id="<?php echo $item->id ?>" class='shift-event'
                                 data='<?php echo CJSON::encode($item);?>'
                                 style="background-color:<?php echo $item->colorEvent;?>;border-color:<?php echo $item->colorEvent;?>;color:white;">
                                <?php echo "$item->name: $item->starttime => $item->endtime"; ?>
                            </div>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php //================================================== ?>

<script>
    $(document).ready(function () {
        $('#shift-events div.shift-event').each(function () {
            var eventObject = {
                title:$.trim($(this).text())
            };
            $(this).data('eventObject', eventObject);
            $(this).draggable({
                zIndex:999,
                revert:true,
                revertDuration:0
            });
        });
        $('#list_emp input').attr('checked', 'checked');
        $('#list_emp input').attr('onchange', 'loadEvent(this)');
    });
</script>
