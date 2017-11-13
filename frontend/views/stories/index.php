<?php
use yii\helpers\Url;
?>

<div class="row stories-page">

  <div class="col-12">
    <div class="row">
      <div class="offset-lg-3 col-lg-6">
        <h2 class="page-name stories">Erotic Stories</h1>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="row">
      <div class="offset-lg-3 col-lg-6">
          <h1 class="heading-main">
              Bursa platinum girls. High class escorts. Pleasure without limits
          </h1>
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
  <div class="d-none d-lg-block col-lg-3">
    sidebar left
  </div>
  <div class="col-lg-6">
    <div class="posts-container">
      <h1 class="page-name">EROTIC STORIES</h1>
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
  <div class="d-none d-lg-block col-lg-3">
    <?= $this->render('../sidebar-right')?>
  </div>
</div>

<?= $this->render('../bottom-slider')?>