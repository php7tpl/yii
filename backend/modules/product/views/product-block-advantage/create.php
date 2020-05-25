<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductBlockAdvantage */

$this->title = Yii::t('app', 'Create Product Block Advantage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Block Advantages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

