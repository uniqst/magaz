<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = Yii::t('app', $pages[0]->text);
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app', $pages[5]->text),
]);

Yii::$app->controller->view->registerMetaTag(['property'=>'og:title', 'content'=>$pages[0]->text], 'og:title');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:site_name', 'content'=>"allescortsankara"], 'og:site_name');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:url', 'content'=>"https://www.allescortsankara.com/reviews-for-escort"], 'og:url');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:image', 'content'=>"https://allescortsankara.com/img/logo.PNG"], 'og:image');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:type', 'content'=>"website"], 'og:type');


?>

<div class="row">
  <div class="booking-page mx-auto col-xl-58p">
    <div class="text-center" style="font-size:25px; color:black"><?= Yii::$app->session->getFlash('send_reviews'); ?></div>
    <?=\frontend\components\Comments::widget();?>
  </div>
</div>

<div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to('/')?>"><?=Yii::t('app', 'Home');?></a>
        </div>
      </div>
  </div>


<?=\frontend\components\MainSection::widget();?>

<div class="main-info-box">
      <div class="info-box__heading">
        <?=Yii::t('app', $pages[3]->text);?>
      </div>
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




