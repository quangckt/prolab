<?php
$rights = Rights::getAssignedRoles();
$checkRole = isset($rights['nhanvien']) ? true : false;

Yii::app()->clientScript->registerScript('search', "
$('form#search-gade-form').submit(function(){
    if($('#Employee_shop_id').val() == ''){
        bootbox.alert('Bạn chưa chọn cửa hàng!!!');
    } else if($('#Employee_department_id').val() == ''){
        bootbox.alert('Bạn chưa chọn bô phận!!!');
    } else if($('#Employee_monthYear').val() == ''){
        bootbox.alert('Bạn chưa chọn tháng, năm!!!');
    } else{
        $('#hiddenfieldMonth').val($('#Employee_monthYear').val());
        $.fn.yiiGridView.update('hr-shift-detail-grid', {
		    data: $(this).serialize()
	    });
    }
	return false;
});
$('#btn_print').click(function () {
        if ($('#Employee_shop_id').val() == '') {
            bootbox.alert('Bạn chưa chọn cửa hàng!!!');
        } else if ($('#Employee_department_id').val() == '') {
            bootbox.alert('Bạn chưa chọn bô phận!!!');
        } else if ($('#Employee_monthYear').val() == '') {
            bootbox.alert('Bạn chưa chọn tháng, năm!!!');
        } else {
            var url = $('#btn_print').attr('href');
            var shop_id = $('#Employee_shop_id').val();
            var department_id = $('#Employee_department_id').val();
            var monthYear = $('#Employee_monthYear').val();
            var month = monthYear.substr(0, 2);
            var year = monthYear.substr(3, 4);
            var urlNew = url + '&Search[shop_id]=' + shop_id + '&Search[department_id]=' + department_id + '&Search[month]=' + month + '&Search[year]=' + year;
            $('#btn_print').attr('href', urlNew);
            return true;
        }
        return false;
    });

");
?>

<div class="row-fluid">
	<div class="span6">
		<h1 class="title">
			Tự đánh giá xếp loại
			<?php echo $checkRole ? 'tháng ' . date("m") . ' năm ' . date("Y") : null; ?>
		</h1>
	</div>
	<div class="span4"></div>
	<div class="span2">
		<div style="float: right;"></div>
	</div>
</div>
<hr />
			<?php
			if ($checkRole) {
				?>

				<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'changePass-form',
        'enableAjaxValidation' => false,
        'method' => 'post',
        'type' => 'horizontal',
        'action' => $grade->isNewRecord ? Yii::app()->controller->createUrl('acceptGrade') : Yii::app()->controller->createUrl('updateGrade', array('id' => $grade->id)),
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
            'class' => 'well',
				)
				)); ?>
<div class="row-fluid">
	<div class="span8">
		<div class="row-fluid">
			<div class="alert alert-info">
			<?php echo $gradeNote->note; ?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
			<?php echo $form->uneditableRow($employee, 'code', array('class' => 'span')); ?>
			</div>
			<div class="span6">
			<?php echo $form->uneditableRow($employee, 'fullName', array('class' => 'span')); ?>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<div class="control-group">
					<label class="control-label">Thưởng B, C</label>

					<div class="controls">
					<?php echo $form->radioButtonList($grade, 'bc', array('(B)', '(C)',), array('class' => '', 'disabled' => $grade->type != 1 ? false : true)); ?>
					</div>
				</div>
			</div>
			<div class="span6">
				<div class="control-group">
					<label class="control-label">Thưởng A+</label>

					<div class="controls">
					<?php echo $form->checkBox($grade, 'a', array('class' => '', 'disabled' => $grade->type != 1 ? false : true)); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<div class="control-group">
					<label class="control-label">Thưởng tháng</label>

					<div class="controls">
					<?php echo $form->textField($grade, 'bonusMonth', array('class' => 'span isnum', 'disabled' => $grade->type != 1 ? false : true)); ?>
					</div>
				</div>
			</div>
			<div class="span6">
			<?php echo CHtml::hiddenField('Grade[monthyear]', date('m-Y'), array('class' => 'span')); ?>
			<?php echo CHtml::hiddenField('Grade[emp_id]', $employee->id, array('class' => 'span')); ?>
			</div>
		</div>
		<div class="row-fluid">
			<div
				class="alert <?php echo $grade->type != 1 ? 'alert-warning' : 'alert-success'?>">
				<?php echo $grade->type != 1 ? 'Các bạn tự đánh giá công việc của mình và nộp lại cho tổ trưởng duyệt, tổ trưởng có quyền sửa đánh giá của từng người.' : 'Tổ trưởng đã duyệt xếp loại của bạn.' ?>
			</div>
		</div>
	</div>
	<div class="span4">
	<?php
	if ($employee->image != null) {
		echo CHtml::image(Yii::app()->request->baseUrl . '/images/' . $employee->image, "image", array('class' => 'thumbnail', 'style' => 'width:150px; margin:auto;'));
	} else {
		echo CHtml::image(Yii::app()->request->baseUrl . '/images/User.png', "image", array('class' => 'thumbnail', 'style' => 'width:150px; margin:auto;'));
	}
	?>
	</div>
</div>
	<?php if ($grade->type != 1) { ?>
<div class="row-fluid">
	<div class="form-actions span8" style="text-align: center">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => $grade->isNewRecord ? 'Chấp nhận' : 'Cập nhật',
            'icon' => 'ok white',
            'htmlOptions' => array(
                'id' => 'btn_updatePass_stateFull',
	),
	)); ?>
	</div>
</div>
	<?php } ?>
	<?php $this->endWidget(); ?>

	<?php } else { ?>
<div>
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

<?php  $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'search-gade-form',
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
));  ?>
<div class="span2">
<?php echo $form->dropDownList($model, 'shop_id', CHtml::listData(Shop::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn cửa hàng...')); ?>
</div>
<div class="span2">
<?php echo $form->dropDownList($model, 'department_id', CHtml::listData(Department::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn bộ phận...')); ?>
</div>
<div class="span2">
<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'name' => 'Employee[monthYear]',
    'language' => 'vi',
//'value' => CTimestamp::formatDate('d-m', 'Employee[monthYear]'),
    'options' => array(
        'dateFormat' => 'mm-yy',
        'changeMonth' => true,
        'changeYear' => true,
),
    'htmlOptions' => array(
        'class' => 'span datepicker',
        'placeHolder' => 'Chọn tháng,năm...',
),
));?>
</div>
<div class="span2">
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'type' => 'primary',
    'label' => 'Tìm',
    'icon' => 'search white',
)); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'link',
    'label' => 'In',
    'icon' => 'print black',
    'url' => Reports::createUrl('hr_shift_detail_grade.mrt', array()),
    'htmlOptions' => array(
        'target' => "_blank",
        'id' => 'btn_print'
        ),
        )); ?>
</div>
        <?php $this->endWidget(); ?>

        <?php
        $noteOpen = CHtml::openTag("div", array("class" => "alert alert-info", "style" => "font-size:15px;"));
        $contentNote = empty($note) ? CHtml::link("Bạn chưa nhập ghi chú cho bộ phận này, click đây để thêm mới", Yii::app()->controller->createUrl("createGradeNote", array('dep_id' => $dep_id)), array("class" => "btn btn-warning")) : $note->note . CHtml::link("Cập nhật ghi chú", Yii::app()->controller->createUrl("updateGradeNote", array('dep_id' => $dep_id)), array("class" => "btn btn-info"));
        $noteClose = CHtml::closeTag("div");
        $openTagDiv = CHtml::openTag("div", array("class" => "row-fluid"));
        $closeTagDiv = CHtml::closeTag("div");
        $enter = CHtml::openTag("br");
        $cloEnter = CHtml::closeTag("br");
        $beginForm = CHtml::beginForm("", "post", array("id" => "updateGrade"));
        $buttonForm = CHtml::ajaxSubmitButton("Cập nhật", Yii::app()->controller->createUrl("acceptGrade"),
        array(
            "dataType" => "json",
            "beforeSend" => "function(){
            //$('.submitUpdateTimeR').button('loading');
                createSession();
        }",
            "success" => "function(data){
                //unsetSession();
                if(data.susscess==1)
                    bootbox.alert('Xếp loại thành công.');
            }",
        ),
        array(
            "class" => "pull-right btn btn-primary submitUpdateTimeR",
            "data-loading-text" => "Đang cập nhật...",
            "data-complete-text" => "Cập nhật thành công"
            ));
            $endForm = CHtml::endForm();
            $template = $beginForm . $buttonForm . $enter . $cloEnter . $noteOpen . $contentNote . $noteClose . '{items}{pager}' . $buttonForm . $endForm;
            ?>

            <?php $this->widget('bootstrap.widgets.TbGridView', array(
        'id' => 'hr-shift-detail-grid',
        'type' => 'striped bordered condensed',
        'dataProvider' => $model->searchGrade($checkGrid == false ? true : false),
            //'filter' => $model,
        'selectableRows' => false,
        'template' => $template,

        'columns' => array(
            array(
                'header' => 'Mã',
                'value' => '$data->code',
                'htmlOptions' => array(
                    'style' => 'vertical-align:middle;',
            ),
            ),
            array(
                'header' => 'Tên',
                'name' => 'fullName',
                'htmlOptions' => array(
                    'style' => 'width:200px;vertical-align:middle;',
            ),
            ),
            array(
                'header' => 'A+',
                'type' => 'raw',
                'value' => array($this, 'checkA'),
                'htmlOptions' => array(
                    'style' => 'vertical-align:middle;text-align:center;',
            ),
            ),
            array(
                'header' => 'B',
                'type' => 'raw',
                'value' => array($this, 'checkB'),
                'htmlOptions' => array(
                    'style' => 'vertical-align:middle;text-align:center;',
            ),
            ),
            array(
                'header' => 'C',
                'type' => 'raw',
                'value' => array($this, 'checkC'),
                'htmlOptions' => array(
                    'style' => 'vertical-align:middle;text-align:center;',
            ),
            ),
            array(
                'header' => 'Thưởng tháng',
                'type' => 'raw',
                'value' => array($this, 'checkBonusMonth'),
                'htmlOptions' => array(
                    'style' => 'vertical-align:middle;',
            ),
            ),
            array(
                'header' => 'TG LV theo lịch',
                'value' => array($this, 'timeOfShift'),
                'htmlOptions' => array(
                    'style' => 'vertical-align:middle;text-align:center;',
            ),
            ),
            array(
                'header' => 'TG LV thực tế',
                'value' => array($this, 'timeOfTr'),
                'htmlOptions' => array(
                    'style' => 'vertical-align:middle;text-align:center;',
            ),
            ),
            array(
                'header' => 'Tỷ lệ TGLV (%)',
                'type' => 'numbertwo',
                'value' => array($this, 'rateTr'),
                'htmlOptions' => array(
                    'style' => 'vertical-align:middle;text-align:center;',
            ),
            ),
            array(
                'header' => 'Nghỉ có phép',
                'name' => 'sumAllowDayOf',
                'htmlOptions' => array(
                    'style' => 'vertical-align:middle;text-align:center;',
            ),
            ),
            array(
                'header' => 'Nghỉ kh phép',
                'name' => 'sumUnAllowDayOf',
                'htmlOptions' => array(
                    'style' => 'vertical-align:middle;text-align:center;',
            ),
            ),
            array(
                'header' => 'Nhận xét của tổ trưởng',
                'type' => 'raw',
                'value' => array($this, 'checkNote'),
                'htmlOptions' => array(
                    'style' => 'width:300px;vertical-align:middle;',
            ),
            ),
            ),
            )); ?>
            <?php
	}?>
<script type="text/javascript">
    window.onbeforeunload = function () {
        if (clicked == false) {
        }
    };
    $('#hr-shift-detail-grid').attr('style', 'display:none');
    var createSession = function () {
        var month = $('#Employee_monthYear').val();
        var url = '<?php echo Yii::app()->controller->createUrl("sessionNew"); ?>';
        $.post(url, {name:'month', value:month});
    };
    var unsetSession = function () {
        var url = '<?php echo Yii::app()->controller->createUrl("sessionUnset"); ?>';
        $.post(url);
    }
</script>
