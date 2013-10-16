
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'limit-grid',
	'dataProvider'=>$limit->search(),
    'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		array(
        'header'=>'Kho',
        'value'=>'$data->wh->name'
        ),
        array(
        'header'=>'Mặt hàng',
        'value'=>'$data->product->name'
        ),
        array(
        'header'=>'Định mức tồn',
        'name'=>'qtyLimit',
        'value'=>'$data->qtyLimit',
        ),
        
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{update}',
			'buttons' => array(
                 'update' => array(
					'label'=> 'Sửa ',
                    'title'=>'Sửa định mức tồn',
                    'url' => 'array("/product/product/updateLimit&id=$data->id")',
                    
					'options'=>array(
						'class'=>'ajaxFormModal btn-small update'
					)
				),
                'htmlOptions'=>array('style'=>'width: 250px'),
			),
           )
	),
	
)); ?>
