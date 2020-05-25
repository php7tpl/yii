<?php

namespace backend\modules\product\models;

use Yii;

/**
 * This is the model class for table "product_apartment".
 *
 * @property integer $id
 * @property integer $flat_id
 * @property integer $floor
 * @property integer $status
 *
 * @property ProductFlat $flat
 */
class ProductApartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_apartment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['flat_id', 'floor', 'status'], 'integer'],
            [['flat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductFlat::class, 'targetAttribute' => ['flat_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Идентификатор'),
            'flat_id' => Yii::t('app', 'ID блока'),
            'floor' => Yii::t('app', 'Этаж'),
            'status' => Yii::t('app', 'Статус (продана, не продана)'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlat()
    {
        return $this->hasOne(ProductFlat::className(), ['id' => 'flat_id']);
    }
    
    /**
     * @inheritdoc
     * @return ApartmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ApartmentQuery(get_called_class());
    }

}
