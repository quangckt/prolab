<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'warehousein-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
//'type'=>'horizontal',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
        ));
?>
<fieldset class="well">
    <?php
    if ($model->hasErrors() || $lines->hasErrors)
        Yii::app()->user->setFlash('error', $form->errorSummary(array_merge(array($model), $lines->items), 'Thông báo lỗi!!!', null, array('class' => '')));
    ?>

<?php //header  ?>
    <div class="well">
        <div class="row-fluid">
            <div class="span3">
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

            <div class="span3">
                <?php echo $form->textFieldRow($model, 'num', array('class' => 'span', 'maxlength' => 50)); ?>
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
                <?php echo $form->dropDownListRow($model, 'from_wh_id', CHtml::listData(Warehouse::model()->findAll(), 'id', 'name'), array('class' => 'span')); ?>
            </div>
            <div class="span3">
<?php echo $form->dropDownListRow($model, 'to_wh_id', CHtml::listData(Warehouse::model()->findAll(), 'id', 'name'), array('class' => 'span')); ?>
            </div>
            <div class="span6"><?php echo $form->textFieldRow($model, 'description', array('class' => 'span')); ?></div>
        </div>
    </div>
<?php //end header  ?>

            <?php //details ?>
    <div class="well">
        <div class='row-fluid'>
    <?php echo $this->renderPartial('_transferline', array('form' => $form, 'model' => $model, 'lines' => $lines), true, false); ?>
        </div>
    </div>
        <?php //end details  ?>

        <?php //footer ?>
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
<?php //end footer ?>
</fieldset>

<?php $this->endWidget(); ?>

<?php
$d = new Transferline;
$d->trans_id = $model->id;
?>

<script type="text/javascript">
    var seq =<?php echo CJSON::encode(Sequence::item('Transfer')) ?>;
    $('#Transfer_date').change(function() {
        var url = "<?php echo Yii::app()->controller->createUrl('GetCountOfMonth'); ?>";
        var pData = {date: $(this).val()};
        $.post(url, pData, function(data) {
            console.log(eval("(" + data + ")"));
//            var rel = eval("("+data+")");
//            var num = seq.prefix + $('#Transfer_date').val().slice(3, -5) + $('#Transfer_date').val().slice(8) + '-'+rel.count;
//            $('#Transfer_num').val(num);
        });
    });
    var kt = [];
    var checkQty = function(obj, v, opt) {
        var n = opt.updateUom.split('_');
        kt[n[1]] = {'obj': obj, 'v': v};
    };
    function check(e) {

        if (kt[$(e).attr('id').split('_')[1]] == null && $(e).val() > 0) {
            alert('Chưa chọn mặt hàng !');
            return;
        }
        var obj = kt[$(e).attr('id').split('_')[1]].obj;
        var value = kt[$(e).attr('id').split('_')[1]].v;
        var uom = $('#Transferline_' + [$(e).attr('id').split('_')[1]] + '_uom_id').val();
        var val_uom = value.listQty[uom].value.replace(/\./g, '').replace(',', '.');
        var quantity = $(e).val().replace(/\./g, '').replace(',', '.');
        if (parseFloat(quantity) - val_uom > 0) {
            alert("Số lượng nhập lớn hơn số lượng hiện có trong kho !");
            return;
        }
    }
    Prolab.behaviors.tabularInput = function() {
        var settings = {
            lastline:<?php echo $lines->lastNew ?>,
            emptyline: new String(<?php echo CJSON::encode($this->renderPartial('_transferlineTr', array('id' => 'idRep', 'model' => $d, 'form' => $form), true)); ?>),
        }
        $('#transferline').tabularInput(settings);
    };
    Prolab.behaviors.productAutoComplete = function(content) {
        var options = {extpar: 'Transfer_from_wh_id'}, url = '<?php echo Yii::app()->createUrl("product/product/GetItems"); ?>';
        options.showProductInfo = function(obj, opt) {
            var url = '<?php echo Yii::app()->createUrl("inv/inventory/getInventory"); ?>';
            var postdata = {pid: obj.id, whid: $('#Transfer_from_wh_id').val()};
            $.get(url, postdata, function(value) {
                checkQty(obj, value, opt);
                var html = "";
                for (i in value.listQty) {
                    if (html == "")
                        html = value.listQty[i].value + " " + value.listQty[i].name;
                    else
                        html += " = " + value.listQty[i].value + " " + value.listQty[i].name;
                }
                $('form .product-info').html(obj.code + '- ' + obj.name + ' / Tồn kho: <strong>' + html + '</strong>').show();
            }, 'Json');
        }
        $('.product-autocomplete', content).productAutoComplete(url, options);
    };
    $(document).ready(function() {
        // $('#Transfer_to_wh_id option[value=70]').attr('selected', 'selected');  
    });
</script>
