<div class="well">
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'paramsalary-form',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
)
)); ?>
	<div class="row-fluid">
		<div class="span6">
			<div class="row-fluid">
				<fieldset class="well">
					<legend>Tham số lương tháng</legend>
					<div class="row-fluid">
					<?php if ($model->hasErrors()) Yii::app()->user->setFlash('error', $form->errorSummary(array($model), 'Thông báo lỗi!!!', null, array('class' => 'span'))); ?>
						<div class="span4">
						<?php echo $form->dropDownListRow($model, 'shop_id', CHtml::listData(Shop::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn cửa hàng...')); ?>
						</div>
						<div class="span4">
						<?php echo CHtml::activeLabelEx($model, 'month', array('class' => '')); ?>
						<?php echo $form->numberField($model, 'month', array('class' => 'span', 'value' => !empty($model->month) ? $model->month : date('m'))); ?>
						</div>
						<div class="span4">
						<?php echo CHtml::activeLabelEx($model, 'year', array('class' => '')); ?>
						<?php echo $form->numberField($model, 'year', array('class' => 'span', 'value' => !empty($model->year) ? $model->year : date('Y'))); ?>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span4">
						<?php echo $form->textFieldRow($model, 'amountOfRice', array('class' => 'span isnum', 'maxlength' => 19)); ?>
						</div>
						<div class="span4">
						<?php echo $form->textFieldRow($model, 'basic', array('class' => 'span isnum', 'maxlength' => 19)); ?>
						</div>
						<div class="span4">
						<?php echo $form->textFieldRow($model, 'rateIndirecSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span6">
						<?php echo $form->textFieldRow($model, 'totalBonusDirecSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
						</div>
						<div class="span6">
						<?php echo $form->textFieldRow($model, 'totalBonusIndirectSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span4">
						<?php echo $form->textFieldRow($model, 'productSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
						</div>
						<div class="span4">
						<?php echo $form->textFieldRow($model, 'addIndirectSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
						</div>
						<div class="span4">
						<?php echo $form->textFieldRow($model, 'reserFundSal', array('class' => 'span isnum', 'maxlength' => 19)); ?>
						</div>
					</div>
				</fieldset>
			</div>
			<div class="row-fluid">
				<fieldset class="well">
					<legend>Dự trữ lương tháng</legend>
					<div id="reverFundSal">
						<table border="1" style="border: 1px #FFFFFF solid" width="100%">
							<thead>
								<tr>
									<th>Đầu kỳ</th>
									<th>Phát sinh có</th>
									<th>Phát sinh nợ</th>
									<th>Cuối kỳ</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?php echo CHtml::textField('test[dauky]', '', array('class' => 'span isnum', 'style' => 'margin:0px;')); ?>
									</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</fieldset>
			</div>
		</div>
		<div class="span6">
			<div class="row-fluid">
				<fieldset class="well">
					<legend>Tỷ lệ quỹ lương bộ phận</legend>
					<div class="row-fluid" id="rateDepSal">
						<table border="1" style="border: 1px #FFFFFF solid" width="100%">
							<thead>
								<tr>
									<th>Bộ phận</th>
									<th>% Bộ phận</th>
									<th>Quỹ lương</th>
									<th>Giờ LV+BL</th>
									<th>Giá trị 1 giờ LV</th>
								</tr>
							</thead>
							<tbody>
							<?php $department = Department::model()->findAll();
							foreach ($department as $item) {
								?>
								<tr>
									<td><?php echo $item->attributes['name']?></td>
									<td><?php echo CHtml::textField('test[' . $item->attributes["id"] . ']', '', array('class' => 'span isnum', 'style' => 'margin:0px; height:10px;')); ?>
									</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
	<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'ajaxSubmit',
    'type' => 'primary',
    'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
    'loadingText' => 'Đang tạo...',
    'icon' => 'ok white',
    'url' => Yii::app()->controller->createUrl('createParamSal'),
    'htmlOptions' => array(
        'class' => 'btn_createUpdate',
        'id' => 'btn_createUpdate',
        'name' => 'btn_createUpdate',
	),
    'ajaxOptions' => array(
        'dataType' => 'json',
        'beforeSend' => 'function(){
				$(".btn_createUpdate").button("loading");
			}',
        'success' => 'function(data){
                    var html = "";
                    html +="<span class=\"alert alert-error\" style=\"font-weight: bold;\">Thông báo!!!</span><br/><br/>";
                    if("Paramsalary_shop_id" in data){
                        html += data.Paramsalary_shop_id[0]+"<br/>";
                    }
                    if("Paramsalary_month" in data){
                        html += data.Paramsalary_month[0]+"<br/>";
                    }
                    if("Paramsalary_year" in data){
                        html += data.Paramsalary_year[0]+"<br/>";
                    }
                    if("Paramsalary_amountOfRice" in data){
                        html += data.Paramsalary_amountOfRice[0]+"<br/>";
                    }
                    if("Paramsalary_basic" in data){
                        html += data.Paramsalary_basic[0]+"<br/>";
                    }
                    if("Paramsalary_rateIndirecSal" in data){
                        html += data.Paramsalary_rateIndirecSal[0]+"<br/>";
                    }
                    if("Paramsalary_totalBonusDirecSal" in data){
                        html += data.Paramsalary_totalBonusDirecSal[0]+"<br/>";
                    }
                    if("Paramsalary_totalBonusIndirectSal" in data){
                        html += data.Paramsalary_totalBonusIndirectSal[0]+"<br/>";
                    }
                    if("Paramsalary_productSal" in data){
                        html += data.Paramsalary_productSal[0]+"<br/>";
                    }
                    if("Paramsalary_addIndirectSal" in data){
                        html += data.Paramsalary_addIndirectSal[0]+"<br/>";
                    }
                    if("Paramsalary_reserFundSal" in data){
                        html += data.Paramsalary_reserFundSal[0];
                    }
                    if(html != ""){
                        $(".btn_createUpdate").button("reset");
                        bootbox.alert(html);
                    }
                    if("month" in data){
                        $(".btn_createUpdate").button("reset");
                        bootbox.alert(data.month);
                    }
                    if("year" in data){
                        $(".btn_createUpdate").button("reset");
                        bootbox.alert(data.year);
                    }

			}',
	),
	)); ?>
	<?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'reset',
    'icon' => 'remove',
    'label' => 'Hủy',
	)); ?>
	</div>
	<?php $this->endWidget(); ?>
</div>
