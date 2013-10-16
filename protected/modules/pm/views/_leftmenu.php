<?php

$fdate = date('d-m-Y', strtotime(date("Y-m", time())));
$tdate = date('d-m-Y', time());
$whid = 70;
$menu1 = array(
    array('label' => 'Tạo mới', 'icon' => 'plus'),
    array('label' => 'phiếu nhận việc', 'icon' => 'plus', 'url' => array('/rec/workreceive/create')),
//    array('label' => 'phiếu xuất', 'icon' => 'plus', 'url' => array('/inv/warehouseout/create')),
//    array('label' => 'phiếu chuyển', 'icon' => 'plus', 'url' => array('/inv/transfer/create')),
//    array('label' => 'kiểm kê', 'icon' => 'plus', 'url' => array('/inv/CheckInventory/create')),
//    array('label' => 'Vật tư sử dụng', 'icon' => 'plus', 'url' => array('/inv/warehouseout/productused')),
    array('label' => 'Liệt kê', 'icon' => 'list-alt'),
    array('label' => 'Phiếu nhận việc', 'icon' => 'list-alt', 'url' => array('/rec/workreceive/index')),
//    array('label' => 'Phiếu xuất', 'icon' => 'list-alt', 'url' => array('/inv/warehouseout/index')),
//    array('label' => 'Phiếu chuyển', 'icon' => 'move', 'url' => array('/inv/transfer/index')),
//    array('label' => 'kiểm kê', 'icon' => 'plus', 'url' => array('/inv/CheckInventory/index')),
);
$menu2 = array(
    array('label' => 'Máy sử dụng', 'icon' => 'list-alt', 'url' => array('/pm/printer/index')),
    array('label' => 'Chu kỳ ca máy', 'icon' => 'list-alt', 'url' => array('/pm/printerPlan/index')),
);
$menu3 = array(
    array('label' => 'Tổng hợp nhập xuất tồn', 'icon' => 'icon-list-alt', 'url' => array('/inv/ReportInventory/index')),
    array('label' => 'Chi tiết nhập vật', 'icon' => 'icon-list-alt', 'url' => Reports::createUrl('inv_whindetails.mrt', array('Search[fdate]' => $fdate, 'Search[tdate]' => $tdate), 'whDetailsFilter'), 'linkOptions' => array('target' => '_blank', 'class' => 'popup-full')),
    array('label' => 'Chi tiết xuất vật tư', 'icon' => 'icon-list-alt', 'url' => Reports::createUrl('inv_whoutdetails.mrt', array('Search[fdate]' => $fdate, 'Search[tdate]' => $tdate), 'whDetailsFilter'), 'linkOptions' => array('target' => '_blank', 'class' => 'popup-full')),
    array('label' => 'Nhập-xuất-tồn', 'icon' => 'icon-list-alt', 'url' => Reports::createUrl('inv_general_inventory.mrt', array('Search[fdate]' => $fdate, 'Search[tdate]' => $tdate), 'inventoryFilter'), 'linkOptions' => array('target' => '_blank', 'class' => 'popup-full')),
    array('label' => 'Thẻ kho', 'icon' => 'icon-list-alt', 'url' => Reports::createUrl('inv_stock.mrt', array('Search[fdate]' => $fdate, 'Search[tdate]' => $tdate, 'Search[whid]' => $whid), 'stockFilter'), 'linkOptions' => array('target' => '_blank', 'class' => 'popup-full')),
    array('label' => 'Chi tiết xuất', 'icon' => 'icon-list-alt', 'url' => Reports::createUrl('inv_general_inventory_details.mrt', array('Search[fdate]' => $fdate, 'Search[tdate]' => $tdate), 'inventoryDetailsFilter'), 'linkOptions' => array('target' => '_blank', 'class' => 'popup-full')),
    array('label' => 'Chi tiết nhập xuất', 'icon' => 'icon-list-alt', 'url' => Reports::createUrl('inv_stock.mrt', array('Search[fdate]' => $fdate, 'Search[tdate]' => $tdate), 'stockFilter'), 'linkOptions' => array('target' => '_blank')),
    array('label' => 'Vật tư sử dụng', 'icon' => 'icon-list-alt', 'url' => Reports::createUrl('inv_typeproductdetails.mrt', array('Search[fdate]' => $fdate, 'Search[tdate]' => $tdate), 'dateFilter'), 'linkOptions' => array('target' => '_blank')),
);
$menu4 = array(
//    array('label' => 'Cách tính giá', 'icon' => 'list-alt', 'url' => array('/rec/waycalcprice/index')),
//    array('label' => 'Đơn vị tính', 'icon' => 'list-alt', 'url' => array('/rec/uom/index')),
);

$menu5 = array(
    array('label' => 'Bảo trì số liệu', 'icon' => 'user', 'url' => array('/inv/tools/repairdata')),
);

$leftMenus = array(
    array('title' => 'Quản lý nhận việc', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu1, 'type' => 'list')),
    array('title' => 'Danh mục', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu2, 'type' => 'list')),
    //array('title' => 'Phân tích & Báo cáo', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu3, 'type' => 'list')),
    //array('title' => 'Tiện ích', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu5, 'type' => 'list')),
    array('title' => 'Cài đặt', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu4, 'type' => 'list')),
);
$this->widget('bootstrap.widgets.TbCollapseEx', array('items' => $leftMenus, 'id' => 'navi_leftmenu', 'htmlOptions' => array('class' => '  ')));
?>
 

