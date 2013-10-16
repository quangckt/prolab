<?php
$model->user_id = empty($model->user_id) ? yii::app()->user->id : $model->user_id;
$user = Employee::model()->find('number=:number', array(':number' => $model->user_id));
$userCode = $user->code;
$userName = $user->fullName;
?>
<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'worklist-form',
        'enableAjaxValidation' => false,
        'method' => 'post',
        'type' => 'vertical',
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
            'class' => 'well'
        )
    ));
    ?>
    <?php
    if ($model->hasErrors())
        Yii::app()->user->setFlash('error', $form->errorSummary($model, 'Thông báo lỗi!!!', null, array('class' => '')));
    ?>
    <div class="row-fluid">
        <div class="span3">
            <div class="input-prepend">
                <span class="add-on"><?php echo $form->labelEx($model, 'user_id', array()); ?></span>
                <?php echo CHtml::activeHiddenField($model, 'user_id', array()); ?>
                <span class="add-on" style="border-top-right-radius: 4px; border-bottom-right-radius: 4px;"><?php echo CHtml::label($userCode, '', array('class' => 'label label-info', 'style' => 'font-size: 14px;')); ?></span>

            </div>    
        </div>
        <div class="span9">
            <div class="input-prepend">
                <span class="add-on"><?php echo CHtml::label('Tên nhân viên', '', array()); ?></span>
                <span class="add-on" style="border-top-right-radius: 4px; border-bottom-right-radius: 4px"><?php echo CHtml::label($userName, '', array('class' => 'label label-info', 'style' => 'font-size: 14px;')); ?></span>

            </div>    
        </div>
    </div>
    <div class="row-fluid">
        <div class="span2">
            <?php echo $form->textFieldRow($model, 'code', array('class' => 'span', 'maxlength' => 255)); ?>
        </div>
        <div class="span4">
            <?php echo $form->textFieldRow($model, 'name', array('class' => 'span', 'maxlength' => 255)); ?>
        </div>
        <div class="span2">
            <?php echo $form->dropDownListRow($model, 'product_uom_id', CHtml::listData(Uom::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn...')); ?>
        </div>
        <div class="span4">
            <?php echo $form->dropDownListRow($model, 'rec_waycallprice_id', CHtml::listData(Waycalcprice::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn...')); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3">
            <?php
            echo $form->dropDownListRow($model, 'rec_aggregatesale_id', CHtml::listData(Aggregatesales::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn...',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->controller->createUrl('loaddetailsale'),
                    'complete' => 'function(data){
                        $("#detailSale").attr("disabled",false);
                    }',
                    'update' => '#detailSale',
                    'data' => array('rec_aggregatesale_id' => 'js:this.value')
            )));
            ?>
        </div>
        <div class="span3">
            <?php echo $form->dropDownListRow($model, 'rec_detailsale_id', empty($model->rec_aggregatesale_id) ? CHtml::listData(Detailssales::model()->findAll(), 'id', 'name') : CHtml::listData(Detailssales::model()->findAll('rec_aggreSale_id=:rec_aggreSale_id', array(':rec_aggreSale_id' => $model->rec_aggregatesale_id)), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn...', 'id' => 'detailSale', 'disabled' => empty($model->rec_aggregatesale_id) ? true : false)); ?>
        </div>
        <div class="span3">
            <?php echo $form->dropDownListRow($model, 'rec_grouprevenue_id', CHtml::listData(Grouprevenue::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn...')); ?>
        </div>
        <div class="span3">
            <?php
            echo $form->dropDownListRow($model, 'rec_process_id', CHtml::listData(Processes::model()->findAll(array('order' => 'code')), 'id', 'code'), array('class' => 'span', 'prompt' => 'Chọn...',
                'ajax' => array(
                    'type' => 'POST',
                    'url' => Yii::app()->controller->createUrl('loadProcessDetail'),
                    'complete' => 'function(data){
                        $("#divProcessDetail").slideDown("fast");
                        $("#processDetail").fadeOut("fast");
                        $("#processDetail").fadeIn("fast");
                    }',
                    'update' => '#processDetail',
                    'data' => array('process_id' => 'js:this.value')
                )
            ));
            ?>
        </div>
    </div>
    <div class="row-fluid" style="display: none;" id="divProcessDetail">
        <div class="well well-small" style="margin-bottom: 5px; padding-bottom: 5px;" id="processDetail">
            <?php
            if (!empty($model->rec_process_id)) {
                echo '<script>$("#divProcessDetail").attr("style","display:auto;")</script>';
                $data = Processes::model()->find('id=:id', array(':id' => (int) $model->rec_process_id));
                if (ord($data->distribute)) {
                    $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'distribute'));
                    echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
                }
                if (ord($data->scan)) {
                    $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'scan'));
                    echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
                }
                if (ord($data->process)) {
                    $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'process'));
                    echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
                }
                if (ord($data->printImage)) {
                    $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'printImage'));
                    echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
                }
                if (ord($data->productGC)) {
                    $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'productGC'));
                    echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
                }
                if (ord($data->printPayment)) {
                    $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'printPayment'));
                    echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
                }
                if (ord($data->deliverStails)) {
                    $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'deliverStails'));
                    echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
                }
                if (ord($data->deliverCustomer)) {
                    $modelNew = Sys::model()->find('modelName=:modelName and fieldName=:fieldName', array(':modelName' => get_class(Processes::model()), ':fieldName' => 'deliverCustomer'));
                    echo CHtml::label($modelNew->attributeLabel, '', array('class' => 'label label-info', 'style' => 'margin-right: 10px; font-size: 14px;'));
                }
            }
            ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3">
            <?php echo $form->dropDownListRow($model, 'rec_materiproduct_id', CHtml::listData(Materialproduction::model()->findAll(array('order' => 'name')), 'id', 'name'), array('class' => 'span', 'prompt' => 'Chọn...')); ?>
        </div>
        <div class="span3">
            <?php echo $form->textFieldRow($model, 'productout', array('class' => 'span', 'maxlength' => 255)); ?>
        </div>
        <div class="span3">
            <?php echo $form->textFieldRow($model, 'materilogical1', array('class' => 'span', 'maxlength' => 255)); ?>
        </div>
        <div class="span3">
            <?php echo $form->textFieldRow($model, 'materilogical2', array('class' => 'span', 'maxlength' => 255)); ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span3">
            <?php echo $form->textFieldRow($model, 'materilogical3', array('class' => 'span', 'maxlength' => 255)); ?>
        </div>
        <div class="span4">
            <?php
            echo CHtml::activeHiddenField($model, 'notmateri', array());
            ?>
            <label>&nbsp;</label>
            <?php
            $this->widget('bootstrap.widgets.TbToggleButton', array(
                'name' => 'notmateri',
                'enabledLabel' => 'Không vật tư (Mở)',
                'disabledLabel' => 'Không vật tư (Tắt)',
                'value' => ord($model->notmateri),
                'width' => 300,
                'enabledStyle' => true,
                'onChange' => 'js:function($el, status, e){getNotmateri($el, status, e);}'
            ));
            ?>
        </div>
        <div class="span4">
            <?php
            echo CHtml::activeHiddenField($model, 'notvalue', array());
            ?>
            <label>&nbsp;</label>
            <?php
            $this->widget('bootstrap.widgets.TbToggleButton', array(
                'name' => 'notvalue',
                'enabledLabel' => 'Không giá trị (Mở)',
                'disabledLabel' => 'Không giá trị (Tắt)',
                'value' => ord($model->notvalue),
                'width' => 300,
                'enabledStyle' => true,
                'onChange' => 'js:function($el, status, e){getNotvalue($el, status, e);}'
            ));
            ?>
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
<script>
    var getNotvalue = function($el, status, e) {
        var assign = '';
        if (status)
            assign = '1';
        else
            assign = '0';
        $('#Worklist_notvalue').val(assign);
    }
    var getNotmateri = function($el, status, e) {
        var assign = '';
        if (status)
            assign = '1';
        else
            assign = '0';
        $('#Worklist_notmateri').val(assign);
    }
</script>