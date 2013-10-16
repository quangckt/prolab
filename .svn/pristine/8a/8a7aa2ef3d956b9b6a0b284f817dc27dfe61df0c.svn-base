<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Assignments'),
);
?>

<!-- <div id="assignments"> -->

<h1 class="title"><?php echo Rights::t('core', 'Phân quyền hệ thống'); ?></h1>
<hr/>
        <!-- <p>
<?php //echo Rights::t('core', 'Các điều khoản đã được chỉ định cho mỗi người dùng'); ?>
        </p> -->
<?php $this->renderPartial('/_menu'); ?>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider' => $dataProvider,
    'type' => 'striped bordered condensed',
    'template' => "{items}\n{pager}",
    'emptyText' => Rights::t('core', 'Không có người dùng nào'),
    'htmlOptions' => array('class' => 'grid-view assignment-table'),
    'columns' => array(
        array(
            'name' => 'name',
            'header' => Rights::t('core', 'Người dùng'),
            'type' => 'raw',
            'htmlOptions' => array('class' => 'name-column'),
            'value' => '$data->getAssignmentNameLink()',
        ),
        array(
            'name' => 'assignments',
            'header' => Rights::t('core', 'Vai trò'),
            'type' => 'raw',
            'htmlOptions' => array('class' => 'role-column'),
            'value' => '$data->getAssignmentsText(CAuthItem::TYPE_ROLE)',
        ),
        array(
            'name' => 'assignments',
            'header' => Rights::t('core', 'Nhiệm vụ'),
            'type' => 'raw',
            'htmlOptions' => array('class' => 'task-column'),
            'value' => '$data->getAssignmentsText(CAuthItem::TYPE_TASK)',
        ),
        array(
            'name' => 'assignments',
            'header' => Rights::t('core', 'Hành động'),
            'type' => 'raw',
            'htmlOptions' => array('class' => 'operation-column'),
            'value' => '$data->getAssignmentsText(CAuthItem::TYPE_OPERATION)',
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{addPermissions}',
            'buttons' => array(
                'addPermissions' => array(
                    'label' => 'Gán quyền',
                    //'icon' => 'icon-pencil',
                    'url' => 'Yii::app()->controller->createUrl("user", array("id" => $data->id))',
                    'options' => array(
                        'class' => 'btn btn-primary btn-mini',
                        'ajaxModalSubmited' => 'yiiGridViewUpdate("roles-grid")',
                    )
                ),
            ),
            'htmlOptions' => array(
                'class' => 'span2',
                'style' => 'text-align:center;'
            )
        ),
    )
));
?>

<!-- </div> -->