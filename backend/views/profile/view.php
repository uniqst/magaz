<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profiles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

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
            'name',
            'age',
            'country',
            'about_myself',
            'contacts',
            'date',
        ],
    ]) ?>

    <?= GridView::widget([
        'dataProvider' => $comments,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'email',
            'content',
            // 'contacts',
            // 'date',

            ['class' => 'yii\grid\ActionColumn',
                'buttons'=>[
                    'view'=>function ($url, $comments) {
                        $customurl=Yii::$app->getUrlManager()->createUrl(['/comments/view','id'=>$comments['id']]); //$model->id для AR
                        return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-eye-open"></span>', $customurl,
                            ['title' => Yii::t('yii', 'View'), 'data-pjax' => '0']);

                    },
                    'delete'=>function ($url, $comments) {
                        $customurl=Yii::$app->getUrlManager()->createUrl(['/comments/delete','id'=>$comments['id']]); //$model->id для AR
                        return \yii\helpers\Html::a( '<span class="glyphicon glyphicon-trash"></span>', $customurl,
                            ['title' => Yii::t('yii', 'View'), 'data-confirm' => "Вы уверены, что хотите удалить этот элемент?", 'data-method'=>"post"]);

                    }

                ],
                'template'=>'{view}  {delete}',
            ],
        ],
    ]); ?>

</div>
