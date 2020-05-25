<?php

namespace common\fixtures;

use yii\test\ActiveFixture;

class ReferenceItemI18nFixture extends ActiveFixture
{
    public $tableName = '{{%reference_item_translation}}';

    protected function getData()
    {
        return [
            [
                'item_id' => 2,
                'language_code' => 'ru',
                'title' => 'Женщина',
                'short_title' => 'Ж.',
            ],
            [
                'item_id' => 1,
                'language_code' => 'ru',
                'title' => 'Мужчина',
                'short_title' => 'М.',
            ],
            [
                'item_id' => 2,
                'language_code' => 'en',
                'title' => 'Female',
                'short_title' => 'F.',
            ],
            [
                'item_id' => 1,
                'language_code' => 'en',
                'title' => 'Male',
                'short_title' => 'M.',
            ],
        ];
    }
}