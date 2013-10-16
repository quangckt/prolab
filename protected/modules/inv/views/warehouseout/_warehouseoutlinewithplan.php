<?php
$oneline = new Warehouseoutline();
?>
<div class="row-fluid">
    <?php foreach ($lines->items as $id => $line): ?>
        <?php $this->renderPartial('_warehouseoutlineTrwithplan', array('form' => $form, 'model' => $line, 'id' => $id)); ?>
    <?php endforeach; ?>
</div>
<div class="row-fluid">
    <div style="display: none" class=" product-info alert fade in alert-info "></div>
</div>
<?php
$d = new warehouseoutline;
$d->warehouseout_id = $model->id;
?>
<script type="text/javascript">
    Prolab.behaviors.tabularInput = function() {
        var settings = {
            lastline:<?php echo $lines->lastNew ?>,
            emptyline: new String(<?php echo CJSON::encode($this->renderPartial('_warehouseoutlineTr', array('id' => 'idRep', 'model' => $d, 'form' => $form), true)); ?>)
        }
        $('#warehouseoutline').tabularInput(settings);
    };
    var kt = [];
    var checkQty = function(obj, v, opt) {
        var n = opt.updatePrice.split('_');
        kt[n[1]] = {'obj': obj, 'v': v};
    }

    function check(e) {
        if (kt[$(e).attr('id').split('_')[1]] == null && $(e).val() > 0) {
            alert('Chưa chọn mặt hàng !');
            return;
        }

        var obj = kt[$(e).attr('id').split('_')[1]].obj;
        var value = kt[$(e).attr('id').split('_')[1]].v;
        var uom = $('#Warehouseoutline_' + [$(e).attr('id').split('_')[1]] + '_uom_id').val();
        var val_uom = value.listQty[uom].value.replace(/\./g, '').replace(',', '.');
        var quantity = $(e).val().replace(/\./g, '').replace(',', '.');

        if (quantity - val_uom > 0) {
            alert("Số lượng nhập lớn hơn số lượng hiện có trong kho !");
            return;
        }
        var minStock = value.limit.replace(/\./g, '').replace(',', '.');
        if (val_uom - quantity <= minStock) {
            alert('Yêu cầu nhập vật tư !');
        }

    }
    Prolab.behaviors.productAutoComplete = function(content) {
        var options = {extpar: 'Warehouseout_wh_id'}, url = '<?php echo Yii::app()->createUrl("product/product/GetItems"); ?>';
        options.updateWH = 'Warehouseout_wh_id';
        options.updatecost = true;
        options.showProductInfo = function(obj, opt) {
            var url = '<?php echo Yii::app()->createUrl("inv/inventory/getInventory"); ?>';
            var postdata = {pid: obj.id, whid: $('#' + opt.updateWH).val()};
            $.get(url, postdata, function(value) {
                var html = "";
                var html1 = "";
                checkQty(obj, value, opt);
                for (i in value.listQty) {
                    if (html == "")
                        html = value.listQty[i].value + " " + value.listQty[i].name;
                    else
                        html += " = " + value.listQty[i].value + " " + value.listQty[i].name;
                    if (html1 == "")
                        html1 = value.limit + " " + value.listQty[i].name;

                }
                $('form .product-info').html(obj.code + '- ' + obj.name + ' / Tồn kho: <strong>' + html + '</strong>' + ' / Định mức tồn: <strong>' + html1 + '</strong>').show();
            }, 'Json');
        };
        $('.product-autocomplete', content).productAutoComplete(url, options);
    };

</script>