<?php

namespace backend\modules\product\models;

/**
 * This is the ActiveQuery class for [[ProductComplexAdvantage]].
 *
 * @see ProductComplexAdvantage
 */
class ComplexAdvantageQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ProductComplexAdvantage[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductComplexAdvantage|array|null
     */
    public function one($db = null)
    {
    return parent::one($db);
    }
}
