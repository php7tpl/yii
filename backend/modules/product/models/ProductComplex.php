<?php

namespace backend\modules\product\models;

use Yii;

/**
 * This is the model class for table "product_complex".
 *
 * @property integer $id
 * @property integer $city_id
 * @property string $title
 * @property string $description
 * @property integer $status
 * @property integer $flat_total_count
 * @property double $latitude
 * @property double $longitude
 *
 * @property ProductBlock[] $productBlocks
 * @property GeoCity $city
 * @property ProductComplexAdvantage[] $productComplexAdvantages
 */
class ProductComplex extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_complex';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_id', 'status', 'flat_total_count'], 'integer'],
            [['description'], 'string'],
            [['latitude', 'longitude'], 'number'],
            [['title'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => GeoCity::class, 'targetAttribute' => ['city_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Идентификатор'),
            'city_id' => Yii::t('app', 'Город'),
            'title' => Yii::t('app', 'Название'),
            'description' => Yii::t('app', 'Описание'),
            'status' => Yii::t('app', 'Статус (Сдан, проектироавние)'),
            'flat_total_count' => Yii::t('app', 'Общее количество квартир'),
            'latitude' => Yii::t('app', 'Координаты. Широта'),
            'longitude' => Yii::t('app', 'Координаты. Долгота'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductBlocks()
    {
        return $this->hasMany(ProductBlock::className(), ['complex_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(GeoCity::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductComplexAdvantages()
    {
        return $this->hasMany(ProductComplexAdvantage::className(), ['complex_id' => 'id']);
    }
    
    /**
     * @inheritdoc
     * @return ComplexQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ComplexQuery(get_called_class());
    }

}
