<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['user','admin'],
            ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
