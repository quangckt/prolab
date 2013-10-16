<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.


require_once "dbconfig.php";
require_once "paramsconfig.php";
require_once "emailconfig.php";
require_once "modulesconfig.php";
require_once "clientScript.php";


return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'proLap',
    'theme' => 'prolab',
    'preload' => array('log', 'bootstrap'),
    'timeZone' => 'Asia/Saigon',
    'sourceLanguage' => 'vi',
    'language' => 'vi',
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.rights.*',
        'application.modules.rights.components.*',
        'application.helpers.*',
    ),
    'modules' => $modulesConfig,
    // application components
    'components' => array(
        'format' => array(
            'class' => 'application.components.Formatter',
            'numberFormat' => array('decimals' => 0, 'decimalSeparator' => ',', 'thousandSeparator' => '.'),
            'booleanFormat' => array('Không', 'Có'),
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'class' => 'RWebUser',
            'loginUrl' => array('user/login'),
            'returnUrl' => array('site'),
        ),
        'bootstrap' => array(
            'class' => 'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
            //'responsiveCss' => true,
        ),
        'image' => array(
            'class' => 'application.extensions.image.CImageComponent',
            // GD or ImageMagick
            'driver' => 'GD',
            // ImageMagick setup path
            'params' => array('directory' => ''),
        ),
        'cache' => array(
            'class' => 'system.caching.CFileCache',
        ),
        'settings' => array(
            'class' => 'application.extensions.SysSettings',
            'cacheComponentId' => 'cache',
            'cacheId' => 'global_website_settings',
            'cacheTime' => 84000,
            'tableName' => 'settings',
            'dbComponentId' => 'db',
            'createTable' => true,
            'dbEngine' => 'InnoDB',
        ),
        'authManager' => array('class' => 'RDbAuthManager'),
        // uncomment the following to enable URLs in path-format
        /*
          'urlManager'=>array(
          'urlFormat'=>'path',
          'rules'=>array(
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
          ),
          ),

         */

        /*
          'db'=>array(
          'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
          ),
         */

        // uncomment the following to use a MySQL database
        'db' => $db,
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                array(
                    'class' => 'CWebLogRoute',
                    'levels' => 'trace',
                    'categories' => 'vardump',
                    'showInFireBug' => true
                ),
            //array( 'class'=>'ext.yii-debug-toolbar.YiiDebugToolbarRoute', ),
            ),
        ),
        'clientScript' => $clientScript,
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => $params,
    'behaviors' => array('ApplicationConfigBehavior'),
);