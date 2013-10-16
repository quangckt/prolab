<div class="well">
    <?php if ($checkRole) {

} else {
    ?>
    <div class="row-fluid">
        <div class="span4">
            <?php echo $form->dropDownListRow($model, 'shop_id', CHtml::listData(Shop::model()->findAll(), 'id', 'name'), array('prompt' => 'Chọn...', 'class' => 'span', 'readonly' => $model->isNewRecord ? false : true)); ?>
        </div>
        <div class="span4">
            <?php echo $form->dropDownListRow($model, 'job_id', CHtml::listData(Job::model()->findAll(), 'id', 'name'), array('prompt' => 'Chọn...', 'class' => 'span', 'readonly' => $model->isNewRecord ? false : true)); ?>
        </div>
        <div class="span4">
            <?php echo $form->dropDownListRow($model, 'department_id', CHtml::listData(Department::model()->findAll(), 'id', 'name'), array('prompt' => 'Chọn...', 'class' => 'span', 'readonly' => $model->isNewRecord ? false : true)); ?>
        </div>

    </div>
    <div class="row-fluid">
        <div class="span3">
            <?php echo $form->labelEx($model, 'probationary_date', array('class' => ' ')); ?>
            <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->probationary_date),
            'attribute' => 'probationary_date',
            'language' => 'vi',
            'options' => array(
                'dateFormat' => 'dd-mm-yy',
            ),
            'htmlOptions' => array('class' => 'span'),
        ));
            ?>
        </div>
        <div class="span3">
            <?php echo $form->labelEx($model, 'official_register_date', array('class' => ' ')); ?>
            <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->official_register_date),
            'attribute' => 'official_register_date',
            'language' => 'vi',
            'options' => array(
                'dateFormat' => 'dd-mm-yy',
            ),
            'htmlOptions' => array('class' => 'span'),
        ));
            ?>
        </div>
        <div class="span3">
            <?php echo $form->dropDownListRow($model, 'type', array('0' => "Trực Tiếp", '1' => "Gián Tiếp"), array('prompt' => 'Chọn...', 'class' => 'span')); ?>
        </div>
        <div class="span3">
            <?php echo $form->dropDownListRow($model, 'status', array('0' => "Đang làm việc", '1' => "Nghỉ việc"), array('class' => 'span', 'readonly' => $model->isNewRecord ? false : true)); ?>
        </div>
    </div>
    <div class="row-fluid" id="status_description_all" style="display:none;">
        <div class="span2">
            <?php echo $form->textFieldRow($model, 'date_layoff', array('class' => 'span', 'readonly' => $model->isNewRecord ? false : true)); ?>
        </div>
        <div class="span10">
            <?php echo $form->textFieldRow($model, 'description_layoff', array('class' => 'span', 'readonly' => $model->isNewRecord ? false : true)); ?>
        </div>
    </div>
    <?php }?>
    <div>
        <h6>Quá Trình Công Tác</h6>
    </div>
    <table class="tabularInput" id="emp_history" style="width: 100%;">
        <thead>
        <tr>
            <th style="display: none;width: 0px;">
            </th>
            <th>
                <label>Công ty</label>
            </th>
            <th>
                <label>Chức vụ</label>
            </th>
            <th>
                <label>Ngày bắt đầu</label>
            </th>
            <th>
                <label>Ngày kết thúc</label>
            </th>
            <th>
                <label>Ghi chú</label>
            </th>
            <th>
            </th>
        </tr>
        </thead>
        <tbody class="lines">
        <?php foreach ($lines_history->items as $id => $line): ?>
            <?php $this->renderPartial('_emp_history_tr', array('form' => $form, 'model' => $line, 'id' => $id)); ?>
            <?php endforeach;?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="6">
                <a href="#" class="add-line"><i class="icon-plus"></i>Thêm dòng</a>
            </td>
        </tr>
        </tfoot>
    </table>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        if ($('#Employee_status').val() == 1) {
            $('#status_description_all').show();
        } else {
            $('#status_description_all').hide();
        }
    });
    $('#Employee_status').change(function () {
        if ($('#Employee_status').val() == 1) {
            alert('Hồ sơ nhân viên nghỉ việc sẽ không thay đổi được trong tương lai !');
            $('#status_description_all').slideDown('slow');
        } else {
            $('#status_description_all').slideUp('slow');
        }

    });
</script>