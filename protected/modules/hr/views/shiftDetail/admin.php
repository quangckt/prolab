<style type="text/css">
    .rSunday {
        background-color: #7BFCBE;
    }
</style>
<?php
$listTime = array();
for ($i = 6; $i <= 23; $i++) {
    $j = 0;
    while ($j <= 55) {
        $t = sprintf('%02d:%02d', $i, $j);
        $listTime[$t] = $t;
        $j += 15;
    }
}
Yii::app()->clientScript->registerScript('search', "
$('form').submit(function(){
    $('#btn_UpdateData').val('1');
    $('#btn_UpdateData_stateFull').button('loading');
    setTimeout(function() {
        $('#btn_UpdateData_stateFull').button('reset');
    }, 3000);
	$.fn.yiiGridView.update('hr-shift-detail-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row-fluid">
    <div class="span4">
        <h1 class="title">Chi tiết giờ làm việc của lịch trực</h1>
    </div>
    <div class="span4">
        <?php echo $this->renderPartial('../shiftPlan/select_plan', array('name_plan' => $name_plan)); ?>
    </div>
    <div class="span4">
        <div style="float: right;">
            <?php  $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'update-TR-form',
            'action' => Yii::app()->createUrl($this->route),
            'method' => 'get',
        ));  ?>
            <input type="hidden" id="btn_UpdateData" name="btn_UpdateData"/>
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => 'Cập nhật data',
            'loadingText' => 'Đang cập nhật data từ mcc...',
            'icon' => 'ok white',
            'htmlOptions' => array(
                'id' => 'btn_UpdateData_stateFull',
            ),
        )); ?>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>

<?php
$this->widget('bootstrap.widgets.TbMenu', array(
    'type' => 'pills',
    'items' => array(
        array(
            'label' => 'Xử lý công việc',
            'icon' => 'icon-arrow-left',
            'url' => Yii::app()->createUrl('/hr/shiftPlan/select'),
            'linkOptions' => array(
                'class' => '',
            )
        ),
    )));
?>
<div class="search-form" style="display: none;">
    <?php $this->renderPartial('_search', array(
    'model' => $model,
)); ?>
</div><!-- search-form -->

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
    'type' => 'tabs',
    'placement' => 'above', // 'above', 'right', 'below' or 'left'
    'tabs' => array(
        array(
            'label' => 'Chi tiết thời gian làm việc',
            'content' => $this->renderPartial('_detailTimeShift', array(
                'model' => $model,
                'splan_id' => $splan_id,
                'dep_id' => $dep_id,
            ), true),
            'active' => true
        ),
        array(
            'label' => 'Chi tiết thưởng theo thời gian làm việc',
            'content' => $this->renderPartial('_bonusPercentTime', array(
                'modelBonus' => $model,
                'splan_idBonus' => $splan_id,
                'dep_idBonus' => $dep_id,
            ), true),
        ),
        array(
            'label' => 'Chi tiết giá trị thưởng',
            'content' => '',
        ),
        array(
            'label' => 'Chi tiết thu nhập',
            'content' => '',
        ),
    ),
));
?>
