<?php
use yii\helpers\Url;
$this->title = Yii::t('app', $pages[0]->text);
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app', $pages[4]->text),
]);

Yii::$app->controller->view->registerMetaTag(['property'=>'og:title', 'content'=>$pages[0]->text], 'og:title');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:site_name', 'content'=>"allescortsankara"], 'og:site_name');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:url', 'content'=>"https://www.allescortsankara.com/stories"], 'og:url');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:image', 'content'=>"https://allescortsankara.com/img/logo.PNG"], 'og:image');
Yii::$app->controller->view->registerMetaTag(['property'=>'og:type', 'content'=>"website"], 'og:type');

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
          <h2 class="heading-main mb-0 links-u">
              <?=Yii::t('app', $pages[2]->text);?>
          </h2>
      </div>
    </div>
  </div>
  <div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to('/')?>"><?=Yii::t('app', 'Home');?></a>
        </div>
      </div>
  </div>

<?= \frontend\components\SidebarLeft::widget();?>
  
  <div class="col-xl-58p">
    <div class="posts-container">
      <div class="page-name"><?=Yii::t('app', $pages[3]->text);?></div>
      <div class="posts-list">
        <?php foreach($model as $story):?>
        <div class="post-item clearfix">
          <div class="image">
            <a href="<?= Url::to(['/stories/story', 'id' => $story->id, 'name' => $story->H1])?>">
              <img src="/stori/<?= $story->img?>" style="width:200px; height:200px" alt="Girl photo">
            </a>
          </div>
              
          <div class="post-info-container links-u">
            <div class="title">
              <a href="<?= Url::to(['/stories/story', 'id' => $story->id, 'name' => $story->H1])?>"><?=Yii::t('app', $story->H1);?></a>
            </div>
            <div class="center-block">
              <p><?=Yii::t('app', mb_substr($story->short_description, 0,500));?></p>
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