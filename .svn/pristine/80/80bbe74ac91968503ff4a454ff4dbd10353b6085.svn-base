<?php
Yii::app()->clientScript->registerScript('changePass', "
    $('.changePass_button').click(function(){
        $('.changePass_form').slideToggle('fast');
        return false;
    });
");
?>

<h1 class="title">Hồ sơ nhân viên</h1>
<hr/>
<?php

$this->widget('bootstrap.widgets.TbMenu', array(
    'type' => 'pills',
    'items' => array(
        array('label' => 'Đổi mật khẩu', 'icon' => 'icon-edit', 'url' => '#', 'linkOptions' => array('class' => 'changePass_button')),
    )));
?>
<div class="row-fluid">
    <div class="span6">
        <?php $this->widget('bootstrap.widgets.TbDetailView', array(
        //'type'=>'striped bordered condensed',
        'data' => $model,
        'attributes' => array(
            array(
                'label' => 'Ảnh đại diện',
                'type' => 'raw',
                'value' => $model->employee['imageForProfile'],
            ),
            array(
                'label' => 'Tên đăng nhập',
                'name' => 'username',
            ),
            array(
                'label' => 'Mã nhân viên',
                'type' => 'raw',
                'value' => $model->employee['code'],
            ),
            array(
                'label' => 'Họ và tên',
                'type' => 'raw',
                'value' => $model->employee['fullName'],
            ),
            'email',
            array(
                'label' => 'Ngày tạo',
                'type' => 'raw',
                'value' => date("d-m-Y H:i:s", $model->createtime),
            ),
            array(
                'label' => 'Lần đăng nhập cuối',
                'type' => 'raw',
                'value' => date("d-m-Y H:i:s", $model->lastvisit),
            ),
        ),

    )); ?>
    </div>
    <div class="span6 changePass_form" style="display: none">
        <?php $this->renderPartial('changePass', array('model' => $model)) ?>
    </div>
    <div class="logOut"></div>
</div>