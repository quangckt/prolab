<style type="text/css">
    .rSunday {
        background-color: #7BFCBE;
    }
    .linkRule{
        color: yellow;
        text-decoration: none;
    }
    .linkRule:hover{
        color: pink;
        text-decoration: none;
    }
</style>
<?php
$checkExits = ReportDetail::model()->find('plan_id=:plan_id', array(':plan_id' => $plan_id));
$resultCheck = empty($checkExits) ? '1' : '0';
$checkRule = Payrollrule::model()->findAll('monthYear=:monthYear', array(':monthYear' => $monthYear));
$checkGrade = Grade::model()->findAll('monthYear=:monthYear', array(':monthYear' => $monthYear));
$checkRuleDayOf = Payrollrule::model()->find('type = 7 and monthYear=:monthYear', array(':monthYear' => $year));
?>
<?php
$this->widget('ext.tooltipster.tooltipster', array(
    'identifier' => '.createReportDetail', //class
    'options' => array(
        'animation' => 'fade', //fade, grow, swing, slide, fall
        'arrow' => true,
        'arrowColor' => '', //hex code / rgb
        'content' => '', //string
        'delay' => 200, //integer
        'fixedWidth' => 0, //integer
        'maxWidth' => 0, //integer
        'functionBefore' => 'js:function(origin, continueTooltip) {
                continueTooltip();
            }',
        'functionReady' => 'js:function(origin, tooltip) {
            }',
        'functionAfter' => 'js:function(origin) {
            }',
        'icon' => '(?)',
        'iconDesktop' => false,
        'iconTouch' => false,
        'iconTheme' => '.tooltipster-icon',
        'interactive' => true,
        'interactiveTolerance' => 350,
        'offsetX' => 0,
        'offsetY' => 0,
        'onlyOne' => true,
        'position' => 'bottom', //right, left, top, top-right, top-left, bottom, bottom-right, bottom-left
        'speed' => 350,
        'timer' => 0, //How long the tooltip should be allowed to live before closing
        'theme' => '.tooltipster-default',
        'touchDevices' => true,
        'trigger' => 'hover', //hover, click, custom
        'updateAnimation' => true,
    ),
));
?>

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
        array(
            'label' => 'Tính toán thông tin báo cáo',
            'icon' => 'icon-plus',
            'url' => '',
            'linkOptions' => array(
                'class' => (empty($checkRule) || empty($checkGrade)) ? 'createReportDetail' : '',
                'data-toggle' => empty($checkRule) ? '' : 'modal',
                'data-target' => empty($checkRule) ? '' : '#bonusValueModal',
                'title' => (empty($checkRule) && empty($checkGrade)) ? 'Chưa có quy định cho tháng ' . $monthYear . ', ' . CHtml::link('Tạo qui định', Yii::app()->createUrl('hr/payrollrule/index'), array('class' => 'linkRule')) . '</br>' . 'Chưa có xếp loại của tháng ' . $monthYear . ', ' . CHtml::link('Xếp loại', Yii::app()->createUrl('hr/shiftdetail/grade', array('splan_id' => $plan_id)), array('class' => 'linkRule')) : (empty($checkRule) ? 'Chưa có quy định cho tháng ' . $monthYear . ', ' . CHtml::link('Tạo qui định', Yii::app()->createUrl('hr/payrollrule/index'), array('class' => 'linkRule')) : (empty($checkGrade) ? 'Chưa có xếp loại của tháng ' . $monthYear . ', ' . CHtml::link('Xếp loại', Yii::app()->createUrl('hr/shiftdetail/grade', array('splan_id' => $plan_id)), array('class' => 'linkRule')) : '')),
            ),
            'visible' => $resultCheck,
        ),
        array(
            'label' => 'Cập nhật lại thông tin báo cáo',
            'icon' => 'icon-edit',
            'url' => '',
            'linkOptions' => array(
                'class' => 'updateReport',
                'data-toggle' => 'modal',
                'data-target' => '#bonusValueModal',
            ),
            'visible' => !$resultCheck,
        ),
        )));
?>

<div id="reportDetail">
    <?php
    $this->widget('bootstrap.widgets.TbTabs', array(
        'type' => 'tabs',
        'placement' => 'above', // 'above', 'right', 'below' or 'left'
        'tabs' => array(
            array(
                'label' => 'Chi tiết thời gian làm việc',
                'content' => $this->renderPartial('_timeShift', array(
                    'model' => $model,
                    'dep_id' => $dep_id,
                    'plan_id' => $plan_id,
                        ), true),
                'active' => true
            ),
            array(
                'label' => 'Chi tiết tỷ lệ thưởng theo thời gian làm việc',
                'content' => $this->renderPartial('_percentTime', array(
                    'model' => $model,
                    'dep_id' => $dep_id,
                    'plan_id' => $plan_id,
                        ), true),
            ),
            array(
                'label' => 'Chi tiết giá trị thưởng',
                'content' => $this->renderPartial('_bonusValue', array(
                    'model' => $model,
                    'dep_id' => $dep_id,
                    'plan_id' => $plan_id,
                        ), true),
            ),
            array(
                'label' => 'Chi tiết thu nhập',
                'content' => '',
            ),
        ),
    ));
    ?>
</div>

<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id' => 'bonusValueModal')); ?>
<?php
$this->renderPartial('_valueBonusTime', array(
    'year' => $year,
    'plan_id' => $plan_id,
    'checkModel' => $checkRuleDayOf,
    'monthYear' => $monthYear,
));
?>
<?php $this->endWidget(); ?>