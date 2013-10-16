<?php
    $url = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('HrAssets'));         
    //$file = $url . DIRECTORY_SEPARATOR . 'shiftchange.js';
    $file = $url . '/shiftchange.js';
    Yii::app()->clientScript->registerScriptFile($file,CClientScript::POS_BEGIN);

$this->breadcrumbs=array(
	'Shift Replaces',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('shift-replace-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>
<?php
$plan = ShiftPlan::model()->findByPk($model->plan_id);
$newMenu =array();
$restore = array();
$template ='';
if($plan->status==0){
   $template ='{delete}'; 
  $newMenu =array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create',array('plan_id'=>$model->plan_id)), 
      'linkOptions'=>array(
                'class' => 'ajaxFormModal', 
                'title' => 'Làm thế ca trực',
                'ajaxModalSubmited'=>'yiiGridViewUpdate("shift-replace-grid")',
            ));

  
  $newMenu1 = array('label'=>'Xem lịch trực', 'icon'=>'icon-calendar', 'url'=>array("/hr/shiftDetail/index&plan_id=$model->plan_id"));
  $restore =array('delete' => array('label'=> 'Phục hồi','icon'=>'icon-repeat','options'=>array('class'=>'btn-small delete')));
}
?>
<h1 class="title">Danh sách thế ca trực của:  <?php  echo $plan->name." cho ".$plan->department->name;?>  </h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
		$newMenu,
        $newMenu1,
		array('label'=>'Tìm kiếm', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button'),'accesskey'=>'f'),
	),
));
?>
</div>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'shift-replace-grid',
     'type'=>'striped bordered',   
	'dataProvider'=>$model->search(),
    'template'=>'{items}{pager}',
	'columns'=>array(
        array('name'=>'old_emp_id',
        'type'=>'raw',
        'value'=>'$data->oldEmp->fullName',
        ),
        array('name'=>'new_emp_id',
        'type'=>'raw',
        'value'=>'$data->newEmp->fullName',
        ),
        array('name'=>'detail_id',
        'type'=>'raw',
        'value'=>'$data->Detail->nameTime'
        ),
		'note',
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => $template,
			'buttons' =>$restore,
            //'htmlOptions'=>array('style'=>'width: 115px'),
           )
	),
)); ?>
