<?php

use yii\helpers\Url;
$this->title = Yii::t('app', $model->title);
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app', $model->description),
]);

Yii::$app->controller->view->registerMetaTag(['property'=>'og:title', 'content'=>$model->title], 'og:title');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:site_name', 'content'=>"allescortsankara"], 'og:site_name');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:url', 'content'=>Url::to(['/story', 'id' => $model->id, 'H1' => $model->H1])], 'og:url');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:image', 'content'=>"/stori/" . $model->img], 'og:image');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:type', 'content'=>"website"], 'og:type');

?>

<div class="row story-page">
  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
        <h1 class="page-name stories"><?=Yii::t('app', $model->H1);?></h1>
      </div>
    </div>
  </div>
  <div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to(['/'])?>"><?=Yii::t('app', 'Home');?></a>
          <span> </span>
          <a href="<?= Url::to(['/stories'])?>"><?=Yii::t('app', 'Stories');?></a>
        </div>
      </div>
  </div>

  <?= \frontend\components\SidebarLeft::widget();?>

  <div class="col">
    <div class="story-long links-u">
      <p>
        <?=Yii::t('app', $model->content);?>
      </p>

      <?= frontend\components\Story::widget(); ?>

      <?= frontend\components\MainQuestionnaire::widget(); ?>
      
    </div>
  </div>

  <div class="d-none d-xl-block col-xl-21p">
    <?= \frontend\components\SidebarRight::widget();?>
  </div>
</div>

<?= \frontend\components\BottomSlider::widget();?>
