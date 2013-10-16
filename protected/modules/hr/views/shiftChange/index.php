<?php

       $url = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('HrAssets'));         
        //$file = $url . DIRECTORY_SEPARATOR . 'shiftchange.js';
        $file = $url . '/shiftchange.js';
        Yii::app()->clientScript->registerScriptFile($file,CClientScript::POS_BEGIN);
        
        
$this->breadcrumbs=array(
	'Shift Changes',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('shift-change-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

$plan = ShiftPlan::model()->findByPk($model->plan_id);

?>

<h1 class="title">Danh sách đổi ca trực của:  <?php  echo $plan->name." cho ".$plan->department->name;?>  </h1>
<div class="tools-bar">
<?php 

$newMenu =array();
$restore = array();
$template ='';
if($plan->status==0){
    $template ='{delete}'; 
    $restore =array('delete' => array('label'=> 'Phục hồi','icon'=>'icon-repeat','options'=>array('class'=>'btn-small delete')));
    
    $newMenu = array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>array("/hr/shiftChange/create&plan_id=$model->plan_id"), 
    'linkOptions'=>array(
                'class' => 'ajaxFormModal', 
                'title' => 'Đổi ca trực',
                'ajaxModalSubmited'=>'yiiGridViewUpdate("shift-change-grid")',
            ));
            
     $newMenu1 = array('label'=>'Xem lịch trực', 'icon'=>'icon-calendar', 'url'=>array("/hr/shiftDetail/index&plan_id=$model->plan_id"));
}
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
	'id'=>'shift-change-grid',
    'type'=>'striped bordered',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
        array('name'=>'emp_from',
        'type'=>'raw',
        'value'=>'$data->empFrom->fullName'
        ),
        array('name'=>'from_id',
        'type'=>'raw',
        'value'=>'(isset($data->detailFrom))?$data->detailFrom->nameTime:"Nghỉ"'
        ),
        array('name'=>'emp_to',
        'type'=>'raw',
        'value'=>'$data->empTo->fullName'
        ),
        array('name'=>'to_id',
        'type'=>'raw',
        'value'=>'(isset($data->detailTo))?$data->detailTo->nameTime:"Nghỉ"'
        ),
		'note',
       array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => $template,
			'buttons' => $restore,
            //'htmlOptions'=>array('style'=>'width: 115px'),
           )
	),
)); ?>
