<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'eventcalendar-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'horizontal',
    //'action'=>Yii::app()->controller->createUrl("create"),
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data',
    )
)); ?>


    <fieldset class="well">
        <?php
        if ($model->hasErrors())
            Yii::app()->user->setFlash('error', $form->errorSummary(array($model), 'Thông báo lỗi!!!', null, array('class' => '')));
        ?>
        <?php echo $this->renderPartial('_newEvent_info', array('model' => $model, 'form' => $form)); ?>
        <div class="row-fluid">
            <div class="form-actions">
                <?php
                if (!$model->isNewRecord) {
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'url' => Yii::app()->controller->createUrl('delete', array('id' => $model->id)),
                        'type' => 'primary',
                        'icon' => 'remove white',
                        'label' => 'Xóa',
                    ));
                }
                ?>
                <?php
                if (!$model->isNewRecord) {
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType' => 'submit',
                        'type' => 'primary',
                        'icon' => 'ok white',
                        'label' => 'Lưu',
                    ));
                } else {
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType' => 'submit',
                        'type' => 'primary',
                        'icon' => 'ok white',
                        'label' => 'Tạo',
                    ));
                }
                ?>
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'reset',
                    'icon' => 'remove',
                    'label' => 'Hủy',
                )); ?>
            </div>
        </div>
    </fieldset>
    <?php $this->endWidget(); ?>

</div>