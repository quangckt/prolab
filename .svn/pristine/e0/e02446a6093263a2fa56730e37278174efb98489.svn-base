<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'upfateCI-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>
    <fieldset class="well">
        <div class="row-fluid">
            <div class="span12 alert alert-info">
                Giá trị tăng vốn: <strong><?php echo $valueOfCI; ?></strong>
            </div>
        </div>
        <div class="row-fluid">
            <label>Giá trị</label>
            <?php if (is_null($modelCash)) {
            ?>
            <input type="text" id="amt" name="amt" class="span" value=""/>
            <?php
        } else {
            ?>
            <input type="text" id="amt" name="amt" class="span isnum" value="<?php echo $modelCash->amt ?>"/>
            <?php
        } ?>
        </div>
        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => 'Lưu',
            'htmlOptions' => array(
                'disabled' => true,
                'id' => 'btnSave',
            ),
        ));
            ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'reset',
            'icon' => 'remove',
            'label' => 'Hủy',
        )); ?>
        </div>
    </fieldset>
    <?php $this->endWidget(); ?>
</div>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'warningdialog',
// additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Thông báo lỗi',
        'autoOpen' => false,
        'buttons' => array(
            array('text' => 'Đóng', 'click' => 'js:function(){$(this).dialog("close");}'),
            //array('text'=>'Cancel','click'=> 'js:function(){$(this).dialog("close");}'),
        ),
    ),
));

echo 'Giá trị nhập phải < giá trị tăng vốn!!!';

$this->endWidget('zii.widgets.jui.CJuiDialog');
?>
<script type="text/javascript">
    $('#amt').change(function () {
        var amt = $(this).val().replace(/\./g, '');
        if (amt > <?php echo $valueOfCIOrr; ?>) {
            $(this).val('');
            $(this).focus();
            $('#btnSave').attr('disabled', true);
            //$('#warningdialog').dialog('open');
            bootbox.alert("<h3>Thông báo!!!</h3><div class='alert alert-error'>Tiền mặt phải <= giá trị tăng vốn</div>");
            //return false;
            //alert('Tiền mặt phải <= giá trị tăng vốn');
        } else {
            $('#btnSave').attr('disabled', false);
        }
    });
</script>