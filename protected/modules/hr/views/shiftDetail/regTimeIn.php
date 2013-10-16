<?php
if (!empty($shiftDetail)) {
    $checkEarlyLate = null;
    $earlyLate = null;
    $startTime = $model->startTimeShift;
    $listStart = explode(':', $startTime);
    $startTimeToSec = (int)$listStart['0'] * 3600 + (int)$listStart['1'] * 60;
    $startTR = date('H:i');
    $liststartTR = explode(':', $startTR);
    $startTRToSec = (int)$liststartTR['0'] * 3600 + (int)$liststartTR['1'] * 60;
    $check = $startTimeToSec - $startTRToSec;
    if ($check > 0) {
        $checkEarlyLate = 1;
        $earlyLate = gmdate('H:i', $check);
    } else {
        $checkEarlyLate = 2;
        $subCheck = substr($check, 1);
        $earlyLate = gmdate('H:i', $subCheck);
    }
}
?>
<h1 class="title">Đăng ký giờ đến</h1>
<hr/>
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'changePass-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'horizontal',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
        'class' => 'well',
    )
)); ?>
<div class="row-fluid">
    <div class="span8">
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->uneditableRow($model, 'code', array('class' => 'span')); ?>
            </div>
            <div class="span6">
                <?php echo $form->uneditableRow($model, 'fullName', array('class' => 'span')); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->uneditableRow($model, 'workDay', array('class' => 'span')); ?>
            </div>
            <div class="span6">
                <?php echo $form->uneditableRow($model, 'shift', array('class' => 'span')); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <?php echo $form->uneditableRow($model, 'startTimeShift', array('class' => 'span startTimeShift')); ?>
            </div>
            <div class="span6">
                <?php echo $form->uneditableRow($model, 'endTimeShift', array('class' => 'span endTimeShift')); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Giờ đến hôm nay</label>

                    <div class="controls">
                        <?php echo CHtml::textField('ShiftDetail[timeIn]', empty($shiftDetail) ? 'Hôm nay bạn không có ca!!!' : empty($shiftDetail->timeIn) ? date('H:i') : $shiftDetail->timeIn, array('class' => 'span', 'disabled' => empty($shiftDetail) ? true : false)); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="span4">
        <?php
        if ($model->image != null) {
            echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $model->image, "image", array('class' => 'thumbnail', 'style' => 'width:150px; margin:auto;'));
        } else {
            echo CHtml::image(Yii::app()->request->baseUrl . '/images/User.png', "image", array('class' => 'thumbnail', 'style' => 'width:150px; margin:auto;'));
        }
        ?>
    </div>
</div>
<?php if (!empty($shiftDetail)) { ?>
<div class="row-fluid">
    <div class="alert alert-info span8" style="text-align: center; font-size: large;"></div>
</div>
<div class="row-fluid">
    <div class="form-actions span8" style="text-align:center">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'ajaxSubmit',
        'type' => 'primary',
        'label' => 'Đăng ký',
        'loadingText' => 'Đang đăng ký...',
        'completeText' => 'Đăng ký thành công',
        'icon' => 'ok white',
        //'url' => Yii::app()->controller->createUrl('changePass', array('id' => $model->id)),
        'htmlOptions' => array(
            'id' => 'btn_updatePass_stateFull',
        ),
        'ajaxOptions' => array(
            'dataType' => 'json',
            'beforeSend' => 'function(){
				$("#btn_updatePass_stateFull").button("loading");
			}',
            'success' => 'function(data){
				if(data.success == 1){
				    $("#btn_updatePass_stateFull").button("complete");
				    setTimeout(function() {
                        $("#btn_updatePass_stateFull").button("reset");
                    }, 1000);
				}
			}',
        ),
    )); ?>
    </div>
</div>
<?php } ?>
<?php $this->endWidget(); ?>
<script type="text/javascript">
    $(document).ready(function () {
        var duoi = '. Chúc bạn một ngày làm việc vui tươi và hiệu quả';
        var earlyLateLabael = null;
        var checkEarlyLate = '<?php echo isset($checkEarlyLate) ? $checkEarlyLate : null; ?>';
        var earlyLate = '<?php echo isset($earlyLate) ? $earlyLate : null; ?>';
        if (checkEarlyLate == 1)
            earlyLateLabael = 'Hôm nay bạn đã đi làm sớm ';
        else
            earlyLateLabael = 'Hôm nay bạn đã đi làm muộn ';
        $('.alert-info').html(earlyLateLabael + '<b>' + earlyLate + '</b>' + duoi);
    });
    $('#ShiftDetail_timeIn').focusout(function () {
        var duoi = '. Chúc bạn một ngày làm việc vui tươi và hiệu quả';
        var startTimeShift = $('.startTimeShift').text();
        var timeIn = $('#ShiftDetail_timeIn').val();
        var listStart = startTimeShift.split(':');
        var listTimeIn = timeIn.split(':');
        var hourStart = listStart[0];
        var minuteStart = listStart[1];
        var hourTimeIn = listTimeIn[0];
        var minuteTimeIn = listTimeIn[1];
        var url = '<?php echo Yii::app()->controller->createUrl("earlyLate");?>';
        var pData = {hourStart:hourStart, minuteStart:minuteStart, hourTimeIn:hourTimeIn, minuteTimeIn:minuteTimeIn};
        $.post(url, pData, function (data) {
            var rel = eval("(" + data + ")");
            var checkEarlyLate = null;
            if (rel.label == 1)
                earlyLateLabael = 'Hôm nay bạn đã đi làm sớm ';
            else
                earlyLateLabael = 'Hôm nay bạn đã đi làm muộn ';
            $('.alert-info').html(earlyLateLabael + '<b>' + rel.earlyLate + '</b>' + duoi);
        });
    });
</script>