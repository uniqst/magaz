<?php

use yii\helpers\Url;
$this->title = Yii::t('app', $model->title);
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app', $model->description),
]);
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
          <a href="<?= Url::to(['/site/index'])?>"><?=Yii::t('app', 'Home');?></a>
          <span> </span>
          <a href="<?= Url::to(['/stories/index'])?>"><?=Yii::t('app', 'Stories');?></a>
          <span> > </span>
          <a href="<?= Url::to(['/stories/story', 'id' => $model->id])?>"><?=Yii::t('app', $model->H1);?></a>
        </div>
      </div>
  </div>

  <?= \frontend\components\SidebarLeft::widget();?>

  <div class="col">
    <div class="story-long links-u">
      <p>
        <?=Yii::t('app', $model->content);?>
      </p>
    </div>
  </div>
  <div class="d-none d-xl-block col-xl-21p">
    <?= \frontend\components\SidebarRight::widget();?>
  </div>
</div>

<?= \frontend\components\BottomSlider::widget();?>
