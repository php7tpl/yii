<?php

return [
    'controllerNamespace' => 'console\controllers',
    'bootstrap' => [
        'log',
        //'admin', // add module id to bootstrap for proper aliases and url routes binding
    ],
    'modules' => [
        //'admin' => ['class' => '\Bridge\Core\BridgeModule']
    ],
    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'common\fixtures',
        ],
        'migrate' => [
            'class' => 'dee\console\MigrateController',
            'migrationPath' => '@common/migrations',
            //'migrationNamespaces' => ['Da\\User\\Migration'],
            'migrationLookup' => [
                '@yii/rbac/migrations',

                '@mdm/autonumber/migrations',
                '@mdm/upload/migrations',
                '@Zelenin/yii/modules/I18n/migrations',
                '@bridge-migrations',

                '@vendor/rocket-php-lab/yii2-legacy/src/yii2bundle/account/domain/v3/migrations',
                '@vendor/rocket-php-lab/yii2-legacy/src/yii2bundle/rbac/domain/migrations',
                '@vendor/rocket-php-lab/yii2-legacy/src/yubundle/reference/domain/migrations',
                '@vendor/rocket-php-lab/yii2-legacy/src/yii2bundle/lang/domain/migrations',
                '@vendor/rocket-php-lab/yii2-legacy/src/yii2bundle/geo/domain/migrations',
                '@vendor/rocket-php-lab/yii2-legacy/src/yubundle/storage/domain/v1/migrations',
            ],
        ],
    ],
];
