<div class="form">
    <?php echo CHtml::form('', 'post', array()) ?>
    <?php
    $getError = $model->getErrors();
    if (!empty($getError['password'])) {
        Yii::app()->user->setFlash('error', $getError['password']['0']);
    } else if (!empty($getError['success'])) {
        $html = '<div class="well"><div class="row-fluid">';
        $html = $html . $getError['success']['0'];
        $html = $html . '</div></div>';
        echo $html;
    }
    ?>
    <div class="row-fluid">
        <div class="span12">
            <?php echo CHtml::activePasswordField($model, 'password', array('class' => 'span', 'placeHolder' => 'Nhập mật khẩu đăng nhập...')) ?>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <?php
            echo CHtml::submitButton(UserModule::t('Hiển thị'), array(
                'class' => 'span btn btn-primary'
                    )
            )
            ?>
        </div>
        <div class="span6">
            <?php
            echo CHtml::button(UserModule::t('Hủy'), array(
                'class' => 'span btn',
                'data-dismiss' => 'modal'
                    )
            )
            ?>
        </div>
    </div>
</div>