<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Price */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Prices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'price_eur',
            'price_try',
            'price_usd',
            'price_eur_two',
            'price_try_two',
            'price_usd_two',
            'price_eur_three',
            'price_try_three',
            'price_usd_three',
            'price_eur_four',
            'price_try_four',
            'price_usd_four',
            'price_eur_night',
            'price_try_night',
            'price_usd_night',
            'taxi_eur',
            'taxi_try',
            'taxi_usd',
            'email:email',
            'phone',
        ],
    ]) ?>

</div>
