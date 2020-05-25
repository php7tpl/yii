<?php

return [
    'definitions' => [
        'PhpLab\Sandbox\Dashboard\Domain\Interfaces\Services\DocServiceInterface' => 'PhpLab\Sandbox\Dashboard\Domain\Services\DocService',
        'Packages\Product\Domain\Interfaces\Services\ComplexServiceInterface' => 'Packages\Product\Domain\Services\ComplexService',
        'Packages\Product\Domain\Interfaces\Repositories\ComplexRepositoryInterface' => 'Packages\Product\Domain\Repositories\Eloquent\ComplexRepository',
        'Packages\RestClient\Domain\Interfaces\Services\BookmarkServiceInterface' => 'Packages\RestClient\Domain\Services\BookmarkService',
        'Packages\RestClient\Domain\Interfaces\Repositories\BookmarkRepositoryInterface' => 'Packages\RestClient\Domain\Repositories\Eloquent\BookmarkRepository',
        'Packages\RestClient\Domain\Interfaces\Services\ProjectServiceInterface' => 'Packages\RestClient\Domain\Services\ProjectService',
        'Packages\RestClient\Domain\Interfaces\Repositories\ProjectRepositoryInterface' => 'Packages\RestClient\Domain\Repositories\Eloquent\ProjectRepository',
        'Packages\RestClient\Domain\Interfaces\Repositories\AccessRepositoryInterface' => 'Packages\RestClient\Domain\Repositories\Eloquent\AccessRepository',
        'Packages\RestClient\Domain\Interfaces\Services\AccessServiceInterface' => 'Packages\RestClient\Domain\Services\AccessService',
        'Packages\RestClient\Domain\Interfaces\Services\TransportServiceInterface' => 'Packages\RestClient\Domain\Services\TransportService',
        'Packages\RestClient\Domain\Interfaces\Services\AuthorizationServiceInterface' => 'Packages\RestClient\Domain\Services\AuthorizationService',
        'Packages\RestClient\Domain\Interfaces\Repositories\AuthorizationRepositoryInterface' => 'Packages\RestClient\Domain\Repositories\Eloquent\AuthorizationRepository',
        'PhpBundle\Reference\Domain\Interfaces\Services\BookServiceInterface' => 'PhpBundle\Reference\Domain\Services\BookService',
        'PhpBundle\Reference\Domain\Interfaces\Repositories\BookRepositoryInterface' => 'PhpBundle\Reference\Domain\Repositories\Eloquent\BookRepository',
        'PhpBundle\Reference\Domain\Interfaces\Services\ItemServiceInterface' => 'PhpBundle\Reference\Domain\Services\ItemService',
        'PhpBundle\Reference\Domain\Interfaces\Repositories\ItemRepositoryInterface' => 'PhpBundle\Reference\Domain\Repositories\Eloquent\ItemRepository',
        'Packages\User\Domain\Interfaces\Services\IdentityServiceInterface' => 'Packages\User\Domain\Services\IdentityService',
        'Packages\User\Domain\Interfaces\Repositories\IdentityRepositoryInterface' => 'Packages\User\Domain\Repositories\Eloquent\IdentityRepository',
        'Packages\RestClient\Domain\Interfaces\Services\EnvironmentServiceInterface' => 'Packages\RestClient\Domain\Services\EnvironmentService',
        'Packages\RestClient\Domain\Interfaces\Repositories\EnvironmentRepositoryInterface' => 'Packages\RestClient\Domain\Repositories\Eloquent\EnvironmentRepository',
    ],
    'singletons' => [
        //'PhpLab\Core\Libs\I18Next\Interfaces\Services\TranslationServiceInterface' => 'PhpLab\Core\Libs\I18Next\Services\TranslationService',
        'PhpLab\Core\Libs\I18Next\Interfaces\Services\TranslationServiceInterface' => function() {
            $service = new \PhpLab\Core\Libs\I18Next\Services\TranslationService([], Yii::$app->language);
            return $service;
        },
    ],
];