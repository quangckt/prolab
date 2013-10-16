<?php
$themeURL = Yii::app()->theme->getBaseUrl();
Yii::setPathOfAlias('_partials', dirname(__FILE__) . DIRECTORY_SEPARATOR . '_partials');

Yii::app()->clientScript->registerCssFile($themeURL . '/css/screen.css', 'screen, projection');
Yii::app()->clientScript->registerCssFile($themeURL . '/css/form.css', 'screen, projection');
Yii::app()->clientScript->registerCssFile($themeURL . '/css/gridview.css', 'screen, projection');
Yii::app()->clientScript->registerCssFile('css/print.css', 'print, projection');

Yii::app()->clientScript->registerScriptFile("js/autoNumeric.js");
//Yii::app()->clientScript->registerScriptFile("js/jquery.formatCurrency.js");

Yii::app()->clientScript->registerScriptFile("js/jquery.dirtyforms.js");

Yii::app()->clientScript->registerScriptFile("js/print.js");
Yii::app()->clientScript->registerScriptFile("js/productAutoComplete.js");
Yii::app()->clientScript->registerScriptFile("js/prolab.js");
Yii::app()->clientScript->registerScriptFile("js/form.js");
Yii::app()->clientScript->registerScriptFile("js/tabularInput.js");
Yii::app()->clientScript->registerScriptFile(Yii::app()->clientScript->getCoreScriptUrl() . '/jui/js/jquery-ui.min.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerScriptFile(Yii::app()->clientScript->getCoreScriptUrl() . '/jui/js/jquery-ui-i18n.min.js', CClientScript::POS_BEGIN);
Yii::app()->clientScript->registerCssFile(Yii::app()->clientScript->getCoreScriptUrl() . '/jui/css/base/jquery-ui.css');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="language" content="en"/>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    </head>
    <body>
        <?php
        $menuMain = array(
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'items' => array(
                    array('label' => 'Quản lý nhân sự', 'url' => array(Yii::app()->getModule('hr')->defaultUrl)),
                    array('label' => 'Quản lý kho', 'url' => array(Yii::app()->getModule('inv')->defaultUrl)),
                    array('label' => 'Quản lý nhận việc', 'url' => array(Yii::app()->getModule('rec')->defaultUrl)),
                    //array('label'=>'Quản lý giao hàng', 'url'=>'#'),
                    array('label' => 'Quản lý sản xuất', 'url' => array(Yii::app()->getModule('pm')->defaultUrl)),
                    array('label' => 'Hệ thống', 'url' => array(Yii::app()->getModule('sys')->defaultUrl)),
                ),
            ),
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'htmlOptions' => array('class' => 'pull-right'),
                'items' => array(
                    array('label' => '(' . Yii::app()->user->name . ')', 'url' => '#', 'items' => array(
                            array('icon' => 'edit', 'url' => Yii::app()->getModule('user')->profileUrl, 'label' => Yii::app()->getModule('user')->t("Hồ sơ"), 'visible' => !Yii::app()->user->isGuest),
                            '---',
                            array('icon' => 'user', 'url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Thoát")),
                        )),
                ),
            ),
            $menuMain = array(
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'items' => array(
                //  array('label'=>'Quản lý nhân sự', 'url'=>array(Yii::app()->getModule('hr')->defaultUrl)),
                array('label' => 'Quản lý kho', 'url' => array(Yii::app()->getModule('inv')->defaultUrl)),
                //  array('label'=>'Quản lý mua hàng', 'url'=>'#'),
                //array('label'=>'Quản lý giao hàng', 'url'=>'#'),
                // array('label'=>'Quản lý sản xuất', 'url'=>'#'),
                array('label' => 'Hệ thống', 'url' => array(Yii::app()->getModule('sys')->defaultUrl)),
            ),
        ),
        array(
            'class' => 'bootstrap.widgets.TbMenu',
            'htmlOptions' => array('class' => 'pull-right'),
            'items' => array(
                array('label' => '(' . Yii::app()->user->name . ')', 'url' => '#', 'items' => array(
                        array('label' => 'Profile', 'url' => Yii::app()->getModule('user')->profileUrl, 'label' => Yii::app()->getModule('user')->t("Profile"), 'visible' => !Yii::app()->user->isGuest),
                        '---',
                        array('label' => 'Thoát', 'url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Logout")),
                    )),
            ),
        ),
        ));



        if (!Yii::app()->user->isGuest)
            $this->widget('bootstrap.widgets.TbNavbar', array(
                'fixed' => false,
                'brand' => 'proLab',
                'brandUrl' => '#',
                'fluid' => true,
                'type' => 'inverse',
                'fixed' => 'top',
                'collapse' => true, // requires bootstrap-responsive.css
                'items' => $menuMain,
            ));
        ?>

        <div class="container-fluid">
            <?php //if(isset($this->breadcrumbs)):?>
            <?php //$this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?>
            <!-- breadcrumbs -->
            <?php //endif ?>
            <?php echo $content; ?>
        </div>
        <footer class="footer" id='footer'>
            <div class="container-fluid">
                <hr/>
                Copyright &copy; <?php echo date('Y'); ?> by My Company. All Rights Reserved.
        </footer>
        <?php
        $this->widget('ext.fancybox.EFancyBox', array(
            'target' => '.popup-trigger',
            'config' => array(
                'modal' => false,
                'centerOnScroll' => true,
            ),
        ));
        ?>
    </body>
</html>