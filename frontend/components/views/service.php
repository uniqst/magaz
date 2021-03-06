<?php
use yii\helpers\Url;
?>

<div class="posts-container services">

      <h2 class="page-name"><?= Yii::t('app', 'Services')?></h2>
      <div class="posts-list">
      <?php foreach($model as $services):?>
        <div class="post-item clearfix">
          <div class="image">
            <a href="<?=Url::to(['/girls/filters'])?>">
              <img src="/service/<?= $services->img?>" style="height:160px; width:160px" alt="Servise photo">
            </a>
          </div>
          <div class="post-info-container">
            <div class="title">
              <?= Yii::t('app', $services->name)?>
            </div>
            <div class="center-block">
              <?= Yii::t('app', mb_substr($services->content, 0, 1000).'...')?>
            </div>
          </div>
        </div>
      <?php endforeach;?>
      </div>
    </div>
    