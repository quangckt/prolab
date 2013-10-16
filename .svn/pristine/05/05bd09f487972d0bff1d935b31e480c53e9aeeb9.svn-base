<?php if($model->emp_id==null) $model->emp_id=-1 ;?>
<tr class="line_emp">
    <td style="width: 0px;display: none;">
        <?php echo $form->hiddenField($model,"[$id]emp_id", array('class'=>'span')); ?>
    </td>
    <td>
    <?php echo $form->dropDownList($model,"[$id]type_relation",CHtml::listData(RelationType::model()->findAll(),'id','name'),array('prompt'=>'Chọn...','class'=>'span firstfocus')); ?>
        
    </td>
    <td>
        <?php echo $form->textField($model,"[$id]fullname", array('class'=>'span')); ?>
    </td>
    <td>
        <?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'=>$model,
            'value'=>"[$id]birthday",
            'attribute'=>"[$id]birthday",
            'language' => 'vi',
            'options'=>array(
            'dateFormat'=>'dd-mm-yy',
            ),
            'htmlOptions'=>array('class'=>'span datepicker' ),
            ));
        ?>  
    </td>
    <td>
        <?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model'=>$model,
            'value'=>"[$id]weddingday",
            'attribute'=>"[$id]weddingday",
            'language' => 'vi',
            'options'=>array(
            'dateFormat'=>'dd-mm-yy',
            ),
            'htmlOptions'=>array('class'=>'span datepicker' ),
            ));
        ?>
    </td>
    <td>
        <a href="#" class="remove-line icon-trash" tabIndex='-1'  rel="tooltip" title="Xóa dòng" ></a>
    </td>
</tr>
