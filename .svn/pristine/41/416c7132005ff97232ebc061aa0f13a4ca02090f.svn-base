<?php
$beginForm = CHtml::beginForm("", "post", array("id" => "mapEmpId"));
$hiddenDateSen = CHtml::hiddenField('dateSen', $dateSen, array());
$hiddenValueOfMonth = CHtml::hiddenField('valueOfMonth', $valueOfMonth, array());
$checkExits = CHtml::hiddenField('checkExits', $checkExits, array('id' => 'checkExits'));
$buttonAccept = CHtml::ajaxSubmitButton("Duyệt thâm niên", Yii::app()->controller->createUrl("acceptSeniority"), array(
            "dataType" => "json",
            "beforeSend" => "function(){
                    $('.submitAccumulate').button('loading');
                    if($('#Seniority_year').val()=='' || $('#Seniority_valueSeniority').val()==''){
                        bootbox.alert('Ngày tính thâm niên và giá trị một tháng thâm niên không được bỏ trống!!!');
                        $('.submitAccumulate').button('reset');
                        return false;
                    }else{
                        var checkExits = $('#checkExits').val();
                        if(checkExits==2){
                            var answer = confirm ('Đã duyệt thâm niên cho năm này rồi. Bạn muốn duyệt lại?');
                                if(!answer){
                                    $('.submitAccumulate').button('reset');
                                    return false;
                                }
                        }
                    }
                }",
            "success" => "function(data){
                    $('.submitAccumulate').button('complete');
                    if(data.ok==true){
                        bootbox.alert('Duyệt thâm niên thành công.');
                    }
                    $('.submitAccumulate').button('reset');
                }",
                ), array(
            "class" => "pull-right btn btn-primary submitAccumulate",
            "data-loading-text" => "Đang xét duyệt...",
            "data-complete-text" => "Duyệt thâm niên thành công",
            "style" => "margin-bottom: 10px;",
        ));
$buttonAcceptBottom = CHtml::ajaxSubmitButton("Duyệt thâm niên", Yii::app()->controller->createUrl("acceptSeniority"), array(
            "dataType" => "json",
            "beforeSend" => "function(){
                    $('.submitAccumulate').button('loading');
                    if($('#Seniority_year').val()=='' || $('#Seniority_valueSeniority').val()==''){
                        bootbox.alert('Ngày tính thâm niên và giá trị một tháng thâm niên không được bỏ trống!!!');
                        $('.submitAccumulate').button('reset');
                        return false;
                    }
                }",
            "success" => "function(data){
                    $('.submitAccumulate').button('complete');
                    if(data.ok==true){
                        bootbox.alert('Duyệt thâm niên thành công.');
                    }
                    $('.submitAccumulate').button('reset');
                }",
                ), array(
            "class" => "pull-right btn btn-primary submitAccumulate",
            "data-loading-text" => "Đang xét duyệt...",
            "data-complete-text" => "Duyệt thâm niên thành công",
            "style" => "margin-top: -10px;",
        ));
$endForm = CHtml::endForm();
$template = $beginForm . $hiddenDateSen . $hiddenValueOfMonth . $checkExits . $buttonAccept . '{items}' . $buttonAcceptBottom . $endForm;
?>

<div id="seniority" style="display: auto">
    <?php
    $this->widget('bootstrap.widgets.TbExtendedGridView', array(
        'fixedHeader' => true,
        'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
        'responsiveTable' => true,
        'id' => 'seniority-grid',
        'type' => 'striped bordered condensed',
        'dataProvider' => $model->searchAccumulate($valueOfMonth, $dateSen),
        'selectableRows' => false,
        'template' => $template,
        'columns' => array(
            array(
                'header' => 'STT',
                'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
            ),
            array(
                'header' => 'Mã',
                'name' => 'code',
            ),
            array(
                'header' => 'Tên',
                'name' => 'lastname',
            ),
            array(
                'header' => 'Cửa hàng',
                'name' => 'shopName',
            ),
            array(
                'header' => 'Bộ phận',
                'name' => 'depName',
            ),
            array(
                'header' => 'Ngày làm chính thức',
                'name' => 'official_register_date',
                'value' => 'date("d-m-Y", strtotime($data["official_register_date"]))',
            ),
            array(
                'header' => 'Số năm thâm niên',
                'name' => 'numberYear',
            ),
            array(
                'header' => 'Lũy kế',
                'type' => 'number',
                'name' => 'valueSeniority',
            ),
            array(
                'header' => 'Ngày làm theo lịch',
                'name' => 'shiftDay',
            ),
            array(
                'header' => 'Ngày làm thực tế',
                'type' => 'numberTwo',
                'name' => 'dayWork',
            ),
            array(
                'header' => 'Số ngày dư thiếu',
                'type' => 'numberTwo',
                'name' => 'resWan',
            ),
            array(
                'header' => '% dư thiếu',
                'type' => 'numberTwo',
                'name' => 'rateResWan',
            ),
            array(
                'header' => 'Giá trị một tháng thâm niên',
                'type' => 'number',
                'name' => 'valueOfMonth',
            ),
            array(
                'header' => 'Tổng giá trị thâm niên',
                'type' => 'number',
                'name' => 'sumValue',
            ),
        ),
    ));
    ?>
</div>