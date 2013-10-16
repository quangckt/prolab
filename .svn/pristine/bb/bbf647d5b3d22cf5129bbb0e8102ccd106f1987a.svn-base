<?php 

$this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'warehousein-details-grid',
'dataProvider'=>Warehouseinline::model()->search(),
'template'=>'{summary}{pager}{items}{pager}',
'columns'=>array(
  array(
    'name'=>'product_id',
    ),
    
    array(
    'name'=>'num',
    'value'=> '$data->warehousein->num',
    'type'=>'raw',
    ),
    
    array(
    'name'=>'date',
    'value'=> '$data->warehousein->date',
    'type'=>'raw',
    ),
)

)); ?>