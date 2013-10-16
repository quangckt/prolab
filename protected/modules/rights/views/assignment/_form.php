<div class="form well well-small">
    <?php $form = $this->beginWidget('CActiveForm'); ?>
    <div class="row-fluid" style="font-weight: bold; margin-bottom: 2px;">
        <?php echo Rights::t('core', 'Chọn vai trò, nhiệm vụ, hành động...'); ?>
    </div>
    <div class="row-fluid">
        <?php //echo $form->dropDownList($model, 'itemname', $itemnameSelectOptions); ?>
        <?php
        $this->widget('ext.ESelect2.ESelect2', array(
            'model' => $model,
            'attribute' => 'itemname',
            'data' => $itemnameSelectOptions,
            'htmlOptions' => array(
                'class' => 'span',
                'multiple' => 'multiple',
            )
        ))
        ?>
        <?php echo $form->error($model, 'itemname'); ?>
    </div>	
    <div class="row-fluid">
        <div class="span12">
            <?php echo CHtml::submitButton(Rights::t('core', 'Thêm'), array('class' => 'btn btn-primary')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>