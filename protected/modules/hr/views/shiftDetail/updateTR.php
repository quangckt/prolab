<div class="form">
    <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'update-shift-form',
    'enableAjaxValidation' => false,
    'method' => 'post',
    'type' => 'vertical',
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
));  ?>
    <div class="well">
        <div class="row-fluid">
            <?php
            $listTime = array();
            for ($i = 0; $i <= 23; $i++) {
                $j = 0;
                while ($j <= 59) {
                    $t = sprintf('%02d:%02d', $i, $j);
                    $listTime[] = $t;
                    $j++;
                }
            }
            ?>
            <div class="span6">
                <label>Giờ đến thực tế</label>
                <?php $this->widget('bootstrap.widgets.TbTypeahead', array(
                'model' => $model,
                'attribute' => 'timeIn',
                'options' => array(
                    'source' => $listTime,
                    'items' => 10,
                    'matcher' => "js:function(item) {
            return ~item.toLowerCase().indexOf(this.query.toLowerCase());
        }",
                ),
                'htmlOptions' => array(
                    'class' => 'span',
                ),
            )); ?>
                <?php //echo $form->dropDownListRow($model, 'timeIn', $listTime, array('class' => 'span')); ?>
            </div>
            <div class="span6">
                <label>Giờ về thực tế</label>
                <?php $this->widget('bootstrap.widgets.TbTypeahead', array(
                'model' => $model,
                'attribute' => 'timeOut',
                'options' => array(
                    'source' => $listTime,
                    'items' => 10,
                    'matcher' => "js:function(item) {
            return ~item.toLowerCase().indexOf(this.query.toLowerCase());
        }",
                ),
                'htmlOptions' => array(
                    'class' => 'span',
                ),
            )); ?>
                <?php //echo $form->dropDownListRow($model, 'timeOut', $listTime, array('class' => 'span')); ?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <?php echo $form->textareaRow($model, 'note', array('class' => 'span')); ?>
            </div>
        </div>
        <div class="form-actions">
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'icon' => 'ok white',
            'label' => 'Cập nhật',
        )); ?>
            <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'reset',
            'icon' => 'remove',
            'label' => 'Hủy',
        )); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>