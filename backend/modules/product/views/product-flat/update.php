<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductFlat */

$this->title = Yii::t('app', 'Update Product Flat: ') . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Flats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>


