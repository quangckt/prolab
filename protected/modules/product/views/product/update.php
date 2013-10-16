<?php
$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

?>
<h1 class="title"> Chỉnh sửa: <?php echo $model->code.' - '.$model->name ?></h1>
<hr />
<div class="tools-bar">
<?php
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
        array('label'=>'Liệt kê', 'icon'=>'icon-th-list', 'url'=>Yii::app()->controller->createUrl('index'), 'linkOptions'=>array('accesskey'=>'l')),
	),
));
?>
<?php   
     $criteria = new CDbCriteria();            
     $detail=new Inventorylogdetail('search');
     $detail->unsetAttributes();  // clear any default values
     $detail->product_id =$model->id;
     $criteria->addCondition('product_id = "'.$detail->product_id.'"');
?>
<?php
     $criteria = new CDbCriteria();            
     $limit=new Limit('search');
     $limit->unsetAttributes();  // clear any default values
     $limit->product_id =$model->id;
     $criteria->addCondition('product_id = "'.$limit->product_id.'"');
?>
</div>
<?php $this->widget('bootstrap.widgets.TbTabs', array(
    'type'=>'tabs',
    'placement'=>'top', // 'above', 'right', 'below' or 'left'
    'tabs'=>array(
        array('label'=>'Thông tin chung', 'content'=>$this->renderPartial('_form', array('model'=>$model),true,false),'active'=>true,),
        array('label'=>'Lịch sử', 'content'=>$this->renderPartial('index_history',array('detail'=>$detail),true,false),true,false),
        array('label'=>'Định mức tồn', 'content'=>$this->renderPartial('index_Limit',array('limit'=>$limit),true,false),true,false),
    )
)); ?>