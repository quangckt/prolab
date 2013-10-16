<?php
     $session=new CHttpSession;
     $session->open();		
     $criteria = new CDbCriteria();            
     $model=new Transferline('search');
     $model->unsetAttributes();  // clear any default values
     $model->product_id =$product_id;
     $criteria->addCondition('product_id = "'.$model->product_id.'"');
     $session['Tranferline_dataProvider']=$model->search();
?>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'warehouseinline-grid',
	'dataProvider'=>$model->search(),
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
        array(
            'header'=>'Ngày',
            'value'=>'$data->trans->date'
        ),
        array(
            'header'=>'Số phiếu chuyển',
            'type'=>'raw',
            'value'=>'CHtml::link($data->trans->num,array("/inv/transfer/update&id=".$data->trans->id))'
        ),
        array(
            'header'=>'Tình trạng',
            'value'=>'(!isset($data->trans->status)||$data->trans->status==0)?"Chưa chuyển kho":(($data->trans->status==1)?"Đã chuyển kho":"Đã khóa")',
            'type'=>'raw',
        ),
        array(
            'header'=>'Từ kho',
            'value'=>'$data->trans->fromWh->name'
        ),
        array(
            'header'=>'Đến kho',
            'value'=>'$data->trans->toWh->name'
        ),
        
		'uom_id',
		'qty',
	),
)); ?>
