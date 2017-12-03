<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Stories */

$this->title = Yii::t('app', 'Update Stories: {nameAttribute}', [
    'nameAttribute' => $model->H1,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Stories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->H1, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="stories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
