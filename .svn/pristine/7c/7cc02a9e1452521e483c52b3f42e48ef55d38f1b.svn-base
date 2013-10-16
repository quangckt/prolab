<?php
     $session=new CHttpSession;
     $session->open();		
     $criteria = new CDbCriteria();            
     $model=new Warehouseinline('search');
     $model->unsetAttributes();  // clear any default values
     $model->product_id =$product_id;
     $criteria->addCondition('product_id = "'.$model->product_id.'"');
     $session['Warehouseinline_dataProvider']=$model->search();
?>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'warehouseinline-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		array(
        'header'=>'Ngày',
        'value'=>'$data->warehousein->date'
        ),
        array(
        'header'=>'Số phiếu nhập',
        'type'=>'raw',
        'value'=>'CHtml::link($data->warehousein->num,array("/inv/warehousein/update&id=".$data->warehousein->id))'
        ),
        
        array(
        'header'=>'Nhà cung cấp',
        'value'=>'$data->warehousein->supplier->name'
        ),
        array(
        'header'=>'Số hóa đơn',
        'value'=>'$data->warehousein->invnum'
        ),  
        
        array(
        'header'=>'Ngày hóa đơn',
        'value'=>'$data->warehousein->invdate'
        ),          
                                
		array(
        'header'=>'mã hàng',
        'value'=>'$data->product->code'
        ), 
        array(
            'header'=>'Tình trạng',
            'value'=>'(!isset($data->warehousein->status)||$data->warehousein->status==0)?"Chưa nhập kho":(($data->warehousein->status==1)?"Đã nhập kho":"Đã khóa")',
            'type'=>'raw',
        ), 
        array(
        'header'=>'ĐVT',
        'value'=>'$data->uom->name'
        ),
		'qty',
		'price',
		/*
		'discount',
		'wh_id',
		'lenght',
		'width',
		'thickness',
		'note',
		'amounttotal',
		'amountvat',
		'status',
		'create_date',
		 array('name'=>'create_uid','value'=>'$data->getCreateName()'),
		'update_date',
		 array('name'=>'update_uid','value'=>'$data->getCreateName()'),
		'uom_id',
		*/
	),
)); ?>
