<?php
Yii::app()->language = 'vi';
?>
<div class="row-fluid">
    <div class="span10">
        <?php
        $this->widget('bootstrap.widgets.TbMenu', array(
            'type' => 'pills',
            'items' => array(
                array(
                    //'label' => Rights::t('core', 'Assignments'),
                    'label' => Rights::t('core', 'Phân quyền'),
                    'url' => array('assignment/view'),
                    'itemOptions' => array('class' => 'item-assignments'),
                    'active' => Yii::app()->controller->action->id == 'view' ? true : false
                ),
                array(
                    //'label' => Rights::t('core', 'Roles'),
                    'label' => Rights::t('core', 'Vai trò'),
                    'url' => array('authItem/roles'),
                    'itemOptions' => array('class' => 'item-roles'),
                    'active' => Yii::app()->controller->action->id == 'roles' ? true : false
                ),
//        array(
//            //'label' => Rights::t('core', 'Permissions'),
//            'label' => Rights::t('core', 'Auto code'),
//            'url' => "javascript:{var test = ''; $('.popup-trigger').click();}",
//            'itemOptions' => array('class' => 'item-permissions pull-right'),
//            'active' => Yii::app()->controller->action->id == 'permissions' ? true : false
//        ),
//        array(
//            //'label' => Rights::t('core', 'Tasks'),
//            'label' => Rights::t('core', 'Nhiệm vụ'),
//            'url' => array('authItem/tasks'),
//            'itemOptions' => array('class' => 'item-tasks'),
//            'active' => Yii::app()->controller->action->id == 'tasks' ? true : false
//        ),
//        array(
//            //'label' => Rights::t('core', 'Operations'),
//            'label' => Rights::t('core', 'Hành động'),
//            'url' => array('authItem/operations'),
//            'itemOptions' => array('class' => 'item-operations'),
//            'active' => Yii::app()->controller->action->id == 'operations' ? true : false
//        ),
            ),
        ));
        ?>
    </div>
    <div class="span2">
        <?php echo CHtml::link('Auto code', Yii::app()->createUrl('/rights/authItem/confirmPermission'), array('class' => 'btn popup-trigger pull-right btn-small', 'rel' => 'tooltip', 'title' => 'Dành cho nhà phát triển', 'data-placement' => 'left')); ?>
    <!--<a href=<?php // echo Yii::app()->createUrl('/rights/authItem/confirmPermission');?> style="display: auto;" class="popup-trigger btn btn-small pull-right" rel="tolltip" data-placement="left" title="Dành cho nhà phát triển">Auto code</a>-->
    </div>
</div>