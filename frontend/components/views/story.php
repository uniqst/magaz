<?php
use yii\helpers\Url;
?>

<div class="articles-box">
      <div class="articles-box__title">
        <a href="<?= Url::to('/stories')?>"><?=Yii::t('app', 'Erotic stories');?></a>
      </div>
      <div class="articles__list">
        <ul>
          <?php foreach($model as $story):?>
          <div class="list-item">
            <div class="photo" style="background-image: url(/stori/<?= $story->img?>)">
              <a href=""></a>
            </div>
            <div class="article">
              <div class="article__title">
                <a href="<?= Url::to(['/stories/story', 'id' => $story->id, 'name' => $story->H1])?>"><?= Yii::t('app', $story->H1)?></a>
              </div>
              <div class="article__text">
                <?= Yii::t('app', mb_substr($story->short_description, 0, 1000).'...')?>
              </div>
            </div>
          </div>
        <?php endforeach;?>
        </ul>
      </div>
    </div>