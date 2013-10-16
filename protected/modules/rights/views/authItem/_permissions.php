<div class="form relations span-11 last">
    <h1 class="title"><?php echo Rights::t('core', 'Gán quyền hạn cho vai trò [' . $_GET['name'] . ']'); ?></h1>
    <hr/>
    <?php $this->renderPartial('/_menu'); ?>
    <?php if ($model->name !== Rights::module()->superuserName): ?>
        <div class="addChild">
            <?php if ($childFormModel !== null): ?>
                <?php
                $this->renderPartial('_childForm', array(
                    'model' => $childFormModel,
                    'itemnameSelectOptions' => $childSelectOptions,
                ));
                ?>
            <?php else: ?>
                <p class="info"><?php echo Rights::t('core', 'No children available to be added to this item.'); ?>
                <?php endif; ?>
        </div>
        <?php
        $this->widget('bootstrap.widgets.TbBox', array(
            'title' => 'Những quyền hạn Con đã được gán',
            'headerIcon' => 'icon-home',
            'content' => $this->renderPartial('_childrent', array('childDataProvider' => $childDataProvider), true)
        ));
        ?>
        <?php
        $this->widget('bootstrap.widgets.TbBox', array(
            'title' => 'Những quyền hạn Cha đã được gán',
            'headerIcon' => 'icon-home',
            'content' => $this->renderPartial('_parrent', array('parentDataProvider' => $parentDataProvider), true)
        ));
        ?>
    <?php else: ?>
        <p class="info">
            <?php echo Rights::t('core', 'Quản trị viên không cần phải được cấp quyền.'); ?><br />
            <?php echo Rights::t('core', 'Quản trị viên có tất cả các quyền.'); ?>
        </p>
    <?php endif; ?>
</div>