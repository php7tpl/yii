<?php
return [
    [
        'title' => \Yii::t('bridge', 'Dashboard'),
        'url' => ['/admin/default/index'],
        'active' => ['module' => 'admin', 'controller' => 'default', 'action' => 'index'],
        'icon' => 'grav',
    ],
    [
        'title' => \Yii::t('app', 'Product'),
        'icon' => 'external-link',
        'isVisible' => ['admin'],
        'items' => [
            [
                'title' => \Yii::t('app', 'Жилой комплекс'),
                'url' => ['/admin/product/product-complex/index'],
                'icon' => 'reorder',
                'isVisible' => ['admin'],
                'active' => ['module' => 'product', 'controller' => 'product-complex'],
            ],
            [
                'title' => \Yii::t('app', 'Преимущества комплекса'),
                'url' => ['/admin/product/product-complex-advantage/index'],
                'icon' => 'reorder',
                'isVisible' => ['admin'],
                'active' => ['module' => 'product', 'controller' => 'product-complex-advantage'],
            ],
            [
                'title' => \Yii::t('app', 'Блок ЖК'),
                'url' => ['/admin/product/product-block/index'],
                'icon' => 'reorder',
                'isVisible' => ['admin'],
                'active' => ['module' => 'product', 'controller' => 'product-block'],
            ],
            [
                'title' => \Yii::t('app', 'Преимущества блока'),
                'url' => ['/admin/product/product-block-advantage/index'],
                'icon' => 'reorder',
                'isVisible' => ['admin'],
                'active' => ['module' => 'product', 'controller' => 'product-block-advantage'],
            ],
            [
                'title' => \Yii::t('app', 'Квартиры'),
                'url' => ['/admin/product/product-apartment/index'],
                'icon' => 'reorder',
                'isVisible' => ['admin'],
                'active' => ['module' => 'product', 'controller' => 'product-apartment'],
            ],
            [
                'title' => \Yii::t('app', 'Планировки'),
                'url' => ['/admin/product/product-flat/index'],
                'icon' => 'reorder',
                'isVisible' => ['admin'],
                'active' => ['module' => 'product', 'controller' => 'product-flat'],
            ],
            [
                'title' => \Yii::t('app', 'Ход строительства'),
                'url' => ['/admin/product/product-progress/index'],
                'icon' => 'reorder',
                'isVisible' => ['admin'],
                'active' => ['module' => 'product', 'controller' => 'product-progress'],
            ],
        ]
    ],
    [
        'title' => \Yii::t('bridge', 'Users'),
        'url' => ['/user/admin/index'],
        'active' => ['module' => 'user'],
        'icon' => 'users',
        'isVisible' => ['admin']
    ],
    [
        'title' => \Yii::t('app', 'Система'),
        'icon' => 'gear',
        'isVisible' => ['admin'],
        'items' => [
            [
                'title' => \Yii::t('bridge', 'Settings'),
                'url' => ['/admin/settings/index'],
                'active' => ['module' => 'admin', 'controller' => 'settings'],
                'icon' => 'gear',
                'isVisible' => ['admin']
            ],
            [
                'title' => \Yii::t('bridge', 'File manager'),
                'url' => ['/admin/default/elfinder'],
                'active' => ['module' => 'admin', 'controller' => 'default', 'action' => 'elfinder'],
                'icon' => 'file',
                'isVisible' => ['admin']
            ],
            [
                'title' => \Yii::t('bridge', 'Translations'),
                'url' => ['/admin/i18n/default'],
                'active' => ['module' => 'i18n', 'controller' => 'default'],
                'icon' => 'globe',
                'isVisible' => ['admin']
            ],
            [
                'title' => \Yii::t('bridge', 'Meta-tags'),
                'url' => ['/admin/meta-page/index'],
                'active' => ['module' => 'admin', 'controller' => 'meta-page'],
                'icon' => 'tags',
                'isVisible' => ['admin']
            ],
        ]
    ],
];