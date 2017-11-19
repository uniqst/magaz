<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>
<?php Pjax::begin();?>
<?php $form = ActiveForm::begin(['options' => ['data-pjax' => true]]); ?>

    <?= $form->field($model, 'parent_id')->hiddenInput(['value' => 0])->label(false) ?>

    <?= $form->field($model, 'profile_id')->hiddenInput(['value' => $profile->id])->label(false) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textArea(['row' => 6]) ?>

    <?= $form->field($model, 'is_viewed')->hiddenInput(['value' => 0])->label(false) ?>

    <?= $form->field($model, 'status')->hiddenInput(['value' => 0])->label(false); ?>

    <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

<ul>
    <?php foreach($commentsList as $comment):?>
    <li>
        <?=$comment->name?>
    </li>
    <?php endforeach;?>
</ul>
<?php Pjax::end();?>