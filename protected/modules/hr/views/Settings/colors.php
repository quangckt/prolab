<?php
class Settings extends CFormModel
{
    public $color_events;
    public $color_event_birthday;
    public $color_event_weddingday;
    public $color_event_holiday;
    public $preview_color;
    public $preview_color1;

    public function  attributeLabels()
    {
        return array('color_events' => 'Màu sự kiện', 'color_event_birthday' => 'Màu ngày sinh nhật', 'color_event_weddingday' => 'Màu ngày cưới', 'color_event_holiday' => 'Màu ngày nghỉ lễ', 'preview_color' => 'Chọn màu', '$preview_color1' => 'Xem trước');
    }
}

$model = new Settings();
$settings = Yii::app()->settings;

$model->color_events = $settings->get('hr', 'color_events');
$model->color_event_birthday = $settings->get('hr', 'color_event_birthday');
$model->color_event_weddingday = $settings->get('hr', 'color_event_weddingday');
$model->color_event_holiday = $settings->get('hr', 'color_event_holiday');
$model->preview_color1 = '#54d472';
?>

<h1 class="title"><?php echo "Cài đặt màu" ?></h1>
<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'colors-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>

    <div class="well">
        <div class="row-fluid">
            <?php //echo $form->textAreaRow($model, 'test_color', array('class' => 'span pro', 'rows' => "5")); ?>
        </div>
        <div class="well">
            <div class="row-fluid">
                <div class="span4">
                    <?php echo $form->textAreaRow($model, 'color_events', array('class' => 'span colorEvent', 'rows' => "8", 'visible' => false)); ?>
                </div>
                <div class="span4">
                    <?php echo $form->labelEx($model, '$preview_color1', array('class' => ' ')); ?>
                    <div id="previewcolor"
                         style="padding-left: 7px; padding-top: 5px; background-color: white; height: 165px; overflow: auto;">
                        <?php
                        $splitToArray = explode("\n", Yii::app()->settings->get('hr', 'color_events'));
                        foreach ($splitToArray as $item) {
                            ?>
                            <span
                                style="background-color:<?php echo $item ?>;"><?php echo $item ?></span></br>
                            <?php } ?>
                    </div>
                </div>
                <div class="span4">
                    <?php echo $form->labelEx($model, 'preview_color', array('class' => ' ')); ?>
                    <?php
                    $this->widget('ext.SMiniColors.SActiveColorPicker', array(
                        'model' => $model,
                        'attribute' => 'preview_color1',
                        'hidden' => true, // defaults to false - can be set to hide the textarea with the hex
                        'options' => array(
                            'disabled' => false,
                            'readonly' => true,
                            'opacity' => false,
                        ), // jQuery plugin options
                        'htmlOptions' => array(
                            'class' => 'span test',
                        ), // html attributes
                    ));

                    ?>
                </div>
            </div>
        </div>
        <div class="well">
            <div class="row-fluid">
                <div class="span4">
                    <?php echo $form->textFieldRow($model, 'color_event_birthday', array('class' => 'span')); ?>
                    <span style="background-color:<?php echo $model->color_event_birthday ?>;">SN: Anh A</span>
                </div>
                <div class="span4">
                    <?php echo $form->textFieldRow($model, 'color_event_weddingday', array('class' => 'span')); ?>
                    <span style="background-color:<?php echo $model->color_event_weddingday ?>;">NC: Anh A</span>
                </div>
                <div class="span4">
                    <?php echo $form->textFieldRow($model, 'color_event_holiday', array('class' => 'span')); ?>
                    <span style="background-color:<?php echo $model->color_event_holiday ?>;">NL: Tết dương lịch</span>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => 'Lưu',
        )); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>

<?php
$this->widget('ext.SMiniColors.SActiveColorPicker', array(
    'model' => $model,
    'attribute' => 'color_event_birthday',
    'hidden' => true, // defaults to false - can be set to hide the textarea with the hex
    'options' => array(
        'disabled' => false,
        'readonly' => true,
        'opacity' => false,
    ), // jQuery plugin options
    'htmlOptions' => array(
        'class' => 'span',
    ), // html attributes
));
$this->widget('ext.SMiniColors.SActiveColorPicker', array(
    'model' => $model,
    'attribute' => 'color_event_weddingday',
    'hidden' => true, // defaults to false - can be set to hide the textarea with the hex
    'options' => array(
        'disabled' => false,
        'readonly' => true,
        'opacity' => false,
    ), // jQuery plugin options
    'htmlOptions' => array(
        'class' => 'span',
    ), // html attributes
));
$this->widget('ext.SMiniColors.SActiveColorPicker', array(
    'model' => $model,
    'attribute' => 'color_event_holiday',
    'hidden' => true, // defaults to false - can be set to hide the textarea with the hex
    'options' => array(
        'disabled' => false,
        'readonly' => true,
        'opacity' => false,
    ), // jQuery plugin options
    'htmlOptions' => array(
        'class' => 'span',
    ), // html attributes
));
?>

<script type="text/javascript">
    // Enabling miniColors
    var duplicateColor;
    $('#Settings_preview_color1').miniColors({
        /*change:function (hex, rgb) {
            $('#console').prepend('change: ' + hex + ', rgb(' + rgb.r + ', ' + rgb.g + ', ' + rgb.b + ')<br>');
        },*/
        /*open:function (hex, rgb) {
            $('.pro').prepend('open: ' + hex + '|');
        },*/
        close:function (hex, rgb) {
            if (duplicateColor != hex) {
                duplicateColor = hex;
                $('.colorEvent').prepend(hex + '\n');
                $('#previewcolor').prepend('<span style="background-color:' + hex + ';">' + hex + '</span>' + '<br>');
            } else {
                alert("Màu đã có, vui lòng chọn màu khác.");
            }
        }
    });
</script>