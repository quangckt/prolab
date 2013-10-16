<?php
$this->breadcrumbs = array(
    'Profit Details',
);

Yii::app()->clientScript->registerScript('shareProfit', "
$('.shareProfit-form form').submit(function(){
    if ($('#Profit_amt').val() == '' || $('#Profit_amt').val() == 0) {
        $('#Profit_amt').val('');
        $('#Profit_amt').focus();
        alert('Giá trị lãi phải lớn hơn 0!!!');
    }else if ($('#Profit_date').val() == ''){
        $('#shareProfit').attr('disabled', true);
        $('#Profit_date').focus();
        alert('Bạn chưa nhập ngày!!!');
    } else {
        $('#checkPressButton').val('1');
        $.fn.yiiGridView.update('profit-detail-grid', {
            data: $(this).serialize()
        });
        alert('Chia lãi thành công!');
    }
    return false;
});
");
?>

<h1 class="title">Nhận lãi</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Các đợt nhận lãi', 'icon' => 'icon-arrow-left', 'url' => Yii::app()->controller->createUrl('allProfit')),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => Yii::app()->createUrl('hr/share/index')),
        ),
    ));
    ?>
</div>

<div class="shareProfit-form">
    <?php $this->renderPartial('_search', array('modelProfit' => $modelProfit)); ?>
</div><!-- preview-form -->


<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'profit-detail-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}', //SUMMARY VÀ PHẦN TRANG Ở TRÊN, RỒI ĐẾN DANH SÁCH (ITEM) CUỐI CÙNG LÀ PHÂN TRANG Ở DƯỚI
    'columns' => array(
        array(
            'header' => 'STT',
            'value' => '$row+1',
        ),
        array(
            'header' => 'Mã',
            'name' => 'code',
        ),
        array(
            'header' => 'Tên cổ đông',
            'name' => 'fullName',
        ),
        array(
            'header' => 'Tỉ lệ phần trăm',
            'type' => 'numberTwo',
            'name' => 'rateOfStock',
        ),
        array(
            'name' => 'Giá trị lãi',
            'type' => 'number',
            'value' => array($this, 'valueOfProfit'),
        ),
    ),
));?>

