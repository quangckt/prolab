<?php
$this->breadcrumbs=array(
	(UserModule::t('Users'))=>array('admin'),
	$model->username=>array('view','id'=>$model->id),
	(UserModule::t('Update')),
);
?>

<h1><?php echo  UserModule::t('Update User')." ".$model->id; ?></h1>

<br />
<?php  echo $this->renderPartial('_form', array('model'=>$model)); ?>