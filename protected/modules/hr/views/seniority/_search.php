<?php

$listYear = array();
for ($i = 1971; $i <= date('Y'); $i++) {
    $listYear[$i] = $i;
}

$yearToExit = Seniority::model()->find('type=1');

$openTagDiv = CHtml::openTag("div", array("class" => "row-fluid"));
$closeTagDiv = CHtml::closeTag("div");
$enter = CHtml::openTag("br");
$cloEnter = CHtml::closeTag("br");
$yearToLabel = CHtml::label('Lũy kế đến năm', '', array('class' => 'pull-right', 'style' => 'margin-right:10px; margin-top:5px;'));
$yearTo = CHtml::dropDownList('yearTo[yearTo]', !empty($yearToExit) ? $yearToExit->year : '', $listYear, array('class' => 'pull-right', 'style' => 'margin-right:15px;width:80px;'));
$beginForm = CHtml::beginForm("", "post", array("id" => "mapEmpId"));
$buttonForm = CHtml::ajaxSubmitButton("Cập nhật", Yii::app()->controller->createUrl("acceptCacumulate"), array(
            "dataType" => "json",
            "beforeSend" => "function(){
                $('.submitAccumulate').button('loading');
                $('#myModal').modal().css(
                            {
                                width: 'auto',
                                'margin-left': function () {
                                    return -($(this).width() / 2);
                                },
                                'background-color': function () {
                                    return 'transparent';
                                },
                                'border': function () {
                                    return 'none';
                                },
                                '-webkit-box-shadow': function () {
                                    return 'none';
                                },
                                'box-shadow': function () {
                                    return 'none';
                                }
                            }
                        );
            }",
            "success" => "function(data){
                $('.submitAccumulate').button('complete');
                if(data.ok==true){
                    //bootbox.alert('Cập nhật lũy kế thành công.');
                }
                $('.submitAccumulate').button('reset');
                $('.search-form').slideUp('fast');
                $('#seniority').attr('style', 'display:auto');
                $('#display1').attr('style', 'display:none');
                $('#display2').attr('style', 'display:auto');
                $('#toolbar').attr('style', 'display:auto');
                $('.valueOfMonth-form').attr('style', 'display:auto');
                $('#myModal').modal('hide');
                if($('#Seniority_year').val()!='' && $('#Seniority_valueSeniority').val()!=''){
                    $('#myTab').fadeIn('normal');
                    yiiGridViewUpdate('seniority-grid');
                }
                
            }",
                ), array(
            "class" => "pull-right btn btn-primary submitAccumulate",
            "data-loading-text" => "Đang cập nhật...",
            "data-complete-text" => "Cập nhật thành công"
        ));
$endForm = CHtml::endForm();
$template = $beginForm . $openTagDiv . $buttonForm . $yearTo . $yearToLabel . $closeTagDiv . '{items}{pager}' . $buttonForm . $endForm;
?>

<?php

$this->widget('bootstrap.widgets.TbExtendedGridView', array(
    'id' => 'accumulate-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->accumulate(),
    'selectableRows' => false,
    'template' => $template,
    'columns' => array(
        array(
            'header' => 'STT',
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
        array(
            'header' => 'Mã',
            'value' => '$data->code',
        ),
        array(
            'header' => 'Tên',
            'name' => 'fullName',
        ),
        array(
            'header' => 'Cửa hàng',
            'name' => 'shop.name',
        ),
        array(
            'header' => 'Bộ phận',
            'name' => 'department.name',
        ),
        array(
            'header' => 'Ngày làm chính thức',
            'value' => '$data->official_register_date',
        ),
        array(
            'header' => 'Lũy kế thâm niên',
            'type' => 'raw',
            'value' => 'CHtml::textField("cacumulate[" . $data->id . "]", isset($data->seniority["0"])?$data->seniority["0"]["valueSeniority"]:"", array("class" => "span isnum","style" => "margin-bottom:0px;text-align:center;"))',
            'htmlOptions' => array(
                'style' => 'width:100px;',
            ),
        ),
        array(
            'header' => 'Lũy kế trợ cấp NV',
            'type' => 'raw',
            'value' => 'CHtml::textField("cacumulateResAllow[" . $data->id . "]", isset($data->senioritySeverAllow["0"])?$data->senioritySeverAllow["0"]["valueSeniority"]:"", array("class" => "span isnum","style" => "margin-bottom:0px;text-align:center;"))',
            'htmlOptions' => array(
                'style' => 'width:100px;',
            ),
        ),
    ),
));
?>