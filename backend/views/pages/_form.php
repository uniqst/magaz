<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;


/* @var $this yii\web\View */
/* @var $model frontend\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">
    <div class="row">
    <?php $form = ActiveForm::begin(); ?>

        <div class="col-md-6">

            <?php
            echo $form->field($model, 'text')->widget(CKEditor::className(),[
                'editorOptions' => [
                    'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                    'inline' => false, //по умолчанию false
                ],
            ]);
            ?>

            <?= $form->field($model, 'page')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textArea(['maxlength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div>
    
            <div class="col-md-6">
            <?= \backend\components\Translate::widget(['text' => $model->text]);?>

        </div>
    </div>

</div>
