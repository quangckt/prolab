<h1 class="title">Cập nhật ghi chú cho xếp loại</h1>
<hr/>
<div class="tools-bar">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array('label' => 'Xếp loại', 'icon' => 'icon-th-list', 'url' => Yii::app()->controller->createUrl('grade'), 'linkOptions' => array()),
        ),
    ));
    ?>
    <?php $this->renderPartial('_formGradeNote', array('model' => $model)) ?>
</div>