<?php
$this->breadcrumbs = array(
    'Seniorities',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    if($('.search-form').is(':hidden')){
        $('.search-form').fadeIn('normal');
        $('#seniority').attr('style', 'display:none');
        $('.valueOfMonth-form').attr('style', 'display:none');
        $('#display1').attr('style', 'display:auto');
        $('#display2').attr('style', 'display:none');
    }else{
        $('.search-form').fadeOut('normal');
        $('#seniority').attr('style', 'display:auto');
        $('.valueOfMonth-form').attr('style', 'display:auto');
        $('#display1').attr('style', 'display:none');
        $('#display2').attr('style', 'display:auto');
    }
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('seniority-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

Yii::app()->clientScript->registerScript('valueOfMonth', "
$('.valueOfMonth-form form').submit(function(){
    if($('#Seniority_year').val()=='' || $('#Seniority_valueSeniority').val()==''){
        bootbox.alert('Ngày tính thâm niên và giá trị một tháng thâm niên không được bỏ trống!!!');
    }else{
        $('#myTab').fadeIn('normal');
        $.fn.yiiGridView.update('seniority-grid', {
            data: $(this).serialize()
        });
    }
    return false;
});
");
?>

<?php
$checkAccumulated = Seniority::model()->find('type=1');
$resultCheck = empty($checkAccumulated) ? TRUE : FALSE;
?>

<h1 class="title" id="display1">Cập nhật lũy kế</h1>
<h1 class="title" id="display2">Xét duyệt thâm niên công tác</h1>
<hr />
<div class="tools-bar" id="toolbar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array(
                'label' => 'Cập nhật lũy kế ban đầu',
                'icon' => 'icon-search',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'search-button'
                ),
                'accesskey' => 'f'
            ),
        ),
    ));
    ?>
</div>

<?php //if ($resultCheck) { ?>
<div class="search-form">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->
<?php //} ?>

<div class="valueOfMonth-form" style="display: auto;">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'valueOfMonth-form',
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>
    <div class="row-fluid">
        <div class="span2">
            <?php echo $form->labelEx($model, 'year', array('class' => '')); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->year),
                'attribute' => 'year',
                'language' => 'vi',
                'options' => array(
                    'dateFormat' => 'dd-mm-yy',
                    'changeMonth' => TRUE,
                    'changeYear' => TRUE,
                ),
                'htmlOptions' => array('class' => 'span'),
            ));
            ?>
        </div>
        <div class="span2">
            <?php echo CHtml::label('Giá trị 1 tháng thâm niên', '', array()); ?>
            <?php echo $form->textField($model, 'valueSeniority', array('class' => 'span isnum')); ?>
        </div>
        <div class="span3">
            <?php echo CHtml::label('&nbsp;', '', array()); ?>
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'submit',
                'type' => 'primary',
                'icon' => 'ok white',
                'label' => 'Tính'
            ));
            ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>

<?php
$this->widget('bootstrap.widgets.TbTabs', array(
    'id' => 'myTab',
    'type' => 'tabs',
    'placement' => 'above', // 'above', 'right', 'below' or 'left'
    'tabs' => array(
        array(
            'label' => 'Duyệt thâm niên',
            'content' => $this->renderPartial('_acceptSeniority', array(
                'model' => $model,
                'dateSen' => $dateSen,
                'valueOfMonth' => $valueOfMonth,
                'checkExits' => $checkExits,
                    ), true),
            'active' => true
        ),
        array(
            'label' => 'Tổng hợp tỷ lệ thưởng',
            'content' => '',
        ),
        array(
            'label' => 'Tổng hợp giá trị thưởng',
            'content' => '',
        ),
        array(
            'label' => 'Chi tiết thu nhập',
            'content' => '',
        ),
    ),
));
?>

<?php
$this->beginWidget('bootstrap.widgets.TbModal', array(
    'id' => 'myModal',
    'htmlOptions' => array(
        'data-keyboard' => 'false', //Disable keyboard when show modal
        'data-backdrop' => 'static'  //Disable click function when click outside the modal
    ),
));
?>
<div class="modal-body">
    <?php echo CHtml::image('css/loading.gif', '', array()); ?>
</div>
<?php $this->endWidget();
?>

<script type="text/javascript">
    $(document).ready(function() {
        var checkAccumulated = '<?php echo $resultCheck; ?>';
        if (checkAccumulated == true) {
            $('#seniority').attr('style', 'display:none');
            $('#display2').attr('style', 'display:none');
            $('#toolbar').attr('style', 'display:none');
            $('.valueOfMonth-form').attr('style', 'display:none');
        } else {
            $('#display1').attr('style', 'display:none');
            $('.search-form').attr('style', 'display:none');
            $('#myTab').attr('style', 'display:none');
        }
    });
</script>
