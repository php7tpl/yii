<?php

namespace backend\modules\product\models;

use Yii;

/**
 * This is the model class for table "product_complex_advantage".
 *
 * @property integer $id
 * @property integer $complex_id
 * @property string $title
 *
 * @property ProductComplex $complex
 */
class ProductComplexAdvantage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_complex_advantage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['complex_id'], 'integer'],
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
            'complex_id' => Yii::t('app', 'ID комплекса'),
            'title' => Yii::t('app', 'Название'),
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
     * @inheritdoc
     * @return ComplexAdvantageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ComplexAdvantageQuery(get_called_class());
    }

}
