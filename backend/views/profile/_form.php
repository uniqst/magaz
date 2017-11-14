<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Photo;
use frontend\models\Filters;
use frontend\models\FiltersValue;
 $filters = Filters::find()->where(['parent_id' => 0])->with('value')->all();
/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($photo, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput() ?>

    <?= $form->field($model, 'nationality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'mesurements')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'about_myself')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([
        '0' => 'Waiting',
        '1' => 'Approved',
        '2'=> 'Disapproved'
        ]); ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>

    <?php foreach($filters as $filter):?>
    <?php $value = FiltersValue::find()->where(['filter_id' => $filter->id, 'product_id' => $model->id])->one();
    if(empty($value)){
        $value = new FiltersValue();
    }
    ?>
        <?= $form->field($value, 'value')->textInput(['name' => 'value['.$filter->id.']'])->label($filter->name) ?>        
    <?php endforeach;?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
