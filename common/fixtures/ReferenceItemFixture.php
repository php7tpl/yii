<?php

namespace common\fixtures;

use yii\test\ActiveFixture;

class ReferenceItemFixture extends ActiveFixture
{
    public $tableName = '{{%reference_item}}';

    protected function getData()
    {
        return [
            [
                'id' => 1,
                'book_id' => 1,
                'parent_id' => null,
                'code' => '1',
                'entity' => 'male',
                'status' => 1,
                'sort' => null,
                'created_at' => '2018-12-09 21:35:38',
                'updated_at' => '2018-12-09 21:35:38',
            ],
            [
                'id' => 2,
                'book_id' => 1,
                'parent_id' => null,
                'code' => '0',
                'entity' => 'female',
                'status' => 1,
                'sort' => null,
                'created_at' => '2018-12-09 21:35:38',
                'updated_at' => '2018-12-09 21:35:38',
            ],
        ];
    }
}
