<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductBlockAdvantage */

$this->title = Yii::t('app', 'Update Product Block Advantage: ') . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Block Advantages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>


