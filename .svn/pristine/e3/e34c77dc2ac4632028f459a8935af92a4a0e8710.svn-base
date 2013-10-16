<?php
$this->breadcrumbs = array(UserModule::t('Users') => array('admin'), $model->
    username, );
?>
<h1><?php echo '"' . $model->username . '"'; ?></h1>
<br />
<div class="toolbar">

<?php $this->widget('bootstrap.widgets.TbButtonGroup', array('buttons' =>
array(array('label' => 'Tạo mới', 'url' => array('create'), 'icon' => 'plus'),
    array('label' => 'Sửa', 'url' => array('update', 'id' => $model->id), 'icon' =>
    'edit'), array('label' => 'Xóa', 'icon' => 'trash', 'url' => '#', 'htmlOptions' =>
    array('submit' => array('delete', 'id' => $model->id), 'confirm' =>
    'Are you sure to delete this item?'), )))); ?>	


</div>


<?php
	

$attributes = array('id', 'username', );
array_push($attributes, 'password', 'email', 'activkey', array('name' =>
    'createtime', 'value' => date("d.m.Y H:i:s", $model->createtime), ), array('name' =>
    'lastvisit', 'value' => (($model->lastvisit) ? date("d.m.Y H:i:s", $model->
    lastvisit) : UserModule::t("Not visited")), ), array('name' => 'superuser',
    'value' => User::itemAlias("AdminStatus", $model->superuser), ), array('name' =>
    'status', 'value' => User::itemAlias("UserStatus", $model->status), ));

$this->widget('zii.widgets.CDetailView', array('data' => $model, 'attributes' =>
    $attributes, ));


?>