<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchText */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update}'
            ],
            ['class' => 'yii\grid\SerialColumn'],

            [
              'attribute' => 'text',
                'value' => function($data){
                    return mb_substr($data->text, 0, 60);
                },
            ],
            'page',


        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
