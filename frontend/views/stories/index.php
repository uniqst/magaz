<?php
use yii\helpers\Url;
$this->title = 'Stories';
?>

<div class="row stories-page">

  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
        <h2 class="page-name stories"><?=Yii::t('app', 'Erotic Stories');?></h1>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
          <h1 class="heading-main mb-0">
              <?=Yii::t('app', 'Bursa platinum girls. High class escorts. Pleasure without limits');?>
          </h1>
      </div>
    </div>
  </div>
  <div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to('/site/index')?>"><?=Yii::t('app', 'Home');?></a>
          <span> > </span>
          <a href="<?= Url::to('/stories/index')?>"><?=Yii::t('app', 'Stories');?></a>
        </div>
      </div>
  </div>

<?= \frontend\components\SidebarLeft::widget();?>
  
  <div class="col-xl-58p">
    <div class="posts-container">
      <h1 class="page-name"><?=Yii::t('app', 'EROTIC STORIES');?></h1>
      <div class="posts-list">
        <?php foreach($model as $story):?>
        <div class="post-item clearfix">
          <div class="image">
            <a href="<?= Url::to(['/stories/story', 'id' => $story->id, 'name' => $story->name])?>">
              <img src="/stori/<?= $story->img?>" width="200px" hight="200px" alt="Girl photo">
            </a>
          </div>
              
          <div class="post-info-container">
            <h2 class="title">
              <a href="<?= Url::to(['/stories/story', 'id' => $story->id, 'name' => $story->name])?>"><?= $story->name?></a>
            </h2>
            <div class="center-block">
              <p><?= mb_substr($story->content, 0,500)?></p>
            </div>
          </div>  
        </div>
              <?php endforeach;?>
      </div>
    </div>
  </div>
  <div class="d-none d-xl-block col-xl-21p">
    <?= \frontend\components\SidebarRight::widget();?>
  </div>
</div>

<?= \frontend\components\BottomSlider::widget();?>