<?php
     $session=new CHttpSession;
     $session->open();		
     $criteria = new CDbCriteria();            
     $model=new Warehouseoutline('search');
     $model->unsetAttributes();  // clear any default values
     $model->product_id =$product_id;
     $criteria->addCondition('product_id = "'.$model->product_id.'"');
     $session['Warehouseoutline_dataProvider']=$model->search();
?>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'warehouseinline-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		array(
        'header'=>'Ngày',
        'value'=>'$data->warehouseout->date'
        ),
        array(
        'header'=>'Số phiếu xuất',
        'type'=>'raw',
        'value'=>'CHtml::link($data->warehouseout->num,array("/inv/warehouseout/update&id=".$data->warehouseout->id))'
        ),
        array(
        'header'=>'Ngày xuất',
        'value'=>'$data->warehouseout->date'
        ),
        array(
            'header'=>'Tình trạng',
            'value'=>'(!isset($data->warehouseout->status)||$data->warehouseout->status==0)?"Chưa xuất kho":(($data->warehouseout->status==1)?"Đã xuất kho":"Đã khóa")',
            'type'=>'raw',
        ), 
        
        array(
        'header'=>'ĐVT',
        'value'=>'$data->uom->name'
        ),
        'qty',
		'price',
	),
)); ?>
