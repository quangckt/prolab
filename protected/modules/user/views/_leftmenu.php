<?php
$menu1 = array(
    array('label' => 'Modules'),
    array('label' => 'Modules', 'icon' => 'cog', 'url' => '#'),
    array('label' => 'Công ty'),
    array('label' => 'Công ty', 'icon' => 'list-alt', 'url' => array('/sys/company/view', 'id' => 1)),
    array('label' => 'Chi nhánh', 'icon' => 'list-alt', 'url' => array('/sys/branch/')),
    array('label' => 'Người dùng'),
    array('label' => 'Người dùng', 'icon' => 'user', 'url' => array('/user/admin/admin')),
    array('label' => 'Phân quyền', 'icon' => 'lock', 'url' => array('/rights/assignment/view')),
    array('label' => 'Thông báo'),
    array('label' => 'Tổng hợp lỗi', 'icon' => 'warning-sign', 'url' => array('/sys/error/index')),
    array('label' => 'Thông báo chung', 'icon' => 'warning-sign', 'url' => array('/sys/error/genNot')),
    array('label' => 'Cài đặt', 'icon' => 'cog'),
    array('label' => 'Đơn vị tính', 'icon' => 'list-alt', 'url' => array('/product/uom')),
);
?>
<div class="accordion" id="accordion2">
    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                <i class="icon-home"></i>Hệ thống</a>
        </div>
        <div id="collapseOne" class="accordion-body in collapse" style="height: auto; ">
            <div class="accordion-inner">
                <?php $this->widget('bootstrap.widgets.TbMenu', array('items' => $menu1, 'type' => 'list')); ?>

            </div>
        </div>
    </div>
</div>

