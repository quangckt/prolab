
<?php
$beginForm = CHtml::beginForm("", "post", array("id" => "updateOthRecPay"));
$buttonForm = CHtml::ajaxSubmitButton("Cập nhật", Yii::app()->controller->createUrl("acceptOthRecPay"), array(
            "dataType" => "json",
            "beforeSend" => "function(){
            	$('.submitUpdateOthRecPay').button('loading');
        }",
            "success" => "function(data){
                
            }",
                ), array(
            "class" => "pull-right btn btn-primary submitUpdateOthRecPay",
            "data-loading-text" => "Đang cập nhật...",
            "data-complete-text" => "Cập nhật thành công"
        ));
$endForm = CHtml::endForm();
$template = $beginForm . $buttonForm .'<br/><br/>'. '{items}{pager}' . $buttonForm . $endForm;
?>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'paramsalary-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->searchOtherRecPay(),
    'selectableRows' => false,
    'template' => $template,
    'columns' => array(
        array(
            'header' => 'STT',
            'name' => 'id',
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
            'name' => 'shop_id',
            'value' => '$data->shop->name',
        ),
        array(
            'header' => 'Bộ phận',
            'name' => 'department_id',
            'value' => '$data->department->name',
        ),
        array(
            'header' => 'Bậc lương tháng',
            'type' => 'numberTwo',
            'value' => '',
        ),
        array(
            'header' => 'Bậc lương tháng',
            'type' => 'raw',
            'value' => 'CHtml::textField("test", "", array("class" => "span isnum", "style" => "margin:0;"))',
        ),
        array(
            'header' => 'PCCV',
            'type' => 'raw',
            'value' => 'CHtml::textField("test", "", array("class" => "span isnum", "style" => "margin:0;"))',
        ),
        array(
            'header' => 'Lương tối thiểu',
            'type' => 'raw',
            'value' => 'CHtml::textField("test", "", array("class" => "span isnum", "style" => "margin:0;"))',
        ),
        array(
            'header' => 'Lương trực tiếp',
            'name' => 'id',
        ),
        array(
            'header' => 'Vay',
            'name' => 'id',
        ),
        array(
            'header' => 'Truy lãnh th',
            'name' => 'id',
        ),
        array(
            'header' => 'Tạm ứng',
            'name' => 'id',
        ),
        array(
            'header' => 'Tạm ứng trả góp',
            'name' => 'id',
        ),
        array(
            'header' => 'Thu khác',
            'name' => 'id',
        ),
        array(
            'header' => 'NV đóng BHXH',
            'name' => 'id',
        ),
    ),
));
?>