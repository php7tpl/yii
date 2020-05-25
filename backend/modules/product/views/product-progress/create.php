<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductProgress */

$this->title = Yii::t('app', 'Create Product Progress');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Progresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

