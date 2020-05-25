<?php

return [
    'class' => \backend\modules\bridge\BridgeModule::class,
    'userClass' => common\models\User::class,
    'userSettings' => [
        'class' => Da\User\Module::class,
        'administratorPermissionName' => \common\enums\rbac\PermissionEnum::BACKEND_ALL,
        'classMap' => [
            'Profile' => 'app\modules\user\profile\models\Profile'
        ],
    ],
    'composeMenu' => function ($user, $roles, $authManager) {
        /**
         * @var \yii\web\User $user
         * @var string[] $roles
         * @var \Da\User\Component\AuthDbManagerComponent $authManager
         */
        if ($user->can('admin')) {
            return require $_ENV['PROJECT_DIR'] . '/backend/modules/config/menu.php';
        }
        return [];
    },
    'modules' => [
        'product' => [
            'class' => 'backend\modules\product\Module',
        ],
    ]
];