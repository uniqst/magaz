<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Reviews';
?>

<div class="row">

  <div class="booking-page mx-auto col-xl-58p">
    <?=\frontend\components\Comments::widget();?>
    <?=\frontend\components\CommentsList::widget();?>
  </div>
</div>

<div class="col-12 dir-tree-links">
      <div class="row">
        <div class="mx-auto col-xl-58p">
          <a href="<?= Url::to('/site/index')?>"><?=Yii::t('app', 'Home');?></a>
          <span> > </span>
          <a href="<?= Url::to('/reviews-for-escort/index')?>"><?=Yii::t('app', 'Reviews');?></a>
        </div>
      </div>
  </div>

<?=\frontend\components\MainSection::widget();?>


