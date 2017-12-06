<?php
use yii\helpers\Url;
?>

<div class="posts-container services">
<<<<<<< HEAD
      <h1 class="page-name"><?= Yii::t('app', 'Services')?></h1>
=======
      <h2 class="page-name">Services</h2>
>>>>>>> ba0414e41d2d984b2aba11b3503feec7c9334d5f
      <div class="posts-list">
      <?php foreach($model as $services):?>
        <div class="post-item clearfix">
          <div class="image">
            <a href="<?=Url::to(['/girls/filters'])?>">
              <img src="/service/<?= $services->img?>" style="height:160px; width:160px" alt="Servise photo">
            </a>
          </div>
          <div class="post-info-container">
<<<<<<< HEAD
            <h2 class="title">
              <?= Yii::t('app', $services->name)?>
            </h2>
=======
            <h3 class="title">
              <?= $services->name?>
            </h3>
>>>>>>> ba0414e41d2d984b2aba11b3503feec7c9334d5f
            <div class="center-block">
              <p>
              <?= Yii::t('app', mb_substr($services->content, 0, 1000).'...')?>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach;?>
      </div>
    </div>
    