<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SocialWeb */

$this->title = Yii::t('app', 'Create Social Web');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Social Webs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-web-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
