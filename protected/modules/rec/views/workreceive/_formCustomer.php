<?php
Yii::app()->clientScript->registerScript('popover', '
    $("#areaLink").tooltip({
        placement: "left",
        title: "Thêm khu vực"
    });
    $("#delivergroupLink").tooltip({
        placement: "left",
        title: "Thêm nhóm đi giao"
    });
    $("#produceLink").tooltip({
        placement: "left",
        title: "Thêm ngành nghề"
    });
    $("body").tooltip({
        placement: "left",
        selector: "[rel=tooltip]"
    });
    $(".area").popover({
        animation: true,
        html: true,
        placement: "top",
        selector: false,
        trigger: "manual", // click | hover | focus | manual
        title: "Thêm khu vực",
        content: function() {
            return $("#popover_content_wrapper_area").html();
        },
        delay: {
            show: 200,
            hide: 200
        },
        container: false
    }).data("popover").tip().css("z-index", 1030);
    $("#delivergroupLink").popover({
        animation: true,
        html: true,
        placement: "left",
        selector: false,
        trigger: "manual", // click | hover | focus | manual
        title: "Thêm nhóm đi giao",
        content: function() {
            return $("#popover_content_wrapper_delivergroup").html();
        },
        delay: {
            show: 200,
            hide: 200
        },
        container: false
    }).data("popover").tip().css("z-index", 1030);
    $("#produceLink").popover({
        animation: true,
        html: true,
        placement: "top",
        selector: false,
        trigger: "manual", // click | hover | focus | manual
        title: "Thêm ngành nghề",
        content: function() {
            return $("#popover_content_wrapper_produce").html();
        },
        delay: {
            show: 200,
            hide: 200
        },
        container: false
    }).data("popover").tip().css("z-index", 1030);
    $(".area").each(function() {
        $(this).click(function() {
            $(this).popover("show");
            $(".areaTitle").focus();
            $(".popover").addClass("animated wiggle");
        });
    });
    $("#delivergroupLink").each(function() {
        $(this).click(function() {
            $(this).popover("show");
            $(".delivergroupTitle").focus();
            $(".popover").addClass("animated wiggle");
        });
    });
    $("#produceLink").each(function() {
        $(this).click(function() {
            $(this).popover("show");
            $(".produceTitle").focus();
            $(".popover").addClass("animated wiggle");
        });
    });
    $("body").on("click", function(e) {
        $(".area").each(function() {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $(".popover").has(e.target).length === 0) {
                $(this).popover("hide");
      }
        });
        $("#delivergroupLink").each(function() {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $(".popover").has(e.target).length === 0) {
                $(this).popover("hide");
      }
        });
        $("#produceLink").each(function() {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $(".popover").has(e.target).length === 0) {
                $(this).popover("hide");
      }
        });
    });
');
?>

<div class="well well-small content-box" style="margin-bottom: 10px;">
    <div id="ribbon-container" style="display: none">
        <a href="test.html" id="ribbon">Sửa</a>
    </div>
    <div class="row-fluid">
        <?php echo CHtml::label('Thông tin khách hàng', '', array('class' => 'label label-info span', 'style' => 'font-size:16px;text-align:center;padding-top:7px;')); ?>
    </div>
    <div class="row-fluid">
        <div class="span3">
            <?php echo CHtml::label('Mã khách hàng', '', array()); ?>
            <?php echo $form->textField($customer, 'code', array('class' => 'span')); ?>
        </div>
        <div class="span6">
            <?php echo CHtml::label('Tên khách hàng', '', array()); ?>
            <?php echo $form->textField($customer, 'name', array('class' => 'span')); ?>
        </div>
        <div class="span3">
            <?php echo CHtml::label('ĐT cơ sở', '', array()); ?>
            <?php echo $form->textField($customer, 'tel', array('class' => 'span')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <?php echo CHtml::label('Tên cơ sở', '', array()); ?>
            <?php echo $form->textField($customer, 'company', array('class' => 'span')); ?>
        </div>
        <div class="span6">
            <?php echo CHtml::label('Chủ cơ sở', '', array()); ?>
            <?php echo $form->textField($customer, 'manager', array('class' => 'span')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span4">
            <?php echo CHtml::label('Email', '', array()); ?>
            <?php echo $form->textField($customer, 'email', array('class' => 'span')); ?>
        </div>
        <div class="span5">
            <?php echo CHtml::label('Địa chỉ', '', array()); ?>
            <?php echo $form->textField($customer, 'address', array('class' => 'span')); ?>
        </div>
        <div class="span3">
            <?php echo CHtml::label('ĐT DĐ', '', array()); ?>
            <?php echo $form->textField($customer, 'phone', array('class' => 'span')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <?php echo CHtml::label('Khu vực', '', array('style' => 'display:inline-block;')); ?><?php echo CHtml::link('', 'javascript:void(0)', array('class' => 'pull-right icon-plus area showHideLink', 'id' => 'areaLink', 'style' => 'display:none')); ?>
            <?php echo $form->dropDownList($customer, 'rec_area_id', CHtml::listData(Area::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn...')); ?>
        </div>
        <div class="span6">
            <?php echo CHtml::label('Nhóm đi giao', '', array('style' => 'display:inline-block;')); ?><?php echo CHtml::link('', 'javascript:void(0)', array('class' => 'icon-plus pull-right showHideLink', 'id' => 'delivergroupLink', 'style' => 'display:none')); ?>
            <?php echo $form->dropDownList($customer, 'rec_delivergroup_id', CHtml::listData(Godelivergroup::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn...')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <?php echo CHtml::label('Ngành nghề', '', array('style' => 'display:inline-block;')); ?><?php echo CHtml::link('', 'javascript:void(0)', array('class' => 'icon-plus pull-right showHideLink', 'id' => 'produceLink', 'style' => 'display:none')); ?>
            <?php echo $form->dropDownList($customer, 'rec_produce_id', CHtml::listData(Produce::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn...')); ?>
        </div>
        <div class="span6">
            <?php echo CHtml::label('NV chăm sóc KH', '', array()); ?>
            <?php echo $form->dropDownList($customer, 'emp_id', CHtml::listData(Employee::model()->findAll('status=0'), 'id', 'fullName'), array('class' => 'span', 'prompt' => 'Chọn...')); ?>
        </div>
    </div>
</div>