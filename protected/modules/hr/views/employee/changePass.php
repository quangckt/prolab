<h1 class="title">Đổi mật khẩu</h1>
<hr/>
<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'changePass-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
        'class' => 'well',
    )
)); ?>

    <div class="span4">
        <label>Mật khẩu hiện tại *</label>
        <?php echo CHtml::passwordField('User[currentPassword]', '', array('class' => 'span')) ?>
    </div>
    <div class="span4">
        <label>Mật khẩu mới *</label>
        <?php echo CHtml::passwordField('User[password]', '', array('class' => 'span')) ?>
    </div>
    <div class="span4">
        <label>Nhập lại mật khẩu mới *</label>
        <?php echo CHtml::passwordField('User[retypePassword]', '', array('class' => 'span')) ?>
    </div>
    <div class="row-fluid">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'ajaxSubmit',
        'type' => 'primary',
        'label' => 'Lưu',
        'loadingText' => 'Đang Lưu...',
        'completeText' => 'Lưu thành công',
        'icon' => 'ok white',
        //'url' => Yii::app()->controller->createUrl('changePass', array('id' => $model->id)),
        'htmlOptions' => array(
            'id' => 'btn_updatePass_stateFull',
        ),
        'ajaxOptions' => array(
            'dataType' => 'json',
            'beforeSend' => 'function(){
				$("#btn_updatePass_stateFull").button("loading");
			}',
            'success' => 'function(data){
                console.log(data.empty);
				if(data.empty == 4){
				    bootbox.alert("Thông báo:<br/>Bạn không có quyền chỉnh sửa thông tin của nhân viên khác!!!");
				    $("#btn_updatePass_stateFull").button("reset");
				}else if(data.empty == 1){
		        	bootbox.alert("Thông báo:<br/>Mật khẩu hiện tại không được phép rỗng!!!<br/>Mật khẩu mới không được phép rỗng!!!<br/>Nhập lại mật khẩu mới không được phép rỗng!!!");
		        	$("#User_currentPassword").addClass("error");
		        	$("#User_password").addClass("error");
		        	$("#User_retypePassword").addClass("error");
					$("#btn_updatePass_stateFull").button("reset");
				} else if(data.empty == 2) {
				    bootbox.alert("Thông báo:<br/>Mật khẩu hiện tại không đúng!!!");
				    $("#User_currentPassword").addClass("error");
				    $("#User_password").removeClass("error");
		        	$("#User_retypePassword").removeClass("error");
					$("#btn_updatePass_stateFull").button("reset");
				} else if(data.empty == 3){
				    bootbox.alert("Thông báo:<br/>Mật khẩu mới và nhập lại mật khẩu mới không giống nhau!!!");
				    $("#User_currentPassword").removeClass("error");
				    $("#User_password").addClass("error");
		        	$("#User_retypePassword").addClass("error");
					$("#btn_updatePass_stateFull").button("reset");
				} else{
				    $("#User_password").removeClass("error");
		        	$("#User_retypePassword").removeClass("error");
				    $("#btn_updatePass_stateFull").button("complete");
				    setTimeout(function() {
                        $("#btn_updatePass_stateFull").button("reset");
                    }, 2000);
                    setTimeout(function() {
                        $(".changePass_form").slideUp("fast");
                    }, 2000);
				}
			}',
        ),
    )); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'reset',
        'icon' => 'remove',
        'label' => 'Hủy',
    )); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>