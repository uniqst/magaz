<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = Yii::t('app', $pages[0]->text);
$this->registerMetaTag([
'name' => 'description',
'content' => Yii::t('app', $pages[6]->text),
]);
?>

    <div class="row main-page-upper-box">
        <div class="offset-xl-2 col-xl-8 px-to-md-0">
            <div class="main-slider-container">
                <p class="subheading-main"><?=Yii::t('app', $pages[1]->text);?></p>
                <div class="new-girls-slider">
                    <div class="slick-carousel">
                        <?php foreach($slider as $image):?>
                        <div class="slider-item">
                            <div class="girl-card" style="background-image: url(/photo/<?= $image->image->src?>)">
                                <a class="girl-card__name" href="<?=Url::to(['/girls/girl', 'id' => $image->id, 'name' => $image->name])?>"><?= Yii::t('app', $image->name)?></a>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="offset-xl-2 col-xl-8 px-to-md-0">
            <div class="last-response">
                <div class="subheading-main"><?=Yii::t('app', $pages[2]->text);?></div>
                <div class="iconblock">
                    <a href="<?= Url::to(['/reviews-for-escort'])?>"><span  class="pencil"></span></a>
                    <a href="<?= Url::to(['/reviews-for-escort'])?>"><span class="msgbox"></span></a>
                </div>
                <blockquote class="response">
                    <p class="response__quote"><?=Yii::t('app', $comment->content);?></p>
                    <div class="response__author">
                        <cite><?=Yii::t('app', $comment->name);?></cite>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 offset-xl-3 col-xl-6">
            <h1 class="heading-main">
                <?=Yii::t('app', $pages[3]->text);?>
            </h1>
        </div>
    </div>

    <div class="row mp-content">
        <?= \frontend\components\SidebarLeft::widget();?>
        <div class="col main-center-col">

            <?= \frontend\components\ProductList::widget(['model' => $model2]);?>
            
        </div>
    </div>
    <div class="row">
        <div class="mx-auto col-lg-9 col-xl-9 common-block">
            <div class="row mx-0">
            <div class="col-md-6 px-0 most-wanted-block">
                <?= \frontend\components\MostWanted::widget();?>
            </div>
                <?=\frontend\components\StoriesSlider::widget();?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-xl-3 col-xl-6 px-to-md-0">
            <?=\frontend\components\CommentsList::widget();?>
        </div>

        <div class="offset-xl-3 col-xl-6">
            <div class="mp-text-block">
                <h2 class="mp-text-block__heading">
                    <?=Yii::t('app', $pages[4]->text);?>
                </h2>
                <div class="mp-text-block__text">
                    <p>
                        <?=Yii::t('app', $pages[5]->text);?>
                    </p>
                </div>
            </div>
        </div>
        <div class="offset-lg-1 col-lg-10 offset-xl-2 col-xl-8">
            <div class="advertise-block">
                <div class="advertise-block__list">
                    <?php foreach($advertising as $adver):?>
                    <div class="advertise__item">
                        <a><?= $adver->banner?></a>
                    </div>
                <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
