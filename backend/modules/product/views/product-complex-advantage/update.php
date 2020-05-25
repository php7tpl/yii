<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductComplexAdvantage */

$this->title = Yii::t('app', 'Update Product Complex Advantage: ') . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Complex Advantages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>


