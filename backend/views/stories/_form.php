<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model frontend\models\Stories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stories-form">

   <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

   <?= $form->field($model, 'imageFile')->fileInput() ?>

   <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'description')->textArea(['maxlength' => true]) ?>

   <?= $form->field($model, 'H1')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'short_description')->textArea();?>

	 <?= $form->field($model, 'content')->widget(CKEditor::className(), [

  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
  		'preset' => 'full',
  		'inline' => false,
  	]),

]);?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
