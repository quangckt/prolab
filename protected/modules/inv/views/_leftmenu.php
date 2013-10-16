<?php

$fdate = date('d-m-Y', strtotime(date("Y-m", time())));
$tdate = date('d-m-Y', time());
$whid = 70;
$menu1 = array(
    array('label' => 'Tạo mới', 'icon' => 'plus'),
    array('label' => 'phiếu nhập', 'icon' => 'plus', 'url' => array('/inv/warehousein/create')),
    array('label' => 'phiếu xuất', 'icon' => 'plus', 'url' => array('/inv/warehouseout/create')),
    array('label' => 'phiếu xuất theo ca', 'icon' => 'plus', 'url' => array('/inv/warehouseout/createwithplan')),
    array('label' => 'phiếu chuyển', 'icon' => 'plus', 'url' => array('/inv/transfer/create')),
    array('label' => 'kiểm kê', 'icon' => 'plus', 'url' => array('/inv/CheckInventory/create')),
    array('label' => 'Vật tư sử dụng', 'icon' => 'plus', 'url' => array('/inv/warehouseout/productused')),
    array('label' => 'Liệt kê', 'icon' => 'list-alt'),
    array('label' => 'Phiếu nhập', 'icon' => 'list-alt', 'url' => array('/inv/warehousein/index')),
    array('label' => 'Phiếu xuất', 'icon' => 'list-alt', 'url' => array('/inv/warehouseout/index')),
    array('label' => 'Phiếu xuất theo ca', 'icon' => 'list-alt', 'url' => array('/inv/warehouseout/indexwithplan')),
    array('label' => 'Phiếu chuyển', 'icon' => 'move', 'url' => array('/inv/transfer/index')),
    array('label' => 'kiểm kê', 'icon' => 'plus', 'url' => array('/inv/CheckInventory/index')),
);
$menu2 = array(
    array('label' => 'Nhóm vật tư', 'icon' => 'list-alt', 'url' => array('/product/category/index')),
    array('label' => 'Loại vật tư', 'icon' => 'list-alt', 'url' => array('/product/productType/index')),
    array('label' => 'Mã vật tư', 'icon' => 'list-alt', 'url' => array('/product/product/index')),
    array('label' => 'Nhà cung cấp', 'icon' => 'list-alt', 'url' => array('/product/partner/index')),
    array('label' => 'Loại xuất kho', 'icon' => 'list-alt', 'url' => array('/inv/warehouseoutType/index')),
    array('label' => 'Máy sử dụng', 'icon' => 'list-alt', 'url' => array('/inv/printer/index')),
    array('label' => 'Chu kỳ ca máy', 'icon' => 'list-alt', 'url' => array('/inv/printerPlan/index')),
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
    array('label' => 'Kho', 'icon' => 'user', 'url' => array('/inv/warehouse/index')),
    array('label' => 'Đơn vị tính', 'icon' => 'list-alt', 'url' => array('/product/uom/index')),
);

$menu5 = array(
    array('label' => 'Bảo trì số liệu', 'icon' => 'user', 'url' => array('/inv/tools/repairdata')),
);

$leftMenus = array(
    array('title' => 'Quản lý kho', 'icon' => 'user', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu1, 'type' => 'list')),
    array('title' => 'Danh mục', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu2, 'type' => 'list')),
    array('title' => 'Phân tích & Báo cáo', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu3, 'type' => 'list')),
    array('title' => 'Tiện ích', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu5, 'type' => 'list')),
    array('title' => 'Cài đặt', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu4, 'type' => 'list')),
);
$this->widget('bootstrap.widgets.TbCollapseEx', array('items' => $leftMenus, 'id' => 'navi_leftmenu', 'htmlOptions' => array('class' => '  ')));
?>
 

