<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductFlat */

$this->title = Yii::t('app', 'Create Product Flat');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Flats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

