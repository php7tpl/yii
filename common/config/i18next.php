<?php

return [
    'defaultLanguage' => 'ru',
    'fallbackLanguage' => 'en',
    'bundles' => [
        'app' => 'common/messages/__lng__/__ns__.json',
        'account' => 'vendor/rocket-php-lab/yii2-legacy/src/yii2bundle/account/domain/v3/i18next/__lng__/__ns__.json',
        'user' => 'vendor/rocket-php-lab/yii2-legacy/src/yii2bundle/account/domain/v3/i18next/__lng__/__ns__.json',
        'storage' => 'vendor/rocket-php-lab/yii2-legacy/src/yubundle/storage/domain/v1/i18next/__lng__/__ns__.json',
        'restclient' => 'Packages/RestClient/Domain/i18next/__lng__/__ns__.json',
        'core' => 'vendor/php7lab/core/src/i18next/__lng__/__ns__.json'
    ],
];