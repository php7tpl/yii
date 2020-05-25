<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductApartment */

$this->title = Yii::t('app', 'Create Product Apartment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Apartments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

