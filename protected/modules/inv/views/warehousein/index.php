<?php
$this->breadcrumbs=array(
'Warehouseins',
);



Yii::app()->clientScript->registerScript('search', "
    $('.search-button').click(function(){
    $('.search-form').slideToggle('fast');
    return false;
    });
    $('.search-form form').submit(function(){
    $.fn.yiiGridView.update('warehousein-grid', {
    data: $(this).serialize()
    });
    return false;
    });
");

?>

<h1 class="title"> <i class="icon-th-list"></i><span> Liệt kê phiếu nhập vật tư</span></h1>
<hr />
<div class="tools-bar">
<?php
$approved=Warehousein::STATUS_APPROVED;
$undo=Warehousein::STATUS_CANCEL;
$lock=Warehousein::STATUS_LOCKED;
$url=Yii::app()->controller->createUrl('updatestatus');

$this->widget('bootstrap.widgets.TbMenu', array(
'type'=>'pills',
'items'=>array(
    array('label'=>'Tạo mới', 'icon'=>'icon-plus', 'url'=>Yii::app()->controller->createUrl('create'), 'linkOptions'=>array('accesskey'=>'t')),
    array('label'=>'Tìm kiếm', 'icon'=>'icon-search', 'url'=>'#', 'linkOptions'=>array('class'=>'search-button','accesskey'=>'f')),
    array('label'=>'Xử lý', 'icon'=>'icon-tasks', 'url'=>'#', 'items'=>array(
    array('label'=>'Nhập hàng vào kho', 'icon'=>'icon-ok', 'url'=>'#', 'linkOptions'=>array('data'=>"{status:$approved,url:'$url'}",'class'=>'updatestatus')),
    array('label'=>'Hủy hàng đã nhập kho', 'icon'=>'icon-repeat', 'url'=>'#', 'linkOptions'=>array('data'=>"{status:$undo,url:'$url'}",'class'=>'updatestatus')),
    array('label'=>'Khóa phiếu nhập hàng', 'icon'=>'icon-lock', 'url'=>'#', 'linkOptions'=>array('data'=>"{status:$lock,url:'$url'}",'class'=>'updatestatus')),        
    )),
    array('label'=>'Xuất ra Excel', 'icon'=>'icon-download', 'url'=>Yii::app()->controller->createUrl('GenerateExcel'), 'linkOptions'=>array('target'=>'_blank'), 'visible'=>true),
),
));
?>
</div>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
'model'=>$model,
)); ?>
</div><!-- search-form -->


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
            'gridId' => 'warehousein-grid', //id of related grid
            'storage' => 'db',  //where to store settings: 'db', 'session', 'cookie'
            'fixedLeft' => array('CCheckBoxColumn'), //fix checkbox to the left side 
            'model' => $model->search()->model, //model is used to get attribute labels
            'columns' =>array(
     array('id'=>'selectedItems', 'class'=>'CCheckBoxColumn',
                ),
    'date',
    array('name'=>'num',
    'type'=>'raw',
    'value'=>'$data->updateLink()'
    ),
    array('name'=>'supplier_id',
    'type'=>'raw',
    'value'=>'$data->supplier->name'
    ),
    'invdate',
    'invnum',
     array(
     'name'=>'amounttotal',
     'type'=>'number',
     'htmlOptions'=>array('class'=>'isnum')
      ),   
    'note',
    array(
    'name'=>'status',
    'value'=>array($this,'getStatus'),
    'type'=>'raw',
     ),
    'paymentterm',
    'paid',
    array(
          'name'=>'create_date',
          'value'=>'date("d-m-Y",strtotime($data->create_date))',
          'type'=>'raw',
         ),
    array('name'=>'create_uid','value'=>'$data->getCreateName()'),
    array(
          'name'=>'update_date',
          'value'=>'date("d-m-Y",strtotime($data->update_date))',
          'type'=>'raw',
         ),
    array('name'=>'update_uid','value'=>'$data->getCreateName()'),
    array('name'=>'branch_id','value'=>'$data->getBranchName()'),
    array(
    'class'=>'bootstrap.widgets.TbButtonColumn',
    'template' => '{update} {delete}',
    'buttons' => array(
    //'view' => array(
//        'label'=> 'Xem',
//        'url'=>'Reports::createUrl("inv_warehouse_in.mrt",array("id"=>$data->id))',
//        'options'=>array(
//        'class'=>' view',
//        'target'=>"_blank"
//        )
//    ),
    'update' => array(
        'label'=> 'Sửa',
        'options'=>array(
        'class'=>' update'
        )
    ),
    'delete' => array(
        'label'=> 'Xóa',
        'options'=>array(
        'class'=>' delete'
        )
    )
    ),
    
    )
), 
          
   )));


$this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'warehousein-grid',
'dataProvider'=>$model->search(),
'template'=> $dialog->link().'{summary}{pager}{items}{pager}',
'selectableRows'=>2,
'columns'=>$dialog->columns()
)); ?>



<script type="text/javascript">
  Prolab.behaviors.updateStatus=function(content){
    $('a.updatestatus',content).each(function(){
     $(this).click(function(){ 
         var pdata= eval('(' + $(this).attr('data') + ')'); 
         pdata.selectedItems=[];
         $('input[id^=selectedItems].select-on-check:checked').each(function(){
            pdata.selectedItems.push($(this).val());
         });
       if(pdata.selectedItems.length==0){   
       alert('Chọn phiếu để thức hiện.'); return;}
       
        Prolab.wait();
        $.post(pdata.url,pdata,function(data,status,xhr){
                Prolab.wait(false);
        	   if(data=='ok')
                $.fn.yiiGridView.update('warehousein-grid');
               else alert(data);
        	 });          
      });  
    });
  } 
 var afterDelete=function(){
    alert('sdsad');
    
 }; 
    
</script>