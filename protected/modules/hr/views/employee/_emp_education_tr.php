<?php if($model->emp_id==null) $model->emp_id=-1 ;?>
<tr class="line_emp">
    <td style="width: 0px;display: none;">
        <?php echo $form->hiddenField($model,"[$id]emp_id", array('class'=>'span')); ?>
    </td>
    <td>
    <?php echo $form->dropDownList($model,"[$id]levelofedu",CHtml::listData(Levelofedu::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span firstfocus')); ?>
        
    </td>
    <td>
        <?php echo $form->textField($model,"[$id]study_at", array('class'=>'span')); ?>
    </td>
    <td>
        <?php echo $form->textField($model,"[$id]study_long", array('class'=>'span')); ?>
    </td>
    <td>
        <?php echo $form->dropDownList($model,"[$id]study_field",CHtml::listData(StudyField::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span')); ?>
    </td>
    <td>
        <?php echo $form->textField($model,"[$id]finished_year", array('class'=>'span')); ?>
    </td>
    <td>
        <a href="#" class="remove-line icon-trash" tabIndex='-1'  rel="tooltip" title="Xóa dòng" ></a>
    </td>
</tr>
