<?php if ($model->warehouseout_id == null) $model->warehouseout_id = -1; ?>
<div class="span3">
    <?php echo $form->hiddenField($model, "[$id]warehouseout_id", array('class' => '')); ?>
    <?php echo $form->hiddenField($model, "[$id]product_id", array('class' => '')); ?>
    <?php echo CHtml::label('Mã vật tư', '', array('class' => '')); ?>
    <?php
    $pid = "Warehouseoutline_" . $id . "_product_id";
    $uom = "Warehouseoutline_" . $id . "_uom_id";
    $price = "Warehouseoutline_" . $id . "_price";

    echo $form->textField($model, "[$id]description", array('class' => 'span products product-autocomplete',
        'rel_product_id' => $pid,
        'rel_uom_id' => $uom,
        'rel_price' => $price,
    ));
    ?>
</div>
<div class="span3">
    <?php echo CHtml::label('Đơn vị tính', '', array('class' => '')); ?>
    <?php echo $form->dropDownList($model, "[$id]uom_id", CHtml::listData(Uom::model()->findAll(), 'id', 'name'), array('prompt' => 'Chọn..', 'class' => 'span uom_std',));
    ?>
</div>
<div class="span3">
    <?php echo CHtml::label('Số lượng', '', array('class' => '')); ?>
    <?php echo $form->textField($model, "[$id]qty", array('class' => 'span isnum qty', 'onchange' => 'check(this)')); ?>
</div>
<div class="span3">
    <?php echo CHtml::label('Số counter', '', array('class' => '')); ?>
    <?php echo $form->textField($model, "[$id]counter", array('class' => 'span  counter',)); ?>
</div>
