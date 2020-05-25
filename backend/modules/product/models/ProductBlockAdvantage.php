<?php

namespace backend\modules\product\models;

use Yii;

/**
 * This is the model class for table "product_block_advantage".
 *
 * @property integer $id
 * @property integer $block_id
 * @property string $title
 *
 * @property ProductBlock $block
 */
class ProductBlockAdvantage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_block_advantage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['block_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['block_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductBlock::class, 'targetAttribute' => ['block_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Идентификатор'),
            'block_id' => Yii::t('app', 'ID блока'),
            'title' => Yii::t('app', 'Название'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlock()
    {
        return $this->hasOne(ProductBlock::className(), ['id' => 'block_id']);
    }
    
    /**
     * @inheritdoc
     * @return BlockAdvantageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BlockAdvantageQuery(get_called_class());
    }

}
