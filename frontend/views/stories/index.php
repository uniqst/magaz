<?php
use yii\helpers\Url;
$this->title = $pages[0]->text;
?>

<div class="row stories-page">

  <div class="col-12">
    <div class="row">
      <div class="mx-auto col-xl-58p">
        <h2 class="page-name stories"><?=Yii::t('app', $pages[1]->text);?></h1>
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
          <a href="<?= Url::to('/stories/index')?>"><?=Yii::t('app', 'Stories');?></a>
        </div>
      </div>
  </div>

<?= \frontend\components\SidebarLeft::widget();?>
  
  <div class="col-xl-58p">
    <div class="posts-container">
      <h1 class="page-name"><?=Yii::t('app', $pages[3]->text);?></h1>
      <div class="posts-list">
        <?php foreach($model as $story):?>
        <div class="post-item clearfix">
          <div class="image">
            <a href="<?= Url::to(['/stories/story', 'id' => $story->id, 'name' => $story->H1])?>">
              <img src="/stori/<?= $story->img?>" width="200px" hight="200px" alt="Girl photo">
            </a>
          </div>
              
          <div class="post-info-container">
            <h2 class="title">
              <a href="<?= Url::to(['/stories/story', 'id' => $story->id, 'name' => $story->H1])?>"><?= $story->H1?></a>
            </h2>
            <div class="center-block">
              <p><?= mb_substr($story->short_description, 0,500)?></p>
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