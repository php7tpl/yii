<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductComplex */

$this->title = Yii::t('app', 'Create Product Complex');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Complexes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

