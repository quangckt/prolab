<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'share-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical', //horizontal/vertical
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>
    <fieldset class="well">
        <?php
        if ($model->hasErrors()) {
            Yii::app()->user->setFlash('error', $form->errorsummary(array($model), 'Thông báo lỗi!!!', null, array('class' => '')));
        }
        ?>
        <input type="hidden" id="totalassetsZin" name="totalassetsZin"/>
        <?php echo $form->textFieldRow($model, 'totalassets', array('class' => 'span', 'maxlength' => 10, 'readOnly' => true)); ?>
        <input type="hidden" id="valueofstockZin" name="valueofstockZin"/>
        <?php echo $form->textFieldRow($model, 'valueofstock', array('class' => 'span', 'maxlength' => 20)); ?>
        <?php echo $form->textFieldRow($model, 'note', array('class' => 'span', 'maxlength' => 255)); ?>
        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => $model->isNewRecord ? 'Tạo' : 'Lưu',
        )); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'reset',
            'icon' => 'remove',
            'label' => 'Hủy',
        )); ?>
        </div>
    </fieldset>
    <?php $this->endWidget(); ?>
</div>

<script type="text/javascript">

    $(document).ready(function () {
        var modelTotalassets = <?php echo $model->totalassets;?>;
        var modelValueofstock = <?php if (isset($model->valueofstock)) {
            echo $model->valueofstock;
        } else {
            echo 0;
        }?>;
        if (modelValueofstock == 0) {
            $('#totalassetsZin').val(modelTotalassets);
            $('#valueofstockZin').val(modelValueofstock);
            var url = "<?php echo Yii::app()->controller->createUrl('getShareTotalassets');?>"; //Call controller to process
            var pData = {ShareTotalassets:modelTotalassets}; //post data to controller
            $.post(url, pData, function (data) {  //start gọi controller và gửi data về contronller to process
                var rel = eval("(" + data + ")"); //get value from controller gửi lại thông qua Json
                $('#Share_totalassets').val(rel.ShareTotalassets);
            });
        } else {
            $('#totalassetsZin').val(modelTotalassets);
            $('#valueofstockZin').val(modelValueofstock);
            var url = "<?php echo Yii::app()->controller->createUrl('getShareTotalassets');?>"; //Call controller to process
            var pData = {ShareTotalassets:modelTotalassets, ShareValueofstock:modelValueofstock}; //post data to controller
            $.post(url, pData, function (data) {  //start gọi controller và gửi data về contronller to process
                var rel = eval("(" + data + ")"); //get value from controller gửi lại thông qua Json
                $('#Share_totalassets').val(rel.ShareTotalassets);
                $('#Share_valueofstock').val(rel.ShareValueofstock);
            });
        }
    });

    $('#Share_valueofstock').change(function () {
        $('#valueofstockZin').val($(this).val()); //gán value batch_amt cho amtzin
        var url = "<?php echo Yii::app()->controller->createUrl('getShareValueofstock');?>"; //Call controller to process
        var pData = {ShareValueofstock:$(this).val()}; //post data to controller
        $.post(url, pData, function (data) {  //start gọi controller và gửi data về contronller to process
            var rel = eval("(" + data + ")"); //get value from controller gửi lại thông qua Json
            $('#Share_valueofstock').val(rel.ShareValueofstock);
        });
    });

</script>
