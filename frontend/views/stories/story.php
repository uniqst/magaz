<?php
use yii\helpers\Url;
?>

<div class="row story-page">
  <div class="col-12">
    <div class="row">
      <div class="offset-lg-3 col-lg-6">
        <h1 class="page-name stories">Erotic Stories</h1>
      </div>
    </div>
  </div>
  <div class="col-12 dir-tree-links">
      <div class="row">
        <div class="offset-lg-3 col-lg-6">
          <a href="#">Home</a>
          <span> > </span>
          <a href="#">Catalog</a>
          <span> > </span>
          <a href="#">English</a>
        </div>
      </div>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="offset-lg-3 col-lg-6">
          <h1 class="heading-main">
              <?= $model->name?>
          </h1>
      </div>
    </div>
  </div>
  <?= \frontend\components\SidebarLeft::widget();?>
  <div class="col-lg-6">
    <div class="story-long">
      <div class="story__image">
        <img src="/stori/<?= $model->img?>" width="350px" hight="450px" alt="Girl image">
      </div>
      <p>
        <?= $model->content?>
      </p>
    </div>
  </div>
  <div class="d-none d-lg-block col-lg-3">
    <?= \frontend\components\SidebarRight::widget();?>
  </div>
</div>

<?= \frontend\components\BottomSlider::widget();?>
