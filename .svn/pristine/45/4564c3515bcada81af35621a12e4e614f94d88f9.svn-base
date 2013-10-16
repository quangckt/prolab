
<?php 
$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'inventory-grid',
	'dataProvider'=>Inventory::model()->search(),
    'template'=>'{pager}{items}{pager}',
	'columns'=>array(
        array(
        'header'=>'Mã hàng',
        'name'=>'product.code'
        ),
        array(
        'header'=>'Tên hàng',        
        'name'=>'product.name'
        ),
        array(
        'header'=>'ĐVT',        
        'name'=>'product.uom.name',
        'htmlOptions'=>array('class'=>'isnum','style'=>'width:40px')
        ),                
        array(
        'header'=>'Kho',        
        'name'=>'wh.name'
        ),
        array(
        'header'=>'Giá',
        'name'=>'product.avgcost',
        'htmlOptions'=>array('class'=>'isnum','style'=>'width:100px'),
        'type'=>'number'
        ),         
        array(
        'header'=>'Số lượng tồn',
        'value'=>'$data->qty',
        'htmlOptions'=>array('class'=>'isnum','style'=>'width:100px'),
        'type'=>'number'
        )       
	),    
));
?>