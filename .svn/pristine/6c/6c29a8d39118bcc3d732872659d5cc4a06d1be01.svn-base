<?php
$this->breadcrumbs = array(
    'Batches' => array('index'),
    'Create',
);

?>

<h1 class="title">Phát hành cổ phần</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Liệt kê', 'icon' => 'icon-th-list', 'url' => Yii::app()->controller->createUrl('index'), 'linkOptions' => array()),
        ),
    ));
    $this->widget('bootstrap.widgets.TbToggleButton', array(
        'name' => 'testToggleButtonB',
        'enabledLabel' => 'Mở',
        'disabledLabel' => 'Đóng',
        'value' => true,
        'width' => 100,
        'enabledStyle' => true,
        'customEnabledStyle' => array(
            'background' => '#FF00FF',
            'gradient' => '#D300D3',
            'color' => '#FFFFFF'
        ),
        'customDisabledStyle' => array(
            'background' => "#FFAA00",
            'gradient' => "#DD9900",
            'color' => "#333333"
        ),
        'onChange' => 'js:function($el, status, e){test($el, status, e);}'
    ));
    ?>
</div>
<div class="search-form" style="display: auto;">
    <?php echo $this->renderPartial('_form', array('model' => $model,)); ?>
</div>
<script type="text/javascript">
    var test = function test($el, status, e) {
        $('.search-form').slideToggle('medium');
    }
</script>