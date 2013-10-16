<?php
$settings = Yii::app()->settings;
?>
<div style="display: none;">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array(
                'label' => 'Thêm mới ghi chú',
                'icon' => 'icon-arrow-left',
                'url' => Yii::app()->createUrl('/sys/error/create'),
                'linkOptions' => array(
                    'id' => 'addNote',
                    'class' => 'ajaxFormModal',
                    'title' => 'Thông báo lỗi',
                    'ajaxModalSubmited' => "function(){closeModel();}",
                ),
            ),
        )));
    ?>
</div>
<div class="hero-unit">
    <?php echo $settings->get('sys', 'headerGenNot')?>

    <p><?php echo $settings->get('sys', 'genNot')?></p>

    <p>
        <?php echo CHtml::button("Thông báo lỗi!!!", array("class" => "btn btn-danger btn-large",
        "onclick" => 'js:{
            $("#addNote").trigger("click");
        }'
    )) ?>
    </p>
</div>
<script type="text/javascript">
    var closeModel = function () {
        $('#modal0').find('a.close').trigger('click');
    }
</script>