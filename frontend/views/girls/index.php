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

  <?= \frontend\components\SidebarLeft::widget();?>

  <div class="col-xl-58p px-0">
    <div style="padding:20px">
      <div class="row">
        <div class="mx-auto">
          <h1 class="page-name stories"><?=Yii::t('app', $pages[1]->text);?></h1>
        </div>
      </div>
      <div class="row">
        <div class="mx-auto">
          <div class="heading-main mb-0 links-u">
            <?=Yii::t('app', $pages[2]->text);?>
          </div>
        </div>
      </div>
      <div class="row dir-tree-links">
        <div class="text-left" >
          <a href="<?= Url::to('/')?>"><?=Yii::t('app', 'Home');?></a>
        </div>
      </div>
    </div>

  <?=\frontend\components\ProductList::widget(['model' => $model])?>

  </div>
  <div class="d-none d-xl-block col-xl-21p">
    <?= \frontend\components\SidebarRight::widget();?>
  </div>
</div>

  <?= \frontend\components\BottomSlider::widget();?>
