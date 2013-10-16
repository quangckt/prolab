<?php

$this->breadcrumbs = array('Shift Plans', );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
});

$('.search-form form').submit(function(){  
    $.fn.yiiGridView.update('shift-plan-grid', {
        data: $(this).serialize()
    });
    Prolab.attachBehaviors();
    return false;
});

");
Yii::app()->clientScript->registerScript('form_date', "

$('.copyDataShift').click(function(){
    $('.date-form').slideToggle('fast');
    return false;
});

$('.date-form form').submit(function(){
    $('.listSeletedItems').val(getSelectedItems());
     return true;
});



");

?>

<h1 class="title">Danh sách ca trực</h1>
<hr />
<div class="tools-bar">
<?php
	$url=Yii::app()->controller->createUrl('copyDataShift');
?>
<?php

$this->widget('bootstrap.widgets.TbMenu', array(
    'type' => 'pills',
    'items' => array(
        array(
            'label' => 'Tạo mới',
            'icon' => 'icon-plus',
            'url' => Yii::app()->controller->createUrl('create'),
            'linkOptions' => array('class' => 'ajaxFormModal', 
            'title' =>'Tạo mới chu kỳ ca trực',
            'title' =>'Tạo mới chu kỳ ca trực',
            'ajaxModalSubmited'=>'$.fn.yiiGridView.update("shift-plan-grid")  ',
            )),
        array(
            'label' => 'Tìm kiếm',
            'icon' => 'icon-search',
            'url' => '#',
            'linkOptions' => array('class' => 'search-button'),
            'accesskey' => 'f'),
        array(
            'label' => 'Copy ca trực',
            'icon' => 'icon-plus-sign',
            'url' => '#',
            'linkOptions' => array('class'=>'copyDataShift'),
            'accesskey' => 'f') ,      
    )));

?>
</div>

<div class="search-form well" style="display:none">
<?php $this->renderPartial('_search', array('model' => $model, ));?>
</div><!-- search-form -->

<div class="date-form well" style="display:none">
    <?php echo $this->renderPartial('_form_date'); ?>
</div>
<?php
	$dialog = $this->widget('ext.ecolumns.EColumnsDialog', array(
       'options'=>array(
            'title' => 'Layout settings',
            'autoOpen' => false,
            'show' =>  'fade',
            'hide' =>  'fade',
        ),
        'htmlOptions' => array('style' => 'display: none'), //disable flush of dialog content
       'ecolumns' => array(
            'gridId' => 'shift-plan-grid', //id of related grid
            'storage' => 'db',  //where to store settings: 'db', 'session', 'cookie'
            'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side 
            'model' => $model->search()->model, //model is used to get attribute labels
            'columns' => array(
        array('id'=>'selectedItems', 'class'=>'CCheckBoxColumn'),
        array(
            'name' => 'name',
            'type' => 'raw',
            'value' => 'CHtml::link($data->name,array("/hr/shift/index&plan_id=$data->id"))'),
        array(
            'name' => 'department_id',
            'type' => 'raw',
            'value' => '(isset($data->department))?$data->department->name:""'),
        'startdate',
        'enddate',
        array(
            'name' => 'status',
            'type' => 'raw',
            'value' => '($data->status==0)?"Mở":"Khóa"'),    
        'note',
        array(
            'name'=>'change',
            'header'=>'Đổi trực',
            'type' => 'raw',
            'value' => 'CHtml::link("Đổi trực ".$data->name,array("/hr/shiftChange/index&splan_id=$data->id"))'
        ),
        array(
            'name'=>'replate',
            'header'=>'Trực thay',
            'type' => 'raw',
            'value' => 'CHtml::link("Trực thay".$data->name,array("/hr/shiftReplace/index&plan_id=$data->id"))'
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{sd}{view}{update}{delete}',
            'buttons' => array(
            
                'sd'=> array(
                'label'=>'Bố trí lịch trực',
                'url'=>'array("/hr/shiftDetail/index&plan_id=$data->id")',
                 'options' => array(
                        'class' => 'btn-small',
                        'title' => 'Chi tiết ca trực',
                        )
                ),
                'view' => array(
                    'label' => 'View',
                    'icon' => 'icon-list',
                    'url' => 'array("/hr/shift/index&plan_id=$data->id")',
                    'options' => array(
                        'class' => 'btn-small',
                        'title' => 'Chi tiết ca trực',
                        )),
                'update' => array('label' => 'Update', 'options' => array(
                        'class' => 'ajaxFormModal  btn-small update',
                        'ajaxModalSubmited'=>'yiiGridViewUpdate("shift-plan-grid")',
                        'title' => 'Sửa chu kỳ ca trực',
                        )),
                'delete' => array('label' => 'Delete', 'options' => array('class' =>
                            'btn-small delete'))),
            'htmlOptions' => array('style' => 'width: 200px'),
            )),
    )));
?>

<?php

$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'shift-plan-grid',
     'type'=>' striped bordered ',
    //'fixedLeft' => array('CCheckBoxColumn'),
    'dataProvider' => $model->search(),
    'template'=>$dialog->link().'{summary}{pager}{items}{pager}',
    'selectableRows'=>2,
    'columns' =>$dialog->columns(),
    ));

?>
<script type="text/javascript">
 var getSelectedItems= function(){
         var selectedItems=[];
         $('input[id^=selectedItems].select-on-check:checked').each(function(){
            selectedItems.push($(this).val());
         });
       if(selectedItems.length==0){   
       alert('Chọn phiếu để thức hiện.'); return;}
   return selectedItems;    
 }
</script>
