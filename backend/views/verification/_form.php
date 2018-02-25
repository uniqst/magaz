<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model frontend\models\Verification */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="verification-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'textup')->widget(CKEditor::className(), [

  'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
        'preset' => 'full',
        'inline' => false,
    ]),

  ]);?>
  
    <?= $form->field($model, 'textdown')->widget(CKEditor::className(), [

'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
      'preset' => 'full',
      'inline' => false,
  ]),

]);?>

    <?= $form->field($model, 'enter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'leave')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
