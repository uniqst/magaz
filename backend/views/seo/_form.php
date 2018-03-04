<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Seo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'google')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yandex')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'robots')->textInput(['maxlength' => true]) ?>

        <?php
    $fp = fopen("/frontend/web/robots.txt", "a"); // Открываем файл в режиме записи 
    $mytext = "Это строку необходимо нам записать\r\n"; // Исходная строка
    $test = fwrite($fp, $mytext); // Запись в файл
    if ($test) echo 'Данные в файл успешно занесены.';
    else echo 'Ошибка при записи в файл.';
    fclose($fp); //Закрытие файла
?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
