<?php if($model->general_timeinout_id==null) $model->general_timeinout_id=-1 ;?>
<tr class="line_timeinout">
    <td style="display: none;width: 0px;">
        <?php echo $form->hiddenField($model,"[$id]general_timeinout_id", array('class'=>'span')); ?>
    </td>
    <td>
        <?php echo $form->dropDownList($model,"[$id]type",array(0=>'Giờ đến',1=>'Giờ về'),array('prompt'=>'Chọn...','class'=>'span')) ;?>
    </td>
    <td >
        <?php echo $form->dropDownList($model,"[$id]typeSoonLate",array(1=>'Sớm',2=>'Muộn'),array('prompt'=>'Chọn...','class'=>'span')); ?>
    </td>
    <td>
       <?php  echo $form->textField($model,'time',array('class'=>'span'));?>       
    </td>
    <td>
        <?php echo $form->textField($model,"[$id]rate",array('class'=>'span')); ?>
    </td>
    <td>
        <?php echo $form->textField($model,"[$id]note",array('class'=>'span')); ?>
    </td>
    <td>
        <a href="#" class="remove-line icon-trash" tabIndex='-1'  rel="tooltip" title="Xóa dòng" ></a>
    </td>
</tr>
