<?php

namespace backend\modules\product\models;

use Yii;

/**
 * This is the model class for table "product_block".
 *
 * @property integer $id
 * @property integer $complex_id
 * @property string $title
 * @property integer $floor_count
 * @property integer $status
 *
 * @property ProductComplex $complex
 * @property ProductBlockAdvantage[] $productBlockAdvantages
 * @property ProductFlat[] $productFlats
 * @property ProductProgress[] $productProgresses
 */
class ProductBlock extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_block';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['complex_id', 'floor_count', 'status'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['complex_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductComplex::class, 'targetAttribute' => ['complex_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Идентификатор'),
            'complex_id' => Yii::t('app', 'ID ЖК'),
            'title' => Yii::t('app', 'Название'),
            'floor_count' => Yii::t('app', 'Количество этажей'),
            'status' => Yii::t('app', 'Статус (Сдан, проектироавние)'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComplex()
    {
        return $this->hasOne(ProductComplex::className(), ['id' => 'complex_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductBlockAdvantages()
    {
        return $this->hasMany(ProductBlockAdvantage::className(), ['block_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductFlats()
    {
        return $this->hasMany(ProductFlat::className(), ['block_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductProgresses()
    {
        return $this->hasMany(ProductProgress::className(), ['block_id' => 'id']);
    }
    
    /**
     * @inheritdoc
     * @return BlockQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BlockQuery(get_called_class());
    }

}
