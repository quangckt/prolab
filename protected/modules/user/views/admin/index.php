<?php
$this->breadcrumbs = array(
    UserModule::t('Users') => array('admin'),
    UserModule::t('Manage'),
);
?>


<?php
$this->menu = array(
    array('label' => 'Create Inventory', 'url' => array('create')),
    array('label' => 'Manage Inventory', 'url' => array('admin')),
);
?>

<h1 class='title'><?php echo UserModule::t('Quản lý người dùng'); ?></h1>
<hr/>
<div class="toolbar ">
    <?php
    $this->widget('bootstrap.widgets.TbMenu', array(
        'type' => 'pills',
        'items' => array(
            array(
                'label' => 'Thêm mới',
                'icon' => 'icon-plus',
                'url' => Yii::app()->controller->createUrl('create'),
                'linkOptions' => array(
                    'class' => 'ajaxFormModal',
                    'title' => 'Thêm mới',
                    'ajaxModalSubmited' => 'yiiGridViewUpdate("user-grid")',
                )
            ),
//            array(
//                'label' => 'Tìm kiếm',
//                'icon' => 'icon-search',
//                'url' => '#',
//                'linkOptions' => array(
//                ),
//            ),
        )
    ));
    ?>
</div>

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'dataProvider' => $dataProvider,
    'type' => 'striped bordered condensed',
    'id' => 'user-grid',
    'template' => '{items}{pager}',
    'columns' => array(
        array(
            'header' => 'Stt',
            'type' => 'raw',
            'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
        array(
            'name' => 'emp_id',
            'type' => 'raw',
            'value' => '$data->employee["fullName"]'
        ),
        array(
            'name' => 'username',
            'type' => 'raw',
            'value' => 'CHtml::link(CHtml::encode($data->username),array("admin/view","id"=>$data->id))',
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{view}',
            'header' => 'Mật khẩu',
            'buttons' => array(
                'view' => array(
                    'label' => 'Xem mật khẩu',
                    'url' => 'Yii::app()->controller->createUrl("showPass",array("id"=>"$data->id"))',
                    'options' => array(
                        'class' => 'ajaxFormModal',
                    )
                )
            )
        ),
        array(
            'name' => 'lastvisit',
            'value' => '(($data->lastvisit)?date("d.m.Y H:i:s",$data->lastvisit):UserModule::t("Not visited"))',
        ),
        array(
            'name' => 'status',
            'value' => 'User::itemAlias("UserStatus",$data->status)',
        ),
        array(
            'name' => 'superuser',
            'value' => 'User::itemAlias("AdminStatus",$data->superuser)',
        ),
        array(
            'name' => 'email',
            'type' => 'raw',
            'value' => 'CHtml::link(CHtml::encode($data->employee["email"]), "mailto:".$data->employee["email"])',
        ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template' => '{update} {delete}',
            'buttons' => array(
                'update' => array(
                    'label' => 'Sửa',
                    'options' => array(
                        'class' => 'update ajaxFormModal',
                        'ajaxModalSubmited' => 'yiiGridViewUpdate("user-grid")',
                    )
                ),
                'delete' => array(
                    'label' => 'Xóa',
                    'options' => array(
                        'class' => ' delete'
                    )
                )
            ),
        ),
)));
?>