<?php

use dosamigos\grid\GridView;
use yii2tech\admin\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\product\models\ProductComplexSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Product Complexes');
$this->params['breadcrumbs'][] = $this->title;
$this->params['contextMenuItems'] = [
    ['create'],
];
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'options' => ['class' => 'grid-view table-responsive'],
    'behaviors' => [
        \dosamigos\grid\behaviors\ResizableColumnsBehavior::class
    ],
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'city_id',
        'title',
        [
            'class' => 'Bridge\Core\Widgets\Columns\TruncatedTextColumn',
            'attribute' => 'description',
        ],
        'status',
        // 'flat_total_count',
        // 'latitude',
        // 'longitude',

        [
            'class' => ActionColumn::class,
        ],
    ],
]); ?>
