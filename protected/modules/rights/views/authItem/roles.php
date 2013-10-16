<?php
$this->breadcrumbs = array(
    'Rights' => Rights::getBaseUrl(),
    Rights::t('core', 'Roles'),
);
?>

<div id="roles">
    <h1 class="title"><?php echo Rights::t('core', 'Quản lý vai trò'); ?></h1>
    <hr/>
    <div class="row-fluid">
        <div class="span2" style="margin-right: -67px;">
            <div class="toolbar ">
                <?php
                $this->widget('bootstrap.widgets.TbMenu', array(
                    'type' => 'pills',
                    'items' => array(
                        array(
                            'label' => 'Thêm mới',
                            'icon' => 'icon-plus',
                            'url' => Yii::app()->controller->createUrl('create', array('type' => CAuthItem::TYPE_ROLE)),
                            'linkOptions' => array(
                                'class' => 'ajaxFormModal',
                                'title' => 'Thêm mới',
                                'ajaxModalSubmited' => 'yiiGridViewUpdate("roles-grid")',
                            )
                        ),
                    ),
                    'htmlOptions' => array(
                        //'rel' => 'tooltip'
                    )
                ));
                ?>
            </div>
            <?php //echo CHtml::link(UserModule::t('Thêm mới'), Yii::app()->controller->createUrl('create', array('type' => CAuthItem::TYPE_ROLE)), array('class' => 'btn btn-primary ajaxFormModal span', 'title' => UserModule::t('Thêm mới'), 'ajaxModalSubmited' => 'yiiGridViewUpdate("roles-grid")')); ?>
        </div>
        <div class="span10">
            <?php $this->renderPartial('/_menu'); ?>
        </div>
    </div>
    <?php
    $this->widget('bootstrap.widgets.TbGridView', array(
        'dataProvider' => $dataProvider,
        'id' => 'roles-grid',
        'type' => 'striped bordered condensed',
        'template' => '{items}',
        'columns' => array(
            array(
                'name' => 'name',
                //'header' => Rights::t('core', 'Name'),
                'type' => 'raw',
                'htmlOptions' => array('class' => 'name-column'),
                'value' => '$data->getGridNameLink()',
            ),
            array(
                'name' => 'description',
                //'header' => Rights::t('core', 'Description'),
                'type' => 'raw',
                'htmlOptions' => array('class' => 'description-column'),
            ),
            array(
                'name' => 'bizRule',
                //'header' => Rights::t('core', 'Business rule'),
                'type' => 'raw',
                'htmlOptions' => array('class' => 'bizrule-column'),
                'visible' => Rights::module()->enableBizRule === true,
            ),
            array(
                'name' => 'data',
                //'header' => Rights::t('core', 'Data'),
                'type' => 'raw',
                'htmlOptions' => array('class' => 'data-column'),
                'visible' => Rights::module()->enableBizRuleData === true,
            ),
//            array(
//                'header' => '&nbsp;',
//                'type' => 'raw',
//                'htmlOptions' => array('class' => 'actions-column'),
//                'value' => '$data->getDeleteRoleLink()',
//            ),
            array(
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'header' => 'Quyền hạn',
                'template' => '{permissions}',
                'buttons' => array(
                    'permissions' => array(
                        'label' => 'Gán quyền',
                        //'icon' => 'icon-pencil',
                        'url' => 'Yii::app()->controller->createUrl("addPermissions", array("name" => $data->name))',
                        'options' => array(
                            'class' => 'btn btn-primary btn-small',
                        )
                    ),
                ),
                'htmlOptions' => array(
                    'class' => 'span2',
                    'style' => 'text-align:center'
                )
            ),
            array(
                'class' => 'bootstrap.widgets.TbButtonColumn',
                'template' => '{updateNew} {delete}',
                'buttons' => array(
                    'updateNew' => array(
                        'label' => 'Sửa',
                        'icon' => 'icon-pencil',
                        'url' => 'Yii::app()->controller->createUrl("updateNew", array("name" => $data->name))',
                        'options' => array(
                            'class' => 'update ajaxFormModal',
                            'ajaxModalSubmited' => 'yiiGridViewUpdate("roles-grid")',
                        )
                    ),
                    'delete' => array(
                        'label' => 'Xóa',
                        'icon' => 'icon-trash',
                        'url' => 'Yii::app()->controller->createUrl("delete", array("name" => $data->name))',
                        'options' => array(
                        )
                    )
                ),
            ),
        )
    ));
    ?>
</div>