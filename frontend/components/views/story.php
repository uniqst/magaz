<?php
use yii\helpers\Url;
?>

<div class="articles-box">
      <div class="articles-box__title">
        <a href="#"><?=Yii::t('app', 'Erotic stories');?></a>
      </div>
      <div class="articles__list">
        <ul>
          <?php foreach($model as $story):?>
          <div class="list-item">
            <div class="photo" style="background-image: url(/story/<?= $story->img?>)">
            </div>
            <div class="article">
              <div class="article__title">
                <a href="#"><?= $story->name?></a>
              </div>
              <div class="article__text">
                <?= mb_substr($story->content, 0, 1000).'...'?> 
              </div>
            </div>
          </div>
        <?php endforeach;?>
        </ul>
      </div>
    </div>