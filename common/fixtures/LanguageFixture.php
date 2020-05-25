<?php

namespace common\fixtures;

use yii\test\ActiveFixture;

class LanguageFixture extends ActiveFixture
{
    public $tableName = '{{%language}}';

    protected function getData()
    {
        return [
            [
                'title' => 'Русский',
                'name' => 'Russian',
                'code' => 'ru',
                'locale' => 'ru-RU',
                'is_main' => true,
                'is_enabled' => true,
            ],
            [
                'title' => 'English',
                'name' => 'English',
                'code' => 'en',
                'locale' => 'en-UK',
                'is_main' => false,
                'is_enabled' => true,
            ],
        ];
    }
}
