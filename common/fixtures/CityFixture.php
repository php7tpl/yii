<?php

namespace common\fixtures;

use yii\test\ActiveFixture;

class CityFixture extends ActiveFixture
{
    public $tableName = '{{%geo_city}}';

    protected function getData()
    {
        return [
            [
                'id' => 1,
                'name' => 'Алмата',
            ],
            [
                'id' => 2,
                'name' => 'Нур-Султан',
            ],
            [
                'id' => 3,
                'name' => 'Шимкент',
            ],
        ];
    }
}
