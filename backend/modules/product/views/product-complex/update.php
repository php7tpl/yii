<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductComplex */

$this->title = Yii::t('app', 'Update Product Complex: ') . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Complexes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>


