<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Price */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="price-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="row">
        <div class="col-md-2">
    <?= $form->field($model, 'price_try')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
    <?= $form->field($model, 'price_try_two')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
    <?= $form->field($model, 'price_try_three')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
    <?= $form->field($model, 'price_usd_four')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
    <?= $form->field($model, 'taxi_try')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
        <?= $form->field($model, 'price_try_night')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <?= $form->field($model, 'price_usd')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_usd_two')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_usd_three')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_usd_four')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'taxi_usd')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_usd_night')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <?= $form->field($model, 'price_eur')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_eur_two')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_eur_three')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_eur_four')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'taxi_eur')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'price_eur_night')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
