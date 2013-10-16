<?php
Yii::app()->clientScript->registerScript("allScripts", "
    $('.submitMapEmpId').click(function(){
        $('.submitMapEmpId').button('loading');
    });
");
?>
<div class="row-fluid">
    <div class="span4">
        <h1 class="title">Cập nhật số ID nhân viên từ Mcc</h1>
    </div>
    <div class="span4">

    </div>
    <div class="span4">
        <div style="float: right;">

        </div>
    </div>
</div>
<div class="span6">
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
</div>
<?php
$openTagDiv = CHtml::openTag("div", array("class" => "row-fluid"));
$closeTagDiv = CHtml::closeTag("div");
$enter = CHtml::openTag("br");
$cloEnter = CHtml::closeTag("br");
$beginForm = CHtml::beginForm("", "post", array("id" => "mapEmpId"));
$buttonForm = CHtml::ajaxSubmitButton("Cập nhật", Yii::app()->controller->createUrl("acceptMapEmpId"),
    array(
        "dataType" => "json",
        "beforeSend" => "function(){
            $('.submitMapEmpId').button('loading');
        }",
        "success" => "function(data){
            if(data.duplicateEmpId == true){
                $('.submitMapEmpId').button('complete');
                $.fn.yiiGridView.update('mapEmpId-detail-grid', {
		            data: $(this).serialize()
	            });
            } else if(data.duplicateEmpId == false){
                bootbox.alert('Bạn chưa nhập UserID!!!');
                $('.submitMapEmpId').button('reset');
            } else {
                bootbox.alert('UserID: <b>'+data.duplicateEmpId+'</b> đã tồn tại!</br>Nhập một UserID khác!!!');
                $('.submitMapEmpId').button('reset');
            }
        }",
    ),
    array(
        "class" => "pull-right btn btn-primary submitMapEmpId",
        "data-loading-text" => "Đang cập nhật...",
        "data-complete-text" => "Cập nhật thành công"
    ));
$endForm = CHtml::endForm();
$template = $beginForm . $buttonForm . $enter . $cloEnter . '{items}{pager}' . $buttonForm . $endForm;
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'mapEmpId-detail-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
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
            'filter' => false,
        ),
        array(
            'header' => 'Tên',
            'name' => 'fullName',
            'filter' => false,
        ),
        array(
            'header' => 'Bộ phận',
            'name' => 'department_id',
            'value' => '$data->department->name',
            'filter' => CHtml::listData(Department::model()->findAll(), 'id', 'name'),
        ),
        array(
            'header' => 'Cửa hàng',
            'name' => 'shop_id',
            'value' => '$data->shop->name',
            'filter' => CHtml::listData(Shop::model()->findAll(), 'id', 'name'),
        ),
        array(
            'header' => 'UserID',
            'type' => 'raw',
            'value' => 'CHtml::textField("userID[" . $data->id . "]", $data->number, array("class" => "span","style" => "margin-bottom:0px;text-align:center;"))',
            'filter' => false,
            'htmlOptions' => array(
                'style' => 'width:80px;',
            ),
        ),
    ),
)); ?>
