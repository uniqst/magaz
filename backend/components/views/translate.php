<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
$text1 = str_replace('<', '&lt;', $text);
$text2 = str_replace('>', '&gt;', $text1);
?>
<p>
<?=$text2;?>
</p>
<?php Pjax::begin();?>
<?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>
<?php if($input == 'area'):?>
<?= $form->field($model->messages['tr'], '[' . 'tr' . ']translation')->textArea()->label($label);?>
<?php else: ?>
<?= $form->field($model->messages['tr'], '[' . 'tr' . ']translation')->textInput()->label($label);?>
<?php endif;?>

<div class="form-group">
    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
</div>
<?php ActiveForm::end(); ?>
<?php Pjax::end();?>