<div class="form" id="fancyboxShow">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'section-form',
        'enableAjaxValidation' => true,
        //'enableClientValidation'=>true,
        'clientOptions' => array('validateOnSubmit' => true), //This is very important
    ));
    ?>
    <div class="row-fluid">
        <div class="span12">
            <?php echo CHtml::passwordField('cofirmPermission', '', array('class' => 'span', 'placeHolder' => 'Enter Pass of coder...')); ?>        
        </div>
    </div>
    <div class="form-actions">
        <?php
        echo CHtml::ajaxSubmitButton("Cập nhật", Yii::app()->controller->createUrl("confirmPermission"), array(
            'type' => 'POST',
            "dataType" => "json",
            "beforeSend" => "function(){
			}",
            "success" => "function(data){
                if(data.error==0){
                   alert('Mật khẩu trống!!!');
                }else if(data.error==1) {
                    alert('Sai mật khẩu!!!');
                }else if(data.complete==2){
                    var urlTo = '" . Yii::app()->controller->createUrl('permissions') . "';
                    window.location.href= urlTo;
                }
			}",
                ), array(
            "class" => "btn btn-primary",
        ));
        ?>
    </div>
    <?php $this->endWidget(); ?>
</div>