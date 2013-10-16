
<?php
	$this->widget('bootstrap.widgets.TbBox', array(
    'title' => 'Vật tư cần nhập kho',
    'headerIcon' => 'icon-home',
    'content' => $this->renderPartial('_reOrder',null,true)
));
?>

<?php 
//	$this->widget('bootstrap.widgets.TbBox', array(
//    'title' => 'Vật tư hiện tại',
//    'headerIcon' => 'icon-home',
//    'content' => $this->renderPartial('_inventory',null,true)
//));
?>


