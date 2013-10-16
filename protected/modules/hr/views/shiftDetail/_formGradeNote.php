<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'changePass-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    )
)); ?>
    <?php if ($model->hasErrors()) {
    Yii::app()->user->setFlash('error', $form->errorSummary($model, 'Thông báo lỗi!!!', null, array('class' => '')));
} ?>

    <?php echo $form->html5EditorRow($model, 'note', array(
    'class' => '',
    'options' => array(
        "font-styles" => true, //Font styling, e.g. h1, h2, etc. Default true
        "emphasis" => true, //Italics, bold, etc. Default true
        "lists" => true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
        "html" => true, //Button which allows you to edit the generated HTML. Default false
        "link" => true, //Button to insert a link. Default true
        "image" => true, //Button to insert an image. Default true,
        "color" => true, //Button to change color of font
    )
));?>

    <div class="form-actions" id="btn_submit_emp">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'icon' => 'ok white',
        'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
    )); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'reset',
        'icon' => 'remove',
        'label' => 'Hủy',
    )); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>