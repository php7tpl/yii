<?php

namespace backend\modules\product\models;

/**
 * This is the ActiveQuery class for [[ProductFlat]].
 *
 * @see ProductFlat
 */
class FlatQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ProductFlat[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductFlat|array|null
     */
    public function one($db = null)
    {
    return parent::one($db);
    }
}
