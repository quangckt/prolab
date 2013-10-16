
<?php


?>

<h1 class="title">Danh mục mã sản phẩm theo loại vật tư <?php echo $product->category->name ; ?></h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'product-grid',
	'dataProvider'=>$product->search(),
    'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		'code',
		 array('name'=>'name','type'=>'raw','value'=>'$data->updateLink()'),
         array('name'=>'class','value'=>'$data->getClass()'),
         array('name'=>'category_id','value'=>'$data->category->name'),         
         array('name'=>'type_id','value'=>'isset($data->type)?$data->type->name:""'),
         array('name'=>'uom_id','value'=>'$data->uom->name'),
  	     array(
            'class' => 'bootstrap.widgets.TbEditableColumn',
            'name' => 'index',
            'header'=>'Stt',
            'sortable'=>true,
            'editable' => array(
            'title'=>'Nhập stt',
            'emptytext'=>'chưa nhập ...',
            'type'=>'text',
            'url' => $this->createUrl('category/setIndex'),
            'placement' => 'left',
            'inputclass' => 'span1'
            )
         ),                         
         /*
		 array('name'=>'create_uid','value'=>'$data->getCreateName()'),
		 array('name'=>'update_uid','value'=>'$data->getCreateName()'),                
		'costmethod',
		'po_uom_id',
		'sale_uom_id',
		'work_uom_id',
		'length',
		'width',
		'hegth',
		'thickness',
		'note',
		'minqtystock',
		'default_wh_id',
		'lastcost',
		'lastpodate',
		'avgcost',
		'stdcost',
		'qtysale',
		'qtypo',
		'active',
		*/
       array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
			'template' => '{update} {delete}',
			'buttons' => array(
                 'update' => array(
					'label'=> 'Cập nhật',
					'options'=>array(
						'class'=>' btn-small update'
					)
				),
				'delete' => array(
					'label'=> 'Xóa',
					'options'=>array(
						'class'=>' btn-small delete'
					)
				)
			),
            'htmlOptions'=>array('style'=>'width: 115px'),
           )
	),
)); ?>
