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
            <a href="#">
              <img src="http://via.placeholder.com/200x200" alt="Girl photo">
            </a>
          </div>
              
          <div class="post-info-container">
            <h2 class="title">
              <a href="#"><?= $story->name?></a>
            </h2>
            <div class="center-block">
              <p><?= $story->content?></p>
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