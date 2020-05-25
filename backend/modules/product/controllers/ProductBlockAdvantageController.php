<?php

namespace backend\modules\product\controllers;

use Bridge\Core\Controllers\BaseAdminController;
use yii\helpers\ArrayHelper;
use yii2tech\admin\actions\Position;
use dosamigos\grid\actions\ToggleAction;

/**
 * ProductBlockAdvantageController implements the CRUD actions for [[backend\modules\product\models\ProductBlockAdvantage]] model.
 * @see backend\modules\product\models\ProductBlockAdvantage
 */
class ProductBlockAdvantageController extends BaseAdminController
{
    /**
     * @inheritdoc
     */
    public $modelClass = 'backend\modules\product\models\ProductBlockAdvantage';
    /**
     * @inheritdoc
     */
    public $searchModelClass = 'backend\modules\product\models\ProductBlockAdvantageSearch';




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
                    'modelClass' => 'backend\modules\product\models\ProductBlockAdvantage',
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
