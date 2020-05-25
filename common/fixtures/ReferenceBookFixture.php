<?php

namespace common\fixtures;

use yii\test\ActiveFixture;

class ReferenceBookFixture extends ActiveFixture
{
    public $tableName = '{{%reference_book}}';

    protected function getData()
    {
        return [
            [
                'id' => 1,
                'title' => 'Пол человека',
                'levels' => 1,
                'entity' => 'sex',
                //'owner_id' => 1,
                //'props' => '{}',
                'created_at' => '2018-12-09 21:35:38',
                'updated_at' => '2018-12-09 21:35:38',
                'status' => 1,
            ],

        ];
    }
}
