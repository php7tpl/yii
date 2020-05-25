<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductBlock */

$this->title = Yii::t('app', 'Create Product Block');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Blocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

