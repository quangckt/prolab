<style type="text/css">
    legend {
        width: auto !important;
        border: none !important;
        margin-bottom: 0 !important;
        line-height: 20px !important;
        border-bottom: 0 !important;
    }
</style>
<?php
$listMonth = array();
$listYear = array();
for ($i = 1; $i <= 12; $i++) {
    $listMonth[$i] = 'Tháng ' . $i;
}
for ($j = 1971; $j <= date('Y'); $j++) {
    $listYear[$j] = 'Năm ' . $j;
}
?>
<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'copy-payrollrule-form',
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'class' => 'well',
    ),
        ));
?>
<div class="row-fluid">
    <div class="span6">
        <fieldset class="well">
            <legend>Copy từ tháng/năm</legend>
            <div class="row-fluid">
                <div class="span6">
                    <?php echo $form->dropDownListRow($model, 'monthFrom', $listMonth, array('class' => 'span', 'value' => date('n'), 'prompt' => 'Chọn tháng...')); ?>
                </div>
                <div class="span6">
                    <?php echo $form->dropDownListRow($model, 'yearFrom', $listYear, array('class' => 'span', 'value' => date('Y'), 'prompt' => 'Chọn năm...')); ?>
                </div>
            </div>
        </fieldset>  
    </div>
    <div class="span6">
        <fieldset class="well">
            <legend>Copy đến tháng/năm</legend>
            <div class="row-fluid">
                <div class="span6">
                    <?php echo $form->dropDownListRow($model, 'monthTo', $listMonth, array('class' => 'span', 'value' => date('n'), 'prompt' => 'Chọn tháng...')); ?>
                </div>
                <div class="span6">
                    <?php echo $form->dropDownListRow($model, 'yearTo', $listYear, array('class' => 'span', 'value' => date('Y'), 'prompt' => 'Chọn năm...')); ?>
                </div>
            </div>
        </fieldset>  
    </div>
</div>

<div class="form-actions">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'ajaxSubmit',
        'type' => 'primary',
        'label' => 'Copy',
        'loadingText' => 'Đang tạo...',
        'icon' => 'ok white',
        'url' => Yii::app()->controller->createUrl('copyRules'),
        'htmlOptions' => array(
            'class' => 'btn-copy'
        ),
        'ajaxOptions' => array(
            'dataType' => 'json',
            'beforeSend' => 'function(){
                if($("#MonthYear_monthFrom").val()==""){
                    bootbox.alert("Copy từ tháng không được trống!!!");
                    return false;
                }else if($("#MonthYear_yearFrom").val()==""){
                    bootbox.alert("Copy từ năm không được trống!!!");
                    return false;
                }else if($("#MonthYear_monthTo").val()==""){
                    bootbox.alert("Copy đến tháng không được trống!!!");
                    return false;
                }else if($("#MonthYear_yearTo").val()==""){
                    bootbox.alert("Copy đến năm không được trống!!!");
                    return false;
                }
                        }',
            'success' => 'function(data){
                if (data.monthYearFrom != null) {
                    bootbox.alert("Copy qui định từ tháng <b>" + data.monthYearFrom + "</b> : Tháng " + data.monthYearFrom + " chưa có qui định!!!");
                } else if (data.monthYearTo != null) {
                    bootbox.alert("Copy qui định đến tháng <b>" + data.monthYearTo + "</b> : Tháng " + data.monthYearTo + " đã có qui định rồi!!!");
                } else if (data.success != null) {
                    bootbox.alert("Copy qui định từ tháng <b>" + data.from + "</b> đến tháng " + data.to + " thành công.");
                    $(".copy-form").slideUp("fast");
                    $("#MonthYear_month").val(data.monthTo);
                    $("#MonthYear_year").val(data.yearTo);
                    $("#displayRules").trigger("click");
                }
			}',
        ),
    ));
    ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'button', 'icon' => 'icon-remove-sign white', 'label' => 'Hủy', 'htmlOptions' => array('class' => 'btnresetNew btn-small'))); ?>
</div>

<?php $this->endWidget(); ?>


<script>
    $(".btnresetNew").click(function(){
        $('.copy-form').slideUp('fast');
        $(":input","#search-payrollrule-form").each(function() {
            var type = this.type;
            var tag = this . tagName . toLowerCase(); // normalize case
            if (type == "text" || type == "password" || tag == "textarea") this.value = "";
            else if (type == "checkbox" || type == "radio") this.checked = false;
            else if (tag == "select") this.selectedIndex = "";
        });
    });
</script>