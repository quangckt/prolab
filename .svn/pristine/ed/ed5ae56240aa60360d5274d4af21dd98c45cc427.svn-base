<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Qui định tiền thưởng cơ bản và ngày phép năm <?php echo $year; ?></h4>
</div>
<div class="modal-body">
    <?php
    $model = new Payrollrule();
    if (empty($checkModel)) {
        ?>
        <?php
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'valueBonusTime-form',
            'method' => 'post',
            'type' => 'vertical',
            'focus' => array($model, 'val'),
            'htmlOptions' => array(
                'enctype' => 'multipart/form-data'
            )
                ));
        ?>
        <?php
        if ($model->hasErrors()) {
            Yii::app()->user->setFlash('error', $form->errorsummary(array($model), 'Thông báo lỗi!!!', null, array('class' => '')));
        }
        ?>
        <div class="row-fluid">
            <div class="span6">
                <?php echo CHtml::activeHiddenField($model, 'name', array('value' => 'Qui định tiền thưởng và ngày phép năm ' . $year)); ?>
                <?php echo CHtml::activeHiddenField($model, 'monthYear', array('value' => $year)); ?>
                <?php echo CHtml::activeHiddenField($model, 'type', array('value' => '7')); ?>

                <?php echo CHtml::label('Tiền thưởng cơ bản *', '', array()); ?>
                <?php echo $form->textField($model, 'val', array('class' => 'span isnum')) ?>
            </div>
            <div class="span6">
                <?php echo CHtml::label('Số ngày phép năm *', '', array()); ?>
                <?php echo $form->textField($model, 'rate', array('class' => 'span isnum')); ?>
            </div>
        </div>

        <div class="modal-footer">
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'ajaxSubmit',
                'type' => 'primary',
                'icon' => 'ok white',
                'label' => 'Tạo và tính toán',
                'url' => Yii::app()->controller->createUrl('valueBonusTime', array('plan_id' => $plan_id)),
                'ajaxOptions' => array(
                    'dataType' => 'json',
                    'beforeSend' => 'function(){
                        var val = $("#Payrollrule_val").val();
                        var rate = $("#Payrollrule_rate").val();
                        if(val == "" || rate == ""){
                            bootbox.alert("Tiền thưởng cơ bản và số ngày phép năm không được phép rỗng!!!");
                            return false;
                        }else{
                            //$("#Payrollrule_val").attr("disabled","true");
                            //$("#Payrollrule_rate").attr("disabled","true");
                            //$("#create").attr("disabled","true");
                            //$("#cancel").attr("disabled","true");
                            $("#loadingModal").modal().css(
                                {
                                    width: "auto",
                                    "margin-left": function () {
                                        return -($(this).width() / 2);
                                    },
                                    "background-color": function () {
                                        return "transparent";
                                    },
                                    "border": function () {
                                        return "none";
                                    },
                                    "-webkit-box-shadow": function () {
                                        return "none";
                                    },
                                    "box-shadow": function () {
                                        return "none";
                                    }
                                }
                            );
                        }
                    }',
                    'success' => 'function(data){
                        if(data.ok==true){
                            $("#loadingModal").modal("hide");
                            $("#bonusValueModal").modal("hide");
                            yiiGridViewUpdate("hr-report-timeShift-grid");
                            yiiGridViewUpdate("hr-report-percentTime-grid");
                            yiiGridViewUpdate("hr-report-bonusValue-grid");
                        }
                    }',
                ),
                'htmlOptions' => array(
                    'id' => 'create',
                ),
            ));
            ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'reset',
                'icon' => 'remove',
                'label' => 'Hủy',
                'htmlOptions' => array(
                    'data-dismiss' => 'modal',
                    'id' => 'cancel',
                ),
            ));
            ?>
        </div>
        <?php $this->endWidget(); ?>
    <?php } else {
        ?>
        <?php
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'valueBonusTimeUpdate-form',
            'method' => 'post',
            'type' => 'vertical',
            'focus' => array($checkModel, 'val'),
            'htmlOptions' => array(
                'enctype' => 'multipart/form-data'
            )
                ));
        ?>
        <div class="row-fluid">
            <div class="span6">
                <?php echo CHtml::label('Tiền thưởng cơ bản *', '', array()); ?>
                <?php echo $form->textField($checkModel, 'val', array('class' => 'span isnum')) ?>
            </div>
            <div class="span6">
                <?php echo CHtml::label('Số ngày phép năm *', '', array()); ?>
                <?php echo $form->textField($checkModel, 'rate', array('class' => 'span isnum')); ?>
            </div>
        </div>

        <div class="modal-footer">
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'ajaxSubmit',
                'type' => 'primary',
                'icon' => 'ok white',
                'label' => 'Lưu và tính toán',
                'url' => Yii::app()->controller->createUrl('updateValueBT', array('plan_id' => $plan_id, 'year' => $year, 'monthYear' => $monthYear)),
                'ajaxOptions' => array(
                    'dataType' => 'json',
                    'beforeSend' => 'function(){
                        var val = $("#Payrollrule_val").val();
                        var rate = $("#Payrollrule_rate").val();
                        if(val == "" || rate == ""){
                            alert("Tiền thưởng cơ bản và số ngày phép năm không được phép rỗng!!!");
                            return false;
                        }else{
                            //$("#Payrollrule_val").attr("disabled","true");
                            //$("#Payrollrule_rate").attr("disabled","true");
                            //$("#update").attr("disabled","true");
                            //$("#cancelNew").attr("disabled","true");
                            //$("#createValueBonus").attr("disabled","true");
                            $("#loadingModal").modal().css(
                                {
                                    width: "auto",
                                    "margin-left": function () {
                                        return -($(this).width() / 2);
                                    },
                                    "background-color": function () {
                                        return "transparent";
                                    },
                                    "border": function () {
                                        return "none";
                                    },
                                    "-webkit-box-shadow": function () {
                                        return "none";
                                    },
                                    "box-shadow": function () {
                                        return "none";
                                    }
                                }
                            );
                        }
                    }',
                    'success' => 'function(data){
                        if(data.ok==true)
                            $("#loadingModal").modal("hide");
                            $("#bonusValueModal").modal("hide");
                            yiiGridViewUpdate("hr-report-timeShift-grid");
                            yiiGridViewUpdate("hr-report-percentTime-grid");
                            yiiGridViewUpdate("hr-report-bonusValue-grid");
                    }',
                ),
                'htmlOptions' => array(
                    'class' => 'pull-left',
                    'id' => 'update',
                ),
            ));
            ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'reset',
                'icon' => 'remove',
                'label' => 'Hủy',
                'htmlOptions' => array(
                    'data-dismiss' => 'modal',
                    'class' => 'pull-left',
                    'id' => 'cancelNew',
                ),
            ));
            ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'ajaxButton',
                'type' => 'primary',
                'icon' => 'ok white',
                'label' => 'Tính toán',
                'url' => Yii::app()->controller->createUrl('createValueBT', array('plan_id' => $plan_id, 'year' => $year, 'monthYear' => $monthYear)),
                'ajaxOptions' => array(
                    'dataType' => 'json',
                    'beforeSend' => 'function(){
                        var val = $("#Payrollrule_val").val();
                        var rate = $("#Payrollrule_rate").val();
                        if(val == "" || rate == ""){
                            alert("Tiền thưởng cơ bản và số ngày phép năm không được phép rỗng!!!");
                            return false;
                        }else{
                            //$("#Payrollrule_val").attr("disabled","true");
                            //$("#Payrollrule_rate").attr("disabled","true");
                            //$("#update").attr("disabled","true");
                            //$("#cancelNew").attr("disabled","true");
                            //$("#createValueBonus").attr("disabled","true");
                            $("#loadingModal").modal().css(
                                {
                                    width: "auto",
                                    "margin-left": function () {
                                        return -($(this).width() / 2);
                                    },
                                    "background-color": function () {
                                        return "transparent";
                                    },
                                    "border": function () {
                                        return "none";
                                    },
                                    "-webkit-box-shadow": function () {
                                        return "none";
                                    },
                                    "box-shadow": function () {
                                        return "none";
                                    }
                                }
                            );
                        }
                    }',
                    'success' => 'function(data){
                        if(data.ok==true)
                            $("#loadingModal").modal("hide");
                            $("#bonusValueModal").modal("hide");
                            yiiGridViewUpdate("hr-report-timeShift-grid");
                            yiiGridViewUpdate("hr-report-percentTime-grid");
                            yiiGridViewUpdate("hr-report-bonusValue-grid");
                    }',
                ),
                'htmlOptions' => array(
                    'id' => 'createValueBonus',
                ),
            ));
            ?>
        </div>
        <?php $this->endWidget(); ?>
    <?php } ?>
</div>
<?php
$this->beginWidget('bootstrap.widgets.TbModal', array(
    'id' => 'loadingModal',
    'htmlOptions' => array(
        'data-keyboard' => 'false',
        'data-backdrop' => 'static'
    ),
));
?>
<div class="modal-body">
    <?php echo CHtml::image('css/loadingBlue.gif', '', array()); ?>
</div>
<?php $this->endWidget(); ?>