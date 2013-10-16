<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'fModal')); ?>
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h3>Edit label</h3>
</div>
<div class="modal-body">
<form>
<div class="control-group ">
<label class="control-label" for="Fields_fieldName">Field Name</label>
    <div class="controls">
    <input class="span5" maxlength="250" name="Fields[fieldName]" id="Fields_fieldName" type="text" value="">
   </div>
</div>
<div class="control-group">
<label class="control-label" for="Fields_attributeLabel">Attribute Label</label>
<div class="controls">
<input class="span5" maxlength="250" name="Fields[attributeLabel]" id="Fields_attributeLabel" type="text" value="">
</div>
</div>
</form>
</div>
<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'label'=>'Save changes',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal','id'=>'btnSaveELF'),
    )); ?>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'label'=>'Close',
        'url'=>'#',
        'htmlOptions'=>array('data-dismiss'=>'modal'),
    )); ?>
</div>
<?php $this->endWidget(); ?>