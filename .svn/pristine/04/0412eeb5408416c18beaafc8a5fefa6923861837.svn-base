<?php
class Settings extends CFormModel
{
    public $genNot;
    public $headerGenNot;

    public function  attributeLabels()
    {
        return array(
            'genNot' => 'Thông báo chung',
            'headerGenNot' => 'Tiêu đề',
        );
    }
}

$model = new Settings();
$settings = Yii::app()->settings;
$model->genNot = $settings->get('sys', 'genNot');
$model->headerGenNot = $settings->get('sys', 'headerGenNot');
?>

<h1 class="title">Thêm mới/Cập nhật Thông báo chung</h1>
<hr/>

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'changePass-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'action' => '',
//$grade->isNewRecord ? Yii::app()->controller->createUrl('acceptGrade') : Yii::app()->controller->createUrl('updateGrade', array('id' => $grade->id)),
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
        'class' => 'well',
    )
)); ?>
<div class="row-fluid">
    <?php echo $form->html5EditorRow($model, 'headerGenNot', array('class' => 'span', 'rows' => 3, 'height' => '200', 'options' => array(
    "font-styles" => true, //Font styling, e.g. h1, h2, etc. Default true
    "emphasis" => true, //Italics, bold, etc. Default true
    "lists" => true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
    "html" => true, //Button which allows you to edit the generated HTML. Default false
    "link" => true, //Button to insert a link. Default true
    "image" => true, //Button to insert an image. Default true,
    "color" => true, //Button to change color of font
))); ?>
</div>
<div class="row-fluid">
    <?php echo $form->html5EditorRow($model, 'genNot', array('class' => 'span', 'rows' => 15, 'height' => '200', 'options' => array(
    "font-styles" => true, //Font styling, e.g. h1, h2, etc. Default true
    "emphasis" => true, //Italics, bold, etc. Default true
    "lists" => true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
    "html" => true, //Button which allows you to edit the generated HTML. Default false
    "link" => true, //Button to insert a link. Default true
    "image" => true, //Button to insert an image. Default true,
    "color" => true, //Button to change color of font
))); ?>
</div>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'type' => 'primary',
    'label' => 'Chấp nhận', //$grade->isNewRecord ? 'Chấp nhận' : 'Cập nhật',
    'icon' => 'ok white',
    'htmlOptions' => array(
        'id' => 'btn_updatePass_stateFull',
    ),
)); ?>
</div>
<?php $this->endWidget(); ?>