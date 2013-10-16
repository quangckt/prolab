<?php if($model->emp_id==null) $model->emp_id=-1 ;?>
<tr class="line_emp">
	<td style="display: none; width: 0px;"><?php echo $form->hiddenField($model,"[$id]emp_id", array('class'=>'span')); ?>
	</td>
	<td><?php echo $form->textField($model,"[$id]company", array('class'=>'span firstfocus')); ?>
	</td>
	<td><?php echo $form->textField($model,"[$id]description", array('class'=>'span')); ?>
	</td>
	<td><?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'value'=>"[$id]todate",
			'attribute'=>"[$id]todate",
			'language' => 'vi',
			'options'=>array(
            'dateFormat'=>'dd-mm-yy',
            ),
            'htmlOptions'=>array('class'=>'span datepicker' ),
	));
	?>
	</td>
	<td><?php	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model'=>$model,
			'value'=>"[$id]fromdate",
			'attribute'=>"[$id]fromdate",
			'language' => 'vi',
			'options'=>array(
            'dateFormat'=>'dd-mm-yy',
            ),
            'htmlOptions'=>array('class'=>'span datepicker' ),
	));
	?>
	</td>
	<td><a href="#" class="remove-line icon-trash" tabIndex='-1'
		rel="tooltip" title="Xóa dòng"></a>
	</td>
</tr>
