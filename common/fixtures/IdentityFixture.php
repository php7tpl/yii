<?php

namespace common\fixtures;

use common\base\BaseUserFixture;
use PhpLab\Eloquent\Fixture\Helpers\FixtureFactoryHelper;

class IdentityFixture extends BaseUserFixture
{

    const TIME = '2018-03-28 21:00:13';

    public $tableName = '{{%user_identity}}';
    public $depends = [
        AuthItemFixture::class,
    ];

    public static function generateData($totalCount) {
        $collection = [
            [
                'id' => 1,
                'login' => 'admin',
                'status' => 1,
                'created_at' => self::TIME,
                'updated_at' => self::TIME,
            ],
            [
                'id' => 2,
                'login' => 'moderator',
                'status' => 1,
                'created_at' => self::TIME,
                'updated_at' => self::TIME,
            ],
            [
                'id' => 3,
                'login' => 'developer',
                'status' => 1,
                'created_at' => self::TIME,
                'updated_at' => self::TIME,
            ],
            [
                'id' => 4,
                'login' => 'operator',
                'status' => 1,
                'created_at' => self::TIME,
                'updated_at' => self::TIME,
            ],

        ];

        $fixture = new FixtureFactoryHelper;
        $fixture->setCount($totalCount);
        $fixture->setStartIndex(count($collection) + 1);
        $fixture->setCallback(function ($index, FixtureFactoryHelper $fixtureFactory) {
            $username = 'user' . $index;
            return [
                'id' => $index,
                'login' => $username,
                'status' => 1,
                'created_at' => self::TIME,
                'updated_at' => self::TIME,
            ];
        });

        return array_merge($collection, $fixture->generateCollection());
    }

    protected function getData()
    {
        return self::generateData($this->totalCount);
    }
}
