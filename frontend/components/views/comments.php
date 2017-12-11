<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>
<?php Pjax::begin();?>
    <div class="top-form">
<?php $form = ActiveForm::begin(['options' => ['data-pjax' => true, 'class' => 'main-application-form container-fluid']]); ?>

      <h1 class="page-name px-0"><?=Yii::t('app', $pages[1]->text);?></h1>
      <div class="text px-0 links-u">
         <?=Yii::t('app', $pages[2]->text);?>
      </div>

        <div class="row">
          <div class="col-md-12 ">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
          </div>
          <div class="col-md-12">
            <?= $form->field($model, 'content')->textArea(['rows' => 6, 'cols' => 30, 'class' => 'col-md-12', 'placeholder' => 'enter your message here*']) ?>
          </div>
        </div>
    

          <?= $form->field($model, 'parent_id')->hiddenInput(['value' => 0])->label(false) ?>

          <?= $form->field($model, 'profile_id')->hiddenInput(['value' => 0])->label(false) ?>

          <?= $form->field($model, 'email')->hiddenInput(['value' => 0])->label(false); ?>
        

          <?= $form->field($model, 'is_viewed')->hiddenInput(['value' => 0])->label(false) ?>

          <?= $form->field($model, 'status')->hiddenInput(['value' => 0])->label(false); ?>

          <?= $form->field($model, 'date')->hiddenInput(['value' => date('Y-m-d H:i:s')])->label(false) ?>

          <div class="row submit">
                <div class="offset-md-8 col-md-4 text-right px-0">
                  <button type="submit"><?=Yii::t('app', 'Submit');?></button>
                </div>
          </div>
<?php ActiveForm::end(); ?>

    </div>

<?php Pjax::end();?>