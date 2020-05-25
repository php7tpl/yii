<?php

namespace backend\modules\product\models;

use Yii;

/**
 * This is the model class for table "product_progress".
 *
 * @property integer $id
 * @property integer $block_id
 * @property string $title
 * @property string $created_at
 *
 * @property ProductBlock $block
 */
class ProductProgress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_progress';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['block_id'], 'integer'],
            [['created_at'], 'safe'],
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
            'created_at' => Yii::t('app', 'Дата создания'),
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
     * @return ProgressQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProgressQuery(get_called_class());
    }

}
