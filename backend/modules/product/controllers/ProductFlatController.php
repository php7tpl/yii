<?php

namespace backend\modules\product\controllers;

use Bridge\Core\Controllers\BaseAdminController;
use yii\helpers\ArrayHelper;
use yii2tech\admin\actions\Position;
use dosamigos\grid\actions\ToggleAction;

/**
 * ProductFlatController implements the CRUD actions for [[backend\modules\product\models\ProductFlat]] model.
 * @see backend\modules\product\models\ProductFlat
 */
class ProductFlatController extends BaseAdminController
{
    /**
     * @inheritdoc
     */
    public $modelClass = 'backend\modules\product\models\ProductFlat';
    /**
     * @inheritdoc
     */
    public $searchModelClass = 'backend\modules\product\models\ProductFlatSearch';

    /**
    * @inheritdoc
    */
    public $createScenario = 'create';

    /**
    * @inheritdoc
    */
    public $updateScenario = 'update';


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
                    'modelClass' => 'backend\modules\product\models\ProductFlat',
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
