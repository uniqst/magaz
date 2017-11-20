<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
?>
<?php Pjax::begin();?>
<?php $form = ActiveForm::begin(['options' => ['data-pjax' => true, 'class' => 'main-application-form container-fluid']]); ?>

    <div class="top-form">
      <h2 class="page-name"><?=Yii::t('app', 'REVIEWS');?></h1>
      <p class="text">
         <?=Yii::t('app', 'This is a relatively new section on our site. Here, every fellow (man and woman) who used our services, can write a feedback on how it all went - smoothly or in a different way and which girl it was with him/her on a date. You can find this information useful when making a decision whether to book a certain girl or try to search for another one from our catalog. The reviews are especially useful when you feel that a profile of a girl says little to you and you are in the midst of a search for additional information that could help. So here you go - just look for a review of a specific girl in our catalog in this section and, if she is found, read to know her better before ordering using a number +90 539 460 85 63.');?>
      </p>
    
        <div class="row">
          <div class="col-md-12 px-0">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
          </div>
          <div class="col-md-12 px-0">
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