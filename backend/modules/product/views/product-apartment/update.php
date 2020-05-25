<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductApartment */

$this->title = Yii::t('app', 'Update Product Apartment: ') . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Apartments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>


