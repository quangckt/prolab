<?php

$modulesConfig = array(
    'cal',
    'cms',
    'user',
    'sys',
    'reporting',
    'rights' => array('install' => false),
    'hr',
    'product',
    'inv',
    'rec',
    'pm',
    'gii' => array(
        'class' => 'system.gii.GiiModule',
        'password' => 'jose123',
        'generatorPaths' => array(
            'ext.giiplus',
        //'bootstrap.gii'
        ),
        //'ipFilters'=>array('127.0.0.1','::1'),
    // If removed, Gii defaults to localhost only. Edit carefully to taste.
    //'ipFilters'=>array('127.0.0.1','::1'),
    ),
);

