<?php if (!isset($model->totalassets)) {
    ?>
<div class="alert alert-error">Chưa cài đặt gía trị tài sản của công ty,
    chọn <?php echo CHtml::link('đây', YII::app()->createUrl('hr/batch/indexCapitalIncrease')) ?> để cài đặt
</div>
<?php
} else {
    ?>
<div class="row-fluid">
    <div class="span2">
        <label>Giá trị:</label>
    </div>
    <div class="span6">
        <?php echo number_format($model->totalassets, 0, ',', '.') ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span2">
        <label>Giá trị một cổ phần:</label>
    </div>
    <div class="span2">
        <?php if (is_null($model->valueofstock)) {
        $this->widget('bootstrap.widgets.TbButton', array(
            //'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'size' => 'mini', // null, 'large', 'small' or 'mini'
            'label' => 'Tạo mới',
            'url' => Yii::app()->controller->createUrl('createValueOfStock'),
            'htmlOptions' => array(
                'class' => 'ajaxFormModal',
                'title' => 'Thêm mới',
            ),
        ));
    } else {
        echo number_format($model->valueofstock, 0, ',', '.');
    }?>
    </div>
    <div class="span3">
        <?php if (!is_null($model->valueofstock)) $this->widget('bootstrap.widgets.TbButton', array(
        //'buttonType' => 'submit',
        'type' => 'primary',
        'icon' => 'edit white',
        'size' => 'mini', // null, 'large', 'small' or 'mini'
        'label' => 'Sửa',
        'url' => Yii::app()->controller->createUrl('createValueOfStock'),
        'htmlOptions' => array(
            'class' => 'ajaxFormModal',
            'title' => 'Sửa',
        ),
    ));?>
    </div>
</div>
<div class="row-fluid">
    <div class="span2">
        <label>Số cổ phần:</label>
    </div>
    <div class="span6">
        <?php if (is_null($model->valueofstock)) echo 'Bạn chưa tạo giá trị một cổ phần!'; else echo number_format($model->totalassets / $model->valueofstock, 0, ',', '.') ?>
    </div>
</div>
<?php
}?>
