<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'gii' => 'gii',
                'gii/<controller:[\w\-]+>' => 'gii/<controller>',
                'gii/<controller:[\w\-]+>/<action:[\w\-]+>' => 'gii/<controller>/<action>',
            ],
        ],
    ],
];

