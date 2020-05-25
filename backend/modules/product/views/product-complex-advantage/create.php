<?php

/* @var $this yii\web\View */
/* @var $model backend\modules\product\models\ProductComplexAdvantage */

$this->title = Yii::t('app', 'Create Product Complex Advantage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Complex Advantages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

