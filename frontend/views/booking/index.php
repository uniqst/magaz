<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = Yii::t('app', $pages[0]->text);
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app', $pages[5]->text)
]);
?>
<div class="row">
<h3 class="text-center" style="font-size:25px; color:black"><?= Yii::$app->session->getFlash('send'); ?></h3>
  <div class="booking-page col-xl-58p mx-auto">
    <div class="top-form">
      
      <h1 class="page-name"><?=Yii::t('app', $pages[1]->text);?></h1>
      <div class="text links-u"><?=Yii::t('app', $pages[2]->text);?></div>

      <?php $form = ActiveForm::begin(['class' => "main-application-form container-fluid"]);?>
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="form-control" name="name" placeholder="your name*">
          </div>
          <div class="col-md-6">
            <input type="email"class="form-control" name="email" placeholder="your e-mail*">
          </div>
          <div class="col-md-4" >
            <input type="text" class="form-control" name="phone" placeholder="your phone number*">
          </div>
          <div class="col-md-4">
            <input type="text" class="form-control" name="escort_name" placeholder="name of escort*">
          </div>
          <div class="col-md-4" >
            <input type="text" class="form-control" name="adult" placeholder="are you 18? (YES/NO)">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <textarea class="form-control" name="wishes" id="" cols="30" rows="7" class="col-md-12" placeholder="tell us if you have some special wishes*"></textarea>
          </div>
        </div>
        <div class="row submit">
          <div class="offset-md-8 col-md-4 text-right">
            <button type="submit"><?=Yii::t('app', 'Submit');?></button>
          </div>
        </div>
      <?php ActiveForm::end();?>
    </div>
  </div>
</div>

<div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to('/site/index')?>"><?=Yii::t('app', 'Home');?></a>
          <span> > </span>
          <a href="<?= Url::to('/booking/index')?>"><?=Yii::t('app', 'Booking');?></a>
        </div>
      </div>
  </div>

<?= \frontend\components\MainSection::widget();?>

<div class="main-info-box">
      <h2 class="info-box__heading">
        <?=Yii::t('app', $pages[3]->text);?>
      </h2>
      <p>
        <?=Yii::t('app', $pages[4]->text);?>
      </p>
    </div>

  </div>

  <div class="d-none d-xl-block col-xl-21p">
    <?= \frontend\components\SidebarRight::widget();?>
  </div>

</div>

<div class="row">
  <?= \frontend\components\BottomSlider::widget();?>
</div>