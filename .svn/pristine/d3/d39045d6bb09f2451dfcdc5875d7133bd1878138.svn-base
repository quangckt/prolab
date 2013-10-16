<style type="text/css">
    .rSunday {
        background-color: #7BFCBE;
    }
</style>
<?php
Yii::app()->clientScript->registerScript('search', "
$('form#update-TR-form').submit(function(){
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
$('form#search-emp-form').submit(function(){
    if($('#emp_idNew').val()==''){
        bootbox.alert('Bạn chưa chọn nhân viên!!!');
        return false;
    }
    $('#btn_search_stateFull').button('loading');
    setTimeout(function() {
        $('#btn_search_stateFull').button('reset');
    }, 1000);
	$.fn.yiiGridView.update('hr-shift-detail-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
Yii::app()->clientScript->registerScript('re-install-All-ForGridView', "
$.datepicker.setDefaults($.datepicker.regional['vi']);
function reInstallAll(id, data) {
    $('#date_search').datepicker({
        'dateFormat': 'yy-mm-dd',
        'showOn' : 'focus',
        'changeMonth' : true,
        'changeYear' : true,
    });
}
$('body').on('focus','.timeOutIn',function(){
    $(this).typeahead({
        source:" . CJavaScript::encode(array_values(Yii::app()->controller->getlistTime())) . ",
        items: 10,
    })
});
");
?>
<div class="row-fluid">
    <div class="span4">
        <h1 class="title">Điều chỉnh giờ làm việc cho lịch trực</h1>
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
                'name' => 'btn_UpdateData_stateFull',
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

<?php  $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'search-emp-form',
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'post',
));  ?>
<div class="span3">
    <?php echo $form->dropDownList($model, 'emp_id', CHtml::listData(Employee::model()->findAll('department_id=:dep_id', array(':dep_id' => $dep_id)), 'id', 'codeFullName'), array('class' => 'span', 'prompt' => 'Chọn nhân viên...', 'name' => 'emp_idNew')); ?>
</div>
<div class="span2">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'type' => 'primary',
    'label' => 'Tìm',
    'loadingText' => 'Đang tìm nhân viên...',
    'icon' => 'search white',
    'htmlOptions' => array(
        'id' => 'btn_search_stateFull',
        'name' => 'btn_search_stateFull',
    ),
)); ?>
</div>
<?php $this->endWidget(); ?>

<?php
$openTagDiv = CHtml::openTag("div", array("class" => "row-fluid"));
$closeTagDiv = CHtml::closeTag("div");
$enter = CHtml::openTag("br");
$cloEnter = CHtml::closeTag("br");
$beginForm = CHtml::beginForm("", "post", array("id" => "updateTimeR"));
$buttonForm = CHtml::ajaxSubmitButton("Cập nhật", Yii::app()->controller->createUrl("acceptTimeR"),
    array(
        "dataType" => "json",
        "beforeSend" => "function(){
            $('.submitUpdateTimeR').button('loading');
        }",
        "success" => "function(data){
            if(data.result == true){
                $('.submitUpdateTimeR').button('complete');
                $.fn.yiiGridView.update('hr-shift-detail-grid', {
                    data: $(this).serialize()
	            });
            } else {
                bootbox.alert('Bạn chưa chọn nhân viên!!!');
                $('.submitUpdateTimeR').button('reset');
            }
        }",
    ),
    array(
        "class" => "pull-right btn btn-primary submitUpdateTimeR",
        "data-loading-text" => "Đang cập nhật...",
        "data-complete-text" => "Cập nhật thành công"
    ));
$endForm = CHtml::endForm();
$template = $beginForm . $buttonForm . $enter . $cloEnter . '{items}{pager}' . $buttonForm . $endForm;
?>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'hr-shift-detail-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->search($checkGrid == false ? true : false),
    'filter' => $model,
    'selectableRows' => false,
    'rowCssClassExpression' => '$data->getCssClass($data)',
    'template' => $template,
    'afterAjaxUpdate' => 'reInstallAll',

    'columns' => array(
        array(
            'name' => 'date',
            'type' => 'raw',
            'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'date',
                //'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->date),
                'language' => 'vi',
                'options' => array(
                    'dateFormat' => 'yy-mm-dd',
                    'showOn' => 'focus',
                    'changeMonth' => true,
                    'changeYear' => true,
                ),
                'htmlOptions' => array(
                    'id' => 'date_search',
                ),
            ), true),
            'filterHtmlOptions' => array(
                'style' => 'width:80px;'
            ),
            'htmlOptions' => array(
                'style' => 'vertical-align:middle;'
            ),
        ),
        array(
            'header' => 'Thứ',
            'name' => 'fullDay',
            'filter' => false,
            'htmlOptions' => array(
                'style' => 'width:50px;vertical-align:middle;'
            ),
        ),
        array(
            'header' => 'Ca trực',
            'name' => 'shift_id',
            'value' => '$data->shift->name',
            'filter' => CHtml::listData(Shift::model()->findAll('shift_plan_id=:id', array(':id' => $splan_id)), 'id', 'name'),
            'filterHtmlOptions' => array(
                'style' => 'width:60px;'
            ),
            'htmlOptions' => array(
                'style' => 'vertical-align:middle;'
            ),
        ),
        array(
            'header' => 'Giờ đến (Lịch)',
            'name' => 'id',
            'value' => '$data->shift->starttime',
            'filter' => false,
            'htmlOptions' => array(
                'style' => 'width:50px;vertical-align:middle;text-align: center;'
            ),
        ),
        array(
            'header' => 'Giờ về (Lịch)',
            'name' => 'id',
            'value' => '$data->shift->endtime',
            'filter' => false,
            'htmlOptions' => array(
                'style' => 'width:50px;vertical-align:middle;text-align: center;'
            ),
        ),
        array(
            'header' => 'Giờ đến (Máy)',
            'name' => 'timeIn',
            'type' => 'raw',
            'value' => '$this->grid->controller->createWidget("bootstrap.widgets.TbTypeahead", array(
                    //"id" => $data->id,
                    "model" => $data,
                    "attribute" => "timeIn",
                    "options" => array(
                        "source" => $this->grid->controller->getlistTime(),
                        "items" => 10,
                        "matcher" => "js:function(item) {
            return ~item.toLowerCase().indexOf(this.query.toLowerCase());
        }",
                    ),
                    "htmlOptions" => array(
                        "style" => "margin-bottom:0px;width:50px;text-align:center",
                        "name" => "timeIn[".$data->id."]",
                        "class" => "timeOutIn",
                    ),
                ),true)->run()',
            'filter' => false,
            'htmlOptions' => array(
                'style' => 'width:50px;text-align: center;'
            ),
        ),
        array(
            'header' => 'Giờ về (Máy)',
            'name' => 'timeOut',
            'type' => 'raw',
            'value' => '$this->grid->controller->createWidget("bootstrap.widgets.TbTypeahead", array(
                    //"id" => $data->id,
                    "model" => $data,
                    "attribute" => "timeOut",
                    "options" => array(
                        "source" => $this->grid->controller->getlistTime(),
                        "items" => 10,
                        "matcher" => "js:function(item) {
            return ~item.toLowerCase().indexOf(this.query.toLowerCase());
        }",
                    ),
                    "htmlOptions" => array(
                        "style" => "margin-bottom:0px;width:50px;text-align:center",
                        "name" => "timeOut[".$data->id."]",
                        "class" => "timeOutIn",
                    ),
                ),true)->run()',
            'filter' => false,
            'htmlOptions' => array(
                'style' => 'width:50px;text-align: center;'
            ),
        ),
        array(
            'header' => 'Lý do',
            'name' => 'note',
            'type' => 'raw',
            'value' => 'CHtml::textField("note[".$data->id."]", $data->note,array("class"=>"span","style" => "margin-bottom:0px;"))',
            'filter' => false,
            'htmlOptions' => array(
                'style' => 'width:300px;'
            ),
        ),
        array(
            'header' => 'Tình trạng',
            'name' => 'status',
            'value' => '$data->status==0?"Chấp nhận":"Có lỗi"',
            'filter' => array(
                '0' => 'Chấp nhận',
                '1' => 'Có lỗi'
            ),
            'filterHtmlOptions' => array(
                'style' => 'width:100px;'
            ),
            'htmlOptions' => array(
                'style' => 'vertical-align:middle;'
            ),
        ),
    ),
)); ?>