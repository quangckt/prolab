<?php
$fdate = date('d-m-Y', strtotime(date("Y-m", time())));
$tdate = date('d-m-Y', strtotime(date("Y-m-d", strtotime($fdate)) . "+1 month"));
?>
<?php
$menu1 = array(
    array('label' => 'Hồ sơ', 'icon' => 'home'),
    array('label' => 'Nhân viên', 'icon' => 'user', 'url' => array('/hr/employee/index')),
    array('label' => 'Thêm Nhân viên', 'icon' => 'user', 'url' => array('/hr/employee/create')),
    array('label' => 'Cập nhật userID', 'icon' => 'user', 'url' => array('/hr/ShiftDetail/mapEmpId')),
    array('label' => 'Báo cáo'),
    array('label' => 'Lao động ', 'icon' => 'list-alt', 'url' => Reports::createUrl('hr_report_job.mrt', array()), 'linkOptions' => array('target' => "_blank"), 'accesskey' => 'p'),
    array('label' => 'Trình độ', 'icon' => 'list-alt', 'url' => Reports::createUrl('hr_employee_edu.mrt', array()), 'linkOptions' => array('target' => "_blank"), 'accesskey' => ''),
);

$menu2 = array(
    array('label' => 'Cổ Phần', 'icon' => 'home'),
    array('label' => 'Cổ phần', 'icon' => 'list-alt', 'url' => array('/hr/share/index')),
    array('label' => 'Tăng vốn cổ phần', 'icon' => 'list-alt', 'url' => array('/hr/batch/indexCapitalIncrease')),
    array('label' => 'Phát hành cổ phần', 'icon' => 'list-alt', 'url' => array('/hr/batch/index')),
    array('label' => 'Mua cổ phần', 'icon' => 'list-alt', 'url' => array('/hr/batch/index')),
    array('label' => 'Bán cổ phần', 'icon' => 'list-alt', 'url' => array('/hr/transaction/indexSaleStock')),
    array('label' => 'Chia lãi', 'icon' => 'list-alt', 'url' => array('/hr/profitDetail/allProfit')),
    array('label' => 'Trả lãi vay', 'icon' => 'list-alt', 'url' => array('/hr/payperiod/index')),
    array('label' => 'Trả nợ vay', 'icon' => 'list-alt', 'url' => array('/hr/payperiod/allPay')),
    array('label' => 'Báo cáo'),
    array('label' => 'Tổng hợp Cổ phần', 'icon' => 'list-alt', 'url' => array('/hr/share/totalStock')),
);

$menu3 = array(
    array('label' => 'Lương', 'icon' => 'home'),
    array('label' => 'Tham số lương', 'icon' => 'list-alt', 'url' => array('/hr/paramsalary/index')),
    array('label' => 'Lương', 'icon' => 'list-alt', 'url' => array('/hr/salary/index')),
    array('label' => 'Báo cáo'),
    array('label' => 'Tổng hợp lương', 'icon' => 'list-alt', 'url' => array('/hr/share/totalStock')),
);
$menu4 = array(
    array('label' => 'Thâm niên', 'icon' => 'home'),
    array('label' => 'Duyệt thâm niên', 'icon' => 'list-alt', 'url' => array('/hr/seniority/index')),
    array('label' => 'Truy lãnh thâm niên', 'icon' => 'list-alt', 'url' => array('/hr/seniority/backPay')),
    array('label' => 'Trợ cấp nghỉ việc', 'icon' => 'list-alt', 'url' => array('/hr/seniority/severAllow')),
    array('label' => 'Thâm niên công tác', 'icon' => 'list-alt', 'url' => Reports::createUrl('hr_report_seniority.mrt', array())),
    array('label' => 'Truy lãnh thâm niên công tác', 'icon' => 'list-alt', 'url' => Reports::createUrl('hr_report_acceptSeniority.mrt', array())),
    array('label' => 'Trợ cấp nghỉ việc', 'icon' => 'list-alt', 'url' => Reports::createUrl('hr_report_subsidyLayOff.mrt', array())),
);
$menu6 = array(
    array('label' => 'Lịch trực', 'icon' => 'calendar'),
    array('label' => 'Bố trí ca trực', 'icon' => 'list-alt', 'url' => array('/hr/shiftPlan/index')),
    array('label' => 'Xử lý ', 'icon' => 'list-alt', 'url' => array('/hr/shiftPlan/select')),
    array('label' => 'Báo cáo'),
        // array('label' => 'Tổng hợp ngày giờ làm việc', 'icon' => 'icon-list-alt', 'url' => Reports::createUrl('hr_totalTimes.mrt', array('SearchEmp[fdate]' => $fdate, 'SearchEmp[tdate]' => $tdate), 'timeWorksFilter'), 'linkOptions' => array('target' => '_blank', 'class' => 'popup-full')),
);
$menu5 = array(
    array('label' => 'Sự kiện', 'icon' => 'home'),
    array('label' => 'Sự kiện trong tháng', 'icon' => 'list-alt', 'url' => array('/hr/eventcalendar/index')),
);

$settings = array(
    array('label' => 'Quy định thưởng/phạt', 'icon' => 'time', 'url' => array("/hr/payrollrule/index")),
    array('label' => 'Màu Sự kiện', 'icon' => 'pencil', 'url' => array('/hr/settings/colors')),
    array('label' => 'Ngày nghỉ lễ', 'icon' => 'pencil', 'url' => array('/hr/settings/holidays')),
);


$listIndex = array(
    array('label' => 'Phòng ban', 'icon' => 'list-alt', 'url' => array('/hr/department/index')),
    array('label' => 'Tỉnh/Thành phố', 'icon' => 'list-alt', 'url' => array('/hr/city/index')),
    array('label' => 'Quận/Huyện', 'icon' => 'list-alt', 'url' => array('/hr/district/index')),
    array('label' => 'Chức vụ', 'icon' => 'list-alt', 'url' => array('/hr/job/index')),
    array('label' => 'Ngành học', 'icon' => 'list-alt', 'url' => array('/hr/studyField/index')),
    array('label' => 'Trình độ văn hóa', 'icon' => 'list-alt', 'url' => array('/hr/levelofedu/index')),
    array('label' => 'Cửa hàng', 'icon' => 'list-alt', 'url' => array('/hr/shop/index')));


$leftMenus = array(
    array('title' => 'Nhân viên', 'icon' => 'user', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu1, 'type' => 'list')),
    array('title' => 'Công việc', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu6, 'type' => 'list')),
    array('title' => 'Sự kiện', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu5, 'type' => 'list')),
    array('title' => 'Cổ đông', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu2, 'type' => 'list')),
    array('title' => 'Lương', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu3, 'type' => 'list')),
    array('title' => 'Thâm niên', 'icon' => 'tasks', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $menu4, 'type' => 'list')),
    array('title' => 'Danh mục', 'icon' => 'list-alt', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $listIndex, 'type' => 'list')),
    array('title' => 'Cài đặt', 'icon' => 'wrench', 'item' => array('class' => 'bootstrap.widgets.TbMenu', 'items' => $settings, 'type' => 'list')),
);

$menuEmployee = array(
    array('label' => 'Hồ sơ', 'icon' => 'edit', 'url' => array('/hr/employee/update', 'id' => User::model()->find('id=:id', array(':id' => Yii::app()->user->id))->emp_id)),
    array('label' => 'Đổi mật khẩu', 'icon' => 'edit', 'url' => array('/hr/employee/changePass', 'id' => Yii::app()->user->id)),
    array('label' => 'Đăng ký đến', 'icon' => 'time', 'url' => array('/hr/shiftDetail/regTimeIn')),
    array('label' => 'Đăng ký về', 'icon' => 'time', 'url' => array('/hr/shiftDetail/regTimeOut')),
    array('label' => 'Sự kiện chung', 'icon' => 'calendar', 'url' => array('/hr/eventCalendar/index')),
    array('label' => 'Sự kiện của tôi', 'icon' => 'calendar', 'url' => array('/hr/eventCalendar/myEvent')),
    array('label' => 'Lịch trực', 'icon' => 'calendar', 'url' => array('/hr/shiftDetail/myShiftDetail')),
    array('label' => 'Đổi trực', 'icon' => 'edit', 'url' => array('/hr/shiftChange/myShiftChange')),
    array('label' => 'Trực thay', 'icon' => 'edit', 'url' => array('/hr/shiftreplace/myShiftReplace')),
    array('label' => 'Xếp loại', 'icon' => 'star-empty', 'url' => array('/hr/shiftdetail/grade')),
    array('label' => 'Cổ phần', 'icon' => 'info-sign', 'url' => array('/hr/share/index')),
    array('label' => 'Thoát', 'icon' => 'user', 'url' => Yii::app()->getModule('user')->logoutUrl),
);
?>
<?php
$rights = Rights::getAssignedRoles();
$checkRole = isset($rights['nhanvien']) ? true : false;
if ($checkRole) {
    ?>
    <div id="accordion2">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Xin
                    chào, <?php echo Yii::app()->user->name ?></a>
            </div>
            <div id="collapseOne" class="accordion-body collapse in"> <!-- in: expand (sổ ra) ngay từ đầu -->
                <div class="accordion-inner">
                    <?php $this->widget('bootstrap.widgets.TbMenu', array('items' => $menuEmployee, 'type' => 'list')); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
else
    $this->widget('bootstrap.widgets.TbCollapseEx', array('items' => $leftMenus, 'id' => 'navi_leftmenu', 'htmlOptions' => array('class' => ' ')));
?>



