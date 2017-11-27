<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Prices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="price-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Price'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'price_eur',
            'price_try',
            'price_usd',
            'price_eur_two',
            //'price_try_two',
            //'price_usd_two',
            //'price_eur_three',
            //'price_try_three',
            //'price_usd_three',
            //'price_eur_four',
            //'price_try_four',
            //'price_usd_four',
            //'price_eur_night',
            //'price_try_night',
            //'price_usd_night',
            //'taxi_eur',
            //'taxi_try',
            //'taxi_usd',
            //'email:email',
            //'phone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
