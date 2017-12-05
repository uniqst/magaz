<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Attendance */

$this->title = Yii::t('app', 'Create Profile service');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Attendances'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attendance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
