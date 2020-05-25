<?php

namespace backend\modules\product\models;

/**
 * This is the ActiveQuery class for [[ProductApartment]].
 *
 * @see ProductApartment
 */
class ApartmentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ProductApartment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductApartment|array|null
     */
    public function one($db = null)
    {
    return parent::one($db);
    }
}
