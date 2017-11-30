<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = $pages[0]->text;
?>

<div class="row">
  <div class="booking-page mx-auto col-xl-58p">
    <?=\frontend\components\Comments::widget();?>
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

        <div class="offset-xl-3 col-xl-6 px-to-md-0">

            <div class="embded-response-box embded-response-box--mb">
    <div class="page-name">
        <?=Yii::t('app', $pages[4]->text);?>
    </div>
    <div class="response-lists-wrapper resopnse-list-js">
        <div class="resoponse-list">
            <?php foreach($model1 as $com):?>
                <blockquote class="response">
                    <p class="response__quote"><?=Yii::t('app', $com->content);?></p>
                    <div class="response__author">
                        <cite><?=Yii::t('app', $com->name);?></cite>
                        |
                        <time><?= $com->date?></time>
                    </div>
                </blockquote>
            <?php endforeach;?>
        </div>
        <div class="resoponse-list">
            <?php foreach($model2 as $com):?>
                <blockquote class="response">
                    <p class="response__quote"><?=Yii::t('app', $com->content);?></p>
                    <div class="response__author">
                        <cite><?=Yii::t('app', $com->name);?></cite>
                        |
                        <time><?= $com->date?></time>
                    </div>
                </blockquote>
            <?php endforeach;?>
        </div>
    </div>
</div>

        </div>

<?=\frontend\components\MainSection::widget();?>





