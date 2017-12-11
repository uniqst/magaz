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
        <h1 class="page-name stories"><?=Yii::t('app', $pages[1]->text);?></h1>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
          <div class="heading-main mb-0 links-u">
            <?=Yii::t('app', $pages[2]->text);?>
          </div>
      </div>
    </div>
  </div>
  <div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to('/site/index')?>"><?=Yii::t('app', 'Home');?></a>
          <span> > </span>
          <a href="<?= Url::to('/girls/index')?>"><?=Yii::t('app', 'All girls');?></a>
        </div>
      </div>
  </div>

  <?= \frontend\components\SidebarLeft::widget();?>

  <div class="col-xl-58p px-0">
        <?=\frontend\components\ProductList::widget(['model' => $model])?>
  </div>
  <div class="d-none d-xl-block col-xl-21p">
  <?= \frontend\components\SidebarRight::widget();?>
    <!--?= $this->render('../sidebar-right')?-->
  </div>
</div>

  <?= \frontend\components\BottomSlider::widget();?>
<!--?= $this->render('../bottom-slider')?-->
