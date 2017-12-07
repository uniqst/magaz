<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = Yii::t('app', $pages[0]->text);
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app', $pages[3]->text),
]);
?>
<div class="row stories-page">

  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
        <h2 class="page-name stories"><?=Yii::t('app', $pages[1]->text);?></h2>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
          <h1 class="heading-main mb-0">
            <?=Yii::t('app', $pages[2]->text);?>
          </h1>
      </div>
    </div>
  </div>
  <div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to('/site/index')?>"><?=Yii::t('app', 'Home');?></a>
          <span> > </span>
          <a href="<?= Url::to('/services/index')?>"><?=Yii::t('app', 'Services');?></a>
        </div>
      </div>
  </div>

  <?= \frontend\components\SidebarLeft::widget()?>

  <div class="mx-auto col-xl-58p">
 
    <?= \frontend\components\Service::widget()?>
  </div>
  <div class="d-none d-xl-block col-xl-21p">
    <?= \frontend\components\SidebarRight::widget()?>
  </div>
</div>

<?= \frontend\components\BottomSlider::widget()?>
