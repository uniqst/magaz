<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = Yii::t('app', $pages[0]->text);
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app', $pages[5]->text),
]);
?>
<div class="row">
    <div class="mx-auto col-xl-58p">
    <div class="top-form top-form-how-to-order">
      <h1 class="page-name"><?=Yii::t('app', $pages[1]->text);?></h1>
      <p>
        <?=Yii::t('app', $pages[2]->text);?>
      </p>
    </div>
  </div>
</div>

<div class="row dir-tree-links">
  <div class="mx-auto col-xl-58p">
    <a href="<?= Url::to('/site/index')?>"><?=Yii::t('app', 'Home');?></a>
    <span></span>
    <a href="<?= Url::to('/how-make-order/index')?>"><?=Yii::t('app', 'How to make order');?></a>
  </div>
</div>

 <?=\frontend\components\MainSection::widget();?>

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


