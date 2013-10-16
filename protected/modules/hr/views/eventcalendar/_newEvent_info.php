<?php
$splitToArray = explode("\n", Yii::app()->settings->get('hr', 'color_events'));
$listEventColor1 = array();
foreach ($splitToArray as $key => $v) {
    $listEventColor1[] = array(
        $key => trim($v),
    );
}
?>
<div class="row-fluid">
    <?php echo $form->labelEx($model, 'description', array('class' => '')); ?>
    <?php echo $form->textArea($model, 'description', array('class' => 'span', 'id' => 'description')); ?>
</div>
<div class="row-fluid">
    <div class="span6">
        <?php echo $form->labelEx($model, 'startDate', array('class' => '')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model' => $model,
        'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->startDate),
        'attribute' => 'startDate',
        'language' => 'vi',
        'options' => array(
            'dateFormat' => 'dd-mm-yy',
        ),
        'htmlOptions' => array('class' => 'span datepicker', 'id' => 'std'),
    ));?>
    </div>
    <div class="span6">
        <?php
        $listTime = array();
        for ($i = 1; $i <= 23; $i++) {
            $j = 0;
            while ($j <= 55) {
                $t = sprintf('%02d:%02d', $i, $j);
                $listTime[$t] = $t;
                $j += 5;
            }
        }
        ?>
        <?php echo $form->labelEx($model, 'startTime', array('class' => '')); ?>
        <?php
        echo $form->dropDownList($model, 'startTime', $listTime, array('class' => 'span')); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span6">
        <?php echo $form->labelEx($model, 'dueDate', array('class' => '')); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
        'model' => $model,
        'value' => CTimestamp::formatDate('yyyy-MM-dd', $model->dueDate),
        'attribute' => 'dueDate',
        'language' => 'vi',
        'options' => array(
            'dateFormat' => 'dd-mm-yy',
        ),
        'htmlOptions' => array('class' => 'span datepicker', 'id' => 'dud'),
    ));?>
    </div>
    <div class="span6">
        <?php
        $listTime = array();
        for ($i = 1; $i <= 23; $i++) {
            $j = 0;
            while ($j <= 55) {
                $t = sprintf('%02d:%02d', $i, $j);
                $listTime[$t] = $t;
                $j += 5;
            }
        }
        ?>
        <?php echo $form->labelEx($model, 'endTime', array('class' => '')); ?>
        <?php
        echo $form->dropDownList($model, 'endTime', $listTime, array('class' => 'span')); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span8">
        <?php echo $form->labelEx($model, 'visibility', array('class' => ' ')); ?>
        <?php echo $form->dropDownList($model, 'visibility', array('0' => "Công cộng", '1' => "Cá nhân"), array('class' => 'span')); ?>
    </div>
    <div class="span4">
        <?php echo $form->labelEx($model, 'allDay', array('class' => '')); ?>
        <?php echo $form->checkBox($model, 'allDay', array('class' => '')); ?>
    </div>
</div>
<div class="row-fluid">
    <?php echo $form->labelEx($model, 'color', array('class' => '')); ?>
    <?php foreach ($splitToArray as $key => $v) { ?>
    <div
        style="background-color:<?php echo trim($v);?>; display:inline-block; width:18px; height:18px; padding-top: 0px; padding-left: 5px; padding-bottom: 2px;z-index: 100;">
        <input type="radio"
               name="choose_color"
        <?php if ($model->color == trim($v)) {
        echo 'checked';
    } ?>
        "
        value="<?php echo trim($v);?>"/>
    </div>
    <?php } ?>
</div>