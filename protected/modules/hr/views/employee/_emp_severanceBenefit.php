<div class="row-fluid">
    <div class="span2">
    <?php echo $form->labelEx($model,'probationary_date',array('class'=>' ')); ?>
    <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model,
        'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->probationary_date),
        'attribute'=>'probationary_date',
        'language' => 'vi',
        'options'=>array(
        'dateFormat'=>'dd-mm-yy',
        ),
        'htmlOptions'=>array('class'=>'span' ),
    ));
    ?>
    </div>
    <div class="span2">
    <?php echo $form->labelEx($model,'official_register_date',array('class'=>' ')); ?>
    <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model'=>$model,
        'value'=>CTimestamp::formatDate('yyyy-MM-dd',$model->official_register_date),
        'attribute'=>'official_register_date',
        'language' => 'vi',
        'options'=>array(
        'dateFormat'=>'dd-mm-yy',
        ),
        'htmlOptions'=>array('class'=>'span' ),
    ));
    ?>
    </div>
    <div class="span2">
        <?php echo $form->textFieldRow($model,'cumulative',array('class'=>'span')); ?>
    </div>
    <div class="span2">
        <?php echo $form->textFieldRow($model,'cumulative',array('class'=>'span')); ?>
    </div>
</div>