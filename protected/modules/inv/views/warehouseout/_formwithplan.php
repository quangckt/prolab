<div class="form">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'warehousewithplan-form',
        'enableAjaxValidation' => false,
        'method' => 'post',
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data'
        )
    ));
    ?>
    <fieldset class="well">
        <?php
        if ($model->hasErrors() || $lines->hasErrors || $printer->hasErrors())
            Yii::app()->user->setFlash('error', $form->errorSummary(array_merge(array($model), $lines->items, array($printer)), 'Thông báo lỗi!!!', null, array('class' => '')));
        ?>
        <div class="well">
            <div class="row-fluid">
                <div class="span2">
                    <?php echo $form->labelEx($model, 'date', array('class' => ' ')); ?>
                    <?php
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model' => $model,
                        'value' => $model->date,
                        'attribute' => 'date',
                        'language' => 'vi',
                        'options' => array(
                            'dateFormat' => 'dd-mm-yy',
                        ),
                        'htmlOptions' => array('class' => 'span'),
                    ));
                    ?>
                </div>

                <div class="span2">
                    <?php echo $form->textFieldRow($model, 'num', array('class' => 'span', 'maxlength' => 50)); ?>
                </div>

                <div class="span2">
                    <?php
                    echo $form->dropDownListRow($model, 'type_id', CHtml::listData(WarehouseoutType::model()->findAll(), 'id', 'name'), array('class' => 'span', 'empty' => 'Chọn...',
                        'ajax' => array(
                            'type' => 'POST',
                            'url' => Yii::app()->controller->createUrl('loadWareHouse'),
                            'complete' => 'function(data){
                                if(data.responseText=="empty"){
                                    $("#Warehouseout_wh_id").attr("disabled",true);
                                }else{
                                    $("#Warehouseout_wh_id").attr("disabled",false);
                                }
                                
                            }',
                            'update' => '#Warehouseout_wh_id',
                            'data' => array('whotype_id' => 'js:this.value')
                    )));
                    ?>
                </div>


                <div class="span3">
                    <?php echo $form->uneditableRow($model, 'displayStatus', array('class' => 'span')); ?>
                </div>

                <div class="span3">
                    <label> <?php echo $form->labelEx($model, 'create_uid') ?> </label>
                    <span class="span uneditable-input"> <?php echo CHtml::encode($model->getCreateName()); ?></span>
                </div>

            </div>

            <div class="row-fluid">
                <div class="span3">
                    <?php echo $form->dropDownListRow($model, 'wh_id', CHtml::listData(Warehouse::model()->findAll(), 'id', 'name'), array('class' => 'span', 'prompt' => 'chọn...', 'disabled' => empty($model->wh_id) ? true : false));
                    ?>
                </div>
                <div class="span9">
                    <?php echo $form->textFieldRow($model, 'note', array('rows' => 1, 'cols' => 50, 'class' => 'span')); ?></div>
            </div>
        </div>
        <div class="well">
            <div class="row-fluid">
                <div class="span3">
                    <?php echo CHtml::label('Máy sử dụng *', '', array()); ?>
                    <?php
                    echo $form->dropDownList($printer, 'id', CHtml::listData(Printer::model()->findAll(), 'id', 'name'), array('class' => 'span', 'empty' => 'Chọn...', 'ajax' => array(
                            'type' => 'post',
                            'url' => Yii::app()->controller->createUrl('loadPrinterPlan'),
                            'data' => 'js:{printer_id:$(this).val()}',
                            'update' => '#Warehouseout_pp_id',
                            'complete' => 'function(data){
                                if(data.responseText=="empty"){
                                    $("#Warehouseout_pp_id").attr("disabled",true);
                                }else{
                                    $("#Warehouseout_pp_id").attr("disabled",false);
                                }
                            }'
                    )));
                    ?>
                </div>
                <div class="span3">
                    <?php echo CHtml::label('Chu kỳ ca máy *', '', array()); ?>
                    <?php echo $form->dropDownList($model, 'pp_id', CHtml::listData(PrinterPlan::model()->findAll('status=' . PrinterPlan::statusEnable), 'id', 'printerPlan'), array('class' => 'span', 'empty' => 'Chọn...', 'disabled' => empty($model->pp_id) ? true : false)); ?>
                </div>
                <div class="span3">
                    <?php echo CHtml::label('Từ ngày', '', array()); ?>
                    <?php echo CHtml::tag('span', array('class' => 'uneditable-input span'), '', true); ?>
                </div>
                <div class="span3">
                    <?php echo CHtml::label('Đến ngày', '', array()); ?>
                    <?php echo CHtml::tag('span', array('class' => 'uneditable-input span'), '', true); ?>
                </div>
            </div>
            <div class='row-fluid'>
                <?php echo $this->renderPartial('_warehouseoutlinewithplan', array('form' => $form, 'model' => $model, 'lines' => $lines), true, false); ?>
            </div>
        </div>

        <div class="form-actions">
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'submit',
                'type' => 'primary', 'icon' => 'ok white',
                'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
            ));
            echo ' ';
            ?>

            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'reset',
                'icon' => 'remove',
                'label' => 'Hủy',
            ));
            ?>
        </div>
    </fieldset>

    <?php $this->endWidget(); ?>

</div>

<script>
    var seq =<?php echo CJSON::encode(Sequence::item('Warehouseout')) ?>;
    $('#Warehouseout_date').change(function() {
        var date = $.datepicker.parseDate('dd-mm-yy', $('#Warehouseout_date').val());
        var now = new Date();
        if (date > now) {
            alert('Ngày xuất kho lớn hơn ngày hiện tại');
            $('#Warehouseout_date').val('');
            $('#Warehouseout_num').val('');
            return;
        }
        var url = "<?php echo Yii::app()->controller->createUrl('GetCountOfMonth'); ?>";
        var pData = {date: $(this).val()};
        $.post(url, pData, function(data) {
            var rel = eval("(" + data + ")");
            var num = seq.prefix + $('#Warehouseout_date').val().slice(3, -5) + $('#Warehouseout_date').val().slice(8) + '-' + rel.count;
            $('#Warehouseout_num').val(num);

        })
    });

    /*    
     
     $(document).ready(function(){
     var url="<?php echo Yii::app()->controller->createUrl('GetStockByType'); ?>";
     var pData={type_id:$('#Warehouseout_type_id').val()};
     $.post(url,pData,function(data){
     var rel = eval("("+data+")");
     // $('#Warehouseout_wh_id option[value='+rel.id+']').attr('selected', 'selected');
     })    
     }); 
     $('#Warehouseout_type_id').change(function(){
     var url="<?php echo Yii::app()->controller->createUrl('GetStockByType'); ?>";
     var pData={type_id:$('#Warehouseout_type_id').val()};
     $.post(url,pData,function(data){
     var rel = eval("("+data+")");
     // $('#Warehouseout_wh_id option[value='+rel.id+']').attr('selected', 'selected');
     })        
     });
     */
    var who = '<?php echo $model->type_id ?>';
    var curentwh_id = '<?php echo $model->wh_id ?>';
    if (who !== '') {
        $.ajax({
            url: '<?php echo Yii::app()->controller->createUrl("loadWareHouse"); ?>',
            type: 'POST',
            data: {whotype_id: who, action: 'updatewithplan', currwh_id: curentwh_id},
            complete: function(data, status) {
                if (data.responseText === 'empty') {
                    $('#Warehouseout_wh_id').attr('disabled', true);
                } else {
                    $('#Warehouseout_wh_id').attr('disabled', false);
                    $('#Warehouseout_wh_id').html(data.responseText);
                    $('#Warehouseout_wh_id').val(curentwh_id);
                }
            }
        });
    }
    var pr = '<?php echo $printer->id ?>';
    var pp_id = '<?php echo $model->pp_id ?>';
    if (pr !== '') {
        $.ajax({
            url: '<?php echo Yii::app()->controller->createUrl("loadPrinterPlan"); ?>',
            type: 'POST',
            data: {printer_id: pr, action: 'updatewithplan', pp_id: pp_id},
            complete: function(data, status) {
                if (data.responseText === 'empty') {
                    $("#Warehouseout_pp_id").attr("disabled", true);
                } else {
                    $("#Warehouseout_pp_id").attr("disabled", false);
                    $("#Warehouseout_pp_id").html(data.responseText);
                    $("#Warehouseout_pp_id").val(pp_id);
                }
            }
        });
    }
</script>