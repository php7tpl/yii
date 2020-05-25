<?php

namespace backend\modules\product\models;

/**
 * This is the ActiveQuery class for [[ProductProgress]].
 *
 * @see ProductProgress
 */
class ProgressQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ProductProgress[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductProgress|array|null
     */
    public function one($db = null)
    {
    return parent::one($db);
    }
}
