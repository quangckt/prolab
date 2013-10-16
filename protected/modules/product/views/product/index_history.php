
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'inventorylogdetail-grid',
	'dataProvider'=>$detail->search(),
    'type'=>'bordered , striped',
    'filter'=>$detail,
    'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(
		array(
        'name'=>'remarks_search',
        'header'=>'Loại',
        'type'=>'raw',
        'filter'=>CHtml::dropDownList("Inventorylogdetail[remarks_search]", "",  
                array(
                    ""=>"chọn ...",
                    " "=>"Tất cả",
                    "Nhập kho"=>"Nhập kho",
                    "Xuất kho"=>"Xuất kho",
                    "Chuyển kho"=>"Chuyển kho",
                    "Hủy nhập kho"=>"Hủy nhập kho",
                    "Hủy Xuất kho"=>"Hủy Xuất kho",
                    "Hủy chuyển kho"=>"Hủy chuyển kho",
                )
            ),
        'value'=>'$data->inventorylog->remarks'
        ),
        array(
        'name'=>'refnum_search',
        'header'=>'Số phiếu',
        'type'=>'raw',
        'value'=>'CHtml::link($data->inventorylog->refnum,array("/product/product/searchNum&num=".$data->inventorylog->refnum."&id=".$data->inventorylog->ref_id))'
        ),
        array(
        'name'=>'refdate_search',
        'header'=>'Ngày',
        'type'=>'raw',
        'value'=>'$data->inventorylog->refdate',
        ),
        
        array(
        'header'=>'Kho',
        'name'=>'wh_id',
        'filter'=>CHtml::dropDownList("Inventorylogdetail[wh_id]",'',CHtml::listData(Warehouse::model()->findAll(),'id','name'),array('prompt'=>'chọn..')),
        'value'=>'$data->wh->name',
        ),
        array(
        'header'=>'Số lượng trước',
        'name'=>'before_qty',
        'type'=>'number',
        'value'=>'$data->before_qty',
        ),
        
        array(
        'header'=>'Số lượng',
        'name'=>'qty',
        'type'=>'number',
        'value'=>'$data->qty',
        ),
        array(
        'header'=>'Số lượng sau',
        'name'=>'after_qty',
        'type'=>'number',
        'value'=>'$data->after_qty',
        ),
        array(
        'header'=>'Giá',
        'name'=>'cost',
        'type'=>'number',
        'value'=>'$data->cost',
        ),
        
        
	),
)); ?>
