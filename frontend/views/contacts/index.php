<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = Yii::t('app', $pages[0]->text);
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app', $pages[5]->text)
]);
?>
<div class="row">
  <div class="mx-auto col-xl-58p">
    <div class="application-ask page-contacts container-fluid">
      <div class="row">
        <div class="col-12">
          <h1 class="page-name mb-5"><?=Yii::t('app', $pages[1]->text);?></h1>
        </div>
        <div class="col-md-6">
          <div class="image mx-auto mr-md-0"></div>
        </div>
        <div class="col-md-6 text-center text-md-left d-md-flex flex-md-column justify-content-md-center msg-block-wrap mt-5 mt-md-0">
          <div class="msg-block links-u">
            <p><?=Yii::t('app', $pages[2]->text);?></p>
            <p class="contacts-page__phone"><a href="tel:+905380639316"><?= $model->phone?></a></p>
            <p class="text-uppercase"><?=Yii::t('app', 'CALL, SMS, VIBER, WHATSAPP');?></p>
            <p><a href="mailto:sandra-1994@mail.ua"><?= $model->email?></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to('/')?>"><?=Yii::t('app', 'Home');?></a>
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
