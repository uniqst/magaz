<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Category */
/* @var $form yii\widgets\ActiveForm */

// получаем всех авторов
    $category = Category::find()->where(['parent_id' => 0 ])->all();
// формируем массив, с ключем равным полю 'id' и значением равным полю 'name' 
    $items = ArrayHelper::map($category,'id','name');
    $item = ['None'];
    $items = array_merge($item, $items);

?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent_id')->dropDownList($items)->label('Parent category'); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
