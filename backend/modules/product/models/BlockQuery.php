<?php

namespace backend\modules\product\models;

/**
 * This is the ActiveQuery class for [[ProductBlock]].
 *
 * @see ProductBlock
 */
class BlockQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ProductBlock[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductBlock|array|null
     */
    public function one($db = null)
    {
    return parent::one($db);
    }
}
