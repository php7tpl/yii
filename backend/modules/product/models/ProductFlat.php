<?php

namespace backend\modules\product\models;

use Yii;

/**
 * This is the model class for table "product_flat".
 *
 * @property integer $id
 * @property integer $block_id
 * @property double $area
 * @property integer $room_count
 * @property string $scheme_image
 * @property integer $price
 *
 * @property ProductApartment[] $productApartments
 * @property ProductBlock $block
 *
 * @method string getThumbUploadPath($attribute, $profile = 'thumb', $old = false) 
 * @method string|null getThumbUploadUrl($attribute, $profile = 'thumb') 
 * @method string|null getUploadPath($attribute, $old = false) Returns file path for the attribute.
 * @method string|null getUploadUrl($attribute) Returns file url for the attribute.
 * @method bool sanitize($filename) Replaces characters in strings that are illegal/unsafe for filename.
 */
class ProductFlat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_flat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['block_id', 'room_count', 'price'], 'integer'],
            [['area'], 'number'],
            [['scheme_image'], 'file', 'on' => ['create', 'update'], 'extensions' => ['gif', 'jpg', 'png', 'jpeg']],
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
            'block_id' => Yii::t('app', 'ID Блока'),
            'area' => Yii::t('app', 'Общая площадь'),
            'room_count' => Yii::t('app', 'Количество комнат'),
            'scheme_image' => Yii::t('app', 'Схема'),
            'price' => Yii::t('app', 'Цена за кв.м.'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductApartments()
    {
        return $this->hasMany(ProductApartment::className(), ['flat_id' => 'id']);
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
     * @return FlatQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FlatQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'scheme_imageUpload' => [
                'class' => 'Bridge\Core\Behaviors\BridgeUploadImageBehavior',
                'attribute' => 'scheme_image',
                'path' => '@webroot/media/product_flat/{id}',
                'url' => '@web/media/product_flat/{id}',
                'scenarios' => ['create', 'update'],
                'thumbs' => ['thumb' => ['width' => 200, 'height' => 200, 'quality' => 90], 'preview' => ['width' => 50, 'height' => 50, 'quality' => 90]],
            ],
        ];
    }
}
