<?php

use yii\helpers\Url;
$this->title = $model->name;
?>

<div class="row story-page">
  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
        <h1 class="page-name stories"><?=Yii::t('app', $pages[4]->text);?></h1>
      </div>
    </div>
  </div>
  <div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to(['/site/index'])?>"><?=Yii::t('app', 'Home');?></a>
          <span> > </span>
          <a href="<?= Url::to(['/stories/index'])?>"><?=Yii::t('app', 'Stories');?></a>
          <span> > </span>
          <a href="<?= Url::to(['/stories/story', 'id' => $model->id])?>"><?=Yii::t('app', $model->name);?></a>
        </div>
      </div>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
          <h1 class="heading-main">
              <?= $model->name?>
          </h1>
      </div>
    </div>
  </div>

  <?= \frontend\components\SidebarLeft::widget();?>

  <div class="col">
    <div class="story-long">
      <p>
        <?= $model->content?>
      </p>
    </div>
  </div>
  <div class="d-none d-xl-block col-xl-21p">
    <?= \frontend\components\SidebarRight::widget();?>
  </div>
</div>

<?= \frontend\components\BottomSlider::widget();?>
