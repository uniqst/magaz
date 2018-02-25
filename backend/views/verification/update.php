<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Verification */

$this->title = 'Update Verification: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Verifications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="verification-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
