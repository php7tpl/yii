<?php

namespace backend\modules\product\models;

/**
 * This is the ActiveQuery class for [[ProductBlockAdvantage]].
 *
 * @see ProductBlockAdvantage
 */
class BlockAdvantageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ProductBlockAdvantage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductBlockAdvantage|array|null
     */
    public function one($db = null)
    {
    return parent::one($db);
    }
}
