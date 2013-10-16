<?php
$this->breadcrumbs=array(
	'Timekeepings',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('timekeeping-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<h1 class="title">Chấm công</h1>
<hr />
<div class="tools-bar">
<?php 
$this->widget('bootstrap.widgets.TbMenu', array(
	'type'=>'pills',
	'items'=>array(
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
	'id'=>'timekeeping-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
        array(
            'name'=>'emp_id',
            'type'=>'raw',
            'value'=>'$data->emp->fullName',
        ),
		'date',
        array(
            'header'=>'Giờ vào LT',
            'type'=>'raw',
            'value'=>'($data->shiftdetails->from_correct==null)?$data->shiftdetails->shift->starttime:$data->shiftdetails->from_correct',
        ),
        array(
            'header'=>'Giờ ra LT',
            'type'=>'raw',
            'value'=>'($data->shiftdetails->to_correct==null)?$data->shiftdetails->shift->endtime:$data->shiftdetails->to_correct',
        ),
        array(
            'header'=>'Giờ vào TT',
            'type'=>'raw',
            'value'=>'$data->timeRecorder->time_in',
        ),
        array(
            'header'=>'Giờ ra TT',
            'type'=>'raw',
            'value'=>'$data->timeRecorder->time_out',
        ),
        array(
            'header'=>'Giờ theo lịch',
            'type'=>'raw',
            'value'=>'$data->total_work_shift',
        ),
        array(
            'header'=>'Giờ làm việc',
            'type'=>'raw',
            'value'=>'$data->total_work',
        ),
        array(
            'header'=>'Đến sớm',
            'type'=>'raw',
            'value'=>'$data->compare_time_in',
        ),
        array(
            'header'=>'Về sớm',
            'type'=>'raw',
            'value'=>'$data->compare_time_out',
        ),
		/*
		'stipulate_inOut_id',
		'status_id',
		'note',
		*/
	),
)); ?>
