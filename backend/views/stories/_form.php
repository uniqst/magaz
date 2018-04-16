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

<div class="row">
  <div class="col-md-6">    
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

   <?= $form->field($model, 'imageFile')->fileInput() ?>

   <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'description')->textArea(['maxlength' => true]) ?>

   <?= $form->field($model, 'H1')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'short_description')->widget(CKEditor::className(), [

  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
  		'preset' => 'full',
  		'inline' => false,
  	]),

]);?>   

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



    
    <div class="col-md-6">
    <?= \backend\components\Translate::widget(['text' => $model->title, 'input' => 'text', 'label' => 'Title']);?>
    <?= \backend\components\Translate::widget(['text' => $model->description, 'input' => 'area', 'label' => 'Meta description']);?>
    <?= \backend\components\Translate::widget(['text' => $model->H1, 'input' => 'text', 'label' => 'H1']);?>
    <?= \backend\components\Translate::widget(['text' => $model->short_description, 'input' => 'area', 'label' => 'Short Description']);?>
    <?= \backend\components\Translate::widget(['text' => $model->content, 'input' => 'area', 'label' => 'Content']);?>


 </div>

</div>
