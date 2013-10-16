<?php

$this->breadcrumbs = array('Shifts', );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('shift-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>

<?php
	$p= ShiftPlan::model()->findByPk($plan_id);
?>
<h1 class="title">Chi tiết ca trực: <?php  echo $p->name." cho ".$p->department->name;?>  </h1>
<hr />



</div>
<div class="tools-bar">
<?php

$this->widget('bootstrap.widgets.TbMenu', array(
    'type' => 'pills',
    'items' => array(
        array(
            'label' => 'Tạo mới',
            'icon' => 'icon-plus',
            'url' => array("/hr/shift/create&plan_id=$plan_id"),
            array('plan_id' => $plan_id),
            'linkOptions' => array(
                'class' => 'ajaxFormModal', 
                'title' => 'Tạo mới ca trực',
                'ajaxModalSubmited'=>'yiiGridViewUpdate("shift-grid")',
            
            )
            ),
        array(
            'label' => 'Bố trí lịch trực',
            'icon' => 'icon-calendar',
            'url' => array("/hr/shiftDetail/index&plan_id=$plan_id"),
            array('plan_id' => $plan_id),
            'linkOptions' => array()),    
        ),
        
    ));

?>
</div>

<div class="search-form" style="display:none">
<?php

$this->renderPartial('_search', array('model' => $model, ));

?>
</div><!-- search-form -->


<?php

$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'shift-grid',
    'type'=>' striped bordered ',
    'dataProvider' => $model->search(),
    'template' => '{items}{pager}',
    'columns' => array(
       array('name'=>'colorEvent',
       'header'=>'',
        'type'=>'raw',
        'value'=>'CHtml::openTag("div",array("style"=>"background-color:$data->colorEvent;width:20px;height:20px"))',
        'htmlOptions' => array('style' => 'width: 20px'),
         ), 
        array(
        'name'=>'code',
        'type'=>'raw',
        'value'=>'$data->code',
        ),
        array(
            'name' => 'starttime',
            'type' => 'raw',
            'value' => '$data->starttime',
            ),
        array(
            'name' => 'endtime',
            'type' => 'raw',
            'value' => '$data->endtime',
            ),
            'note',
        /*
        'isovernight',
        'starttime',
        'endtime',
        'note',
        'status',
        */
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Update', 
                    'options' => array(
                        'class' => 'ajaxFormModal btn-small update',
                        'title' => 'Sửa ca trực',
                        'ajaxModalSubmited'=>' yiiGridViewUpdate("shift-grid")',
                        )), 
                'delete' => array(
                    'label' => 'Delete',
                    'options' => array('class' =>' btn-small delete'))),
                'htmlOptions' => array('style' => 'width: 70px'),
            )),
    ));

?>
