<h1 class="title">Chi tiết tăng vốn cổ phần cho cổ đông đợt ngày <?php echo $date; ?> (<?php echo $amt;?>)</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Các đợt tăng vốn', 'icon' => 'icon-arrow-left', 'url' => Yii::app()->controller->createUrl('indexCapitalIncrease')),
            array('label' => 'Thông tin cổ phần', 'icon' => 'icon-info-sign', 'url' => Yii::app()->createUrl('hr/share/index')),
        ),
    ));
    ?>
</div>

<div class="preview-form">
    <div class="span12 alert alert-info">
        <!--<div class="row-fluid">
            <div class="span12">
                Tăng vốn: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Giá
                trị (<strong><?php /*echo $amt; */?></strong>
                ) &nbsp;&nbsp;&nbsp;Tỉ lệ % (<strong><?php /*echo '100'; */?>%</strong>)
            </div>
        </div>-->
        <div class="row-fluid">
            <div class="span6">
                Chủ đầu tư: &nbsp;&nbsp;&nbsp;Giá
                trị (<strong><?php echo $sumCIOfComp; ?></strong>
                ) &nbsp;&nbsp;&nbsp;Tỉ lệ % (<strong><?php echo $ratePercentOfCompany; ?>%</strong>)
            </div>
            <div class="span6">
                Nhân viên: &nbsp;&nbsp;&nbsp;Giá
                trị (<strong><?php echo $sumCIOfEmp; ?></strong>
                ) &nbsp;&nbsp;&nbsp;Tỉ lệ % (<strong><?php echo $ratePercentOfEmployee; ?>%</strong>)
            </div>
        </div>
    </div>
</div>

<?php  $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'acceptProfit-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'horizontal',
    'action' => Yii::app()->controller->createUrl('SubmitAcceptCI'),
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
));
?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'detailCapitalIncrease-grid',
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider,
    'template' => '{summary}{pager}{items}{pager}',
    'columns' => array(
        array(
            'header' => 'STT',
            'value' => '$row+1', // row is zero based
        ),
        array(
            'header' => 'Mã',
            'name' => 'code',
            'type' => 'raw',
        ),
        array(
            'header' => 'Tên cổ đông',
            'name' => 'fullName',
            'type' => 'raw',
        ),
        array(
            'header' => 'Tỷ lệ %',
            'name' => 'rateOfStock',
            'type' => 'raw',
            'value' => array($this, 'ratePercent'),
        ),
        array(
            'header' => 'Giá trị tăng vốn',
            'type' => 'number',
            'value' => array($this, 'valueOfProfit'),
        ),
        array(
            'header' => 'Thanh toán',
            'type' => 'raw',
            'value' => 'CHtml::textField($data["emp_id"], "", array("class" => "span5 isnum acceptPfofit", "id" => $data["emp_id"]))',
        ),
    ),
));?>

<div class="form">
    <div class="span10">
        <input type="hidden" name="date" value="<?php echo $date; ?>"/>
        <input type="hidden" name="CI_id" value="<?php echo $CI_id; ?>"/>
        <input type="hidden" name="amt" value="<?php echo $amt; ?>"/>
    </div>
    <div class="span2">
        <?php
        $this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'type' => 'primary', 'icon' => 'ok white', 'label' => 'Chấp nhận', 'htmlOptions' => array('id' => 'acceptOK', 'class' => '')));?>
    </div>
</div>
<?php $this->endWidget(); ?>

<script type="text/javascript">
    window.onbeforeunload = function () {
        if (clicked == false) {
            if (navigator.userAgent.indexOf("Firefox") != -1) {
                if (confirm("Are you sure you want to close the window without submitting the documents ?")) {
                    self.close();
                    return;
                }
            }
            return "Are you sure you want to close the window without submitting the documents?";
        }
    };
</script>