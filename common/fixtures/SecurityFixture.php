<?php

namespace common\fixtures;

use common\base\BaseUserFixture;
use PhpLab\Eloquent\Fixture\Helpers\FixtureFactoryHelper;

class SecurityFixture extends BaseUserFixture
{
    public $tableName = '{{%user_security}}';
    public $depends = [
        IdentityFixture::class,
    ];

    protected function getData()
    {
        $fixture = new FixtureFactoryHelper;
        $fixture->setCount($this->totalCount);
        $fixture->setCallback(function ($index, FixtureFactoryHelper $fixtureFactory) {
            return [
                'id' => $index,
                'identity_id' => $index,
                'password_hash' => '$2y$10$VeTx5VTpb4AGoLRO6FfVxuNM5Xqbf7SgbC1LMvuMAi28RB9v3lPj.',
            ];
        });
        return $fixture->generateCollection();
    }
}
