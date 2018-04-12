<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

/* @var $this yii\web\View */
/* @var $model frontend\models\Service */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-form">
    <div class="row">
        <div class="col-md-6">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'content')->widget(CKEditor::className(), [

        'editorOptions' => ElFinder::ckeditorOptions('elfinder',[
                'preset' => 'full',
                'inline' => false,
            ]),

        ]);?>

        <?= $form->field($model, 'imageFile')->fileInput(['accept' => 'image/*']) ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>
         <?php ActiveForm::end(); ?>
        </div>
        <div class="col-md-6">
        <?= \backend\components\Translate::widget(['text' => $model->name, 'input' => 'text', 'label' => 'name']);?>
        <?= \backend\components\Translate::widget(['text' => $model->content, 'input' => 'area', 'label' => 'content']);?>
        </div>
    </div>



</div>
