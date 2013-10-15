<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'proout-form',
        'enableAjaxValidation' => false,
        'method' => 'post',
        'type' => 'vertical',
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
            'class' => 'well'
        )
    ));
    ?>
    <div class="row-fluid">
        <div class="span2">
            <?php echo $form->textFieldRow($model, 'dateout', array('class' => 'span')); ?>
        </div>
        <div class="span2">
            <?php echo $form->textFieldRow($model, 'numout', array('class' => 'span', 'maxlength' => 255)); ?>
        </div>
        <div class="span2">
            <?php
            echo $form->dropDownListRow($model, 'inv_whouttype_id', CHtml::listData(WarehouseoutType::model()->findAll(), 'id', 'name'), array('class' => 'span', 'empty' => 'Chọn...',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->controller->createUrl('loadWareHouse'),
                    'complete' => 'function(data){
                                if(data.responseText=="empty"){
                                    //$("#Warehouseout_wh_id").attr("disabled",true);
                                }else{
                                    //$("#Warehouseout_wh_id").attr("disabled",false);
                                }
                                
                            }',
                    'update' => '#Proout_inv_wh_id',
                    'data' => array('whotype_id' => 'js:this.value')
                )
            ));
            ?>
        </div>
        <div class="span3">
            <?php echo $form->labelEx($model, 'user1') ?>
            <span class="span uneditable-input"> <?php echo $model->getUserInfo(Yii::app()->user->id, Yii::app()->user->name); ?></span>
        </div>
        <div class="span3">
            <?php echo $form->dropDownListRow($model, 'user2', CHtml::listData(Employee::model()->findAll('status=0'), 'id', 'fullName'), array('class' => 'span', 'empty' => 'Chọn...')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3">
            <?php echo $form->dropDownListRow($model, 'inv_wh_id', CHtml::listData(warehouse::model()->findAll(), 'id', 'name'), array('class' => 'span', 'empty' => 'Chọn...')); ?>
        </div>
        <div class="span9">
            <?php echo $form->textFieldRow($model, 'note', array('class' => 'span', 'maxlength' => 500)); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span2">
            <?php
            echo $form->dropDownListRow($model, 'pm_print_id', CHtml::listData(Printer::model()->findAll(), 'id', 'name'), array('class' => 'span', 'empty' => 'Chọn...',
                'ajax' => array(
                    'type' => 'post',
                    'url' => Yii::app()->controller->createUrl('loadPrinterPlan'),
                    'data' => 'js:{printer_id:$(this).val()}',
                    'update' => '#Proout_pm_printplan_id',
                    'complete' => 'function(data){
                                if(data.responseText=="empty"){
                                   // $("#Warehouseout_pp_id").attr("disabled",true);
                                }else{
                                    //$("#Warehouseout_pp_id").attr("disabled",false);
                                }
                            }'
                )
            ));
            ?>
        </div>
        <div class="span4">
            <?php echo $form->dropDownListRow($model, 'pm_printplan_id', CHtml::listData(PrinterPlan::model()->findAll('status=' . PrinterPlan::statusEnable), 'id', 'printerPlan'), array('class' => 'span', 'empty' => 'Chọn...')); ?>
        </div>
        <div class="span6">
            <?php echo $form->textFieldRow($model, 'existbegin', array('class' => 'span', 'maxlength' => 19)); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span5">
            <?php echo $form->textFieldRow($model, 'product_item_id', array('class' => 'span')); ?>
        </div>
        <div class="span2">
            <?php echo $form->textFieldRow($model, 'product_item_id', array('class' => 'span')); ?>
        </div>
        <div class="span2">
            <?php echo $form->textFieldRow($model, 'product_item_id', array('class' => 'span')); ?>
        </div>
        <div class="span3">
            <?php echo $form->textFieldRow($model, 'product_item_id', array('class' => 'span')); ?>
        </div>
    </div>
    <div class="form-actions">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
        ));
        ?>
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'reset',
            'icon' => 'remove',
            'label' => 'Hủy',
        ));
        ?>
    </div>
    <?php $this->endWidget(); ?>
</div>