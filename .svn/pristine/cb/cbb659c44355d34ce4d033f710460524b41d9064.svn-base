<?php if ($model->emp_id == null) $model->emp_id = -1; ?>
<tr class="line_payPeriod">
    <!--<td style="width: 0px;display: none;">
        <?php /*//echo $form->hiddenField($model, "[$id]emp_id", array('class' => 'span')); */?>
    </td>-->
    <!--<td>
        <?php /*echo CHtml::textField("[$id]name", '', array('class' => 'span', 'disabled' => true, 'placeholder' => 'Chọn mã nhân viên...')); */?>
    </td>-->
    <td style="width: 200px;">
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model' => $model,
        'value' => "[$id]date",
        'attribute' => "[$id]date",
        'language' => 'vi',
        'options' => array(
            'dateFormat' => 'dd-mm-yy',
        ),
        'htmlOptions' => array('class' => 'span datepicker'),
    ));
        ?>
    </td>
    <td>
        <?php echo $form->dropDownList($model, "[$id]emp_id", CHtml::listData($listEmp, 'emp_id', 'fullName'), array('prompt' => 'Chọn...', 'class' => 'span', 'onclick' => 'js:{checkDate(this);}')); ?>

    </td>
    <!--<td>
        <?php /*echo CHtml::textField("[$id]valueLoan", '', array('class' => 'span isnum', 'disabled' => true, 'placeholder' => 'Chọn mã nhân viên...')); */?>
    </td>-->
    <td>
        <?php echo $form->textField($model, "[$id]amt", array('class' => 'span isnum', 'onfocus' => 'js:{checkName(this);}')); ?>
    </td>
    <td>
        <a href="#" class="remove-line icon-trash" tabIndex='-1' rel="tooltip" title="Xóa dòng"></a>
    </td>
</tr>
