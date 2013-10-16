<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Assignments') => array('assignment/view'),
    $model->getName(),
);
?>

<div id="userAssignments">
    <h1 class="title"><?php
        echo Rights::t('core', 'Cấp quyền hạn cho người dùng [:username]', array(
            ':username' => $model->getName()
        ));
        ?></h1>
    <hr/>
    <?php $this->renderPartial('/_menu'); ?>
    <div>
        <?php if ($formModel !== null): ?>
            <div>
                <?php
                $this->renderPartial('_form', array(
                    'model' => $formModel,
                    'itemnameSelectOptions' => $assignSelectOptions,
                ));
                ?>
            </div>
        <?php else: ?>
            <p class="info"><?php echo Rights::t('core', 'No assignments available to be assigned to this user.'); ?>
            <?php endif; ?>
    </div>
    <div class="assignments">
        <?php
        $this->widget('bootstrap.widgets.TbBox', array(
            'title' => 'Những quyền hạn đã được gán',
            'headerIcon' => 'icon-home',
            'content' => $this->renderPartial('_userPermissions', array('dataProvider' => $dataProvider), true)
        ));
        ?>
    </div>
</div>
