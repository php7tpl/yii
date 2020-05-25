<?php

namespace backend\modules\product\controllers;

use Bridge\Core\Controllers\BaseAdminController;
use yii\helpers\ArrayHelper;
use yii2tech\admin\actions\Position;
use dosamigos\grid\actions\ToggleAction;

/**
 * ProductApartmentController implements the CRUD actions for [[backend\modules\product\models\ProductApartment]] model.
 * @see backend\modules\product\models\ProductApartment
 */
class ProductApartmentController extends BaseAdminController
{
    /**
     * @inheritdoc
     */
    public $modelClass = 'backend\modules\product\models\ProductApartment';
    /**
     * @inheritdoc
     */
    public $searchModelClass = 'backend\modules\product\models\ProductApartmentSearch';




    /**
     * @inheritdoc
     */
    public function actions()
    {
        return ArrayHelper::merge(
            parent::actions(),
            [
                'toggle' => [
                    'class' => ToggleAction::class,
                    'modelClass' => 'backend\modules\product\models\ProductApartment',
                    'onValue' => 1,
                    'offValue' => 0
                ],
                'position' => [
                    'class' => Position::class,
                ],
            ]
        );
    }
}
