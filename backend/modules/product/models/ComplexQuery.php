<?php

namespace backend\modules\product\models;

/**
 * This is the ActiveQuery class for [[ProductComplex]].
 *
 * @see ProductComplex
 */
class ComplexQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ProductComplex[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductComplex|array|null
     */
    public function one($db = null)
    {
    return parent::one($db);
    }
}
