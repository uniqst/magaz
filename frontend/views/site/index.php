<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>

    <div class="row main-page-upper-box">
        <div class="offset-xl-2 col-xl-8 px-to-md-0">
            <div class="main-slider-container">
                <h3 class="subheading-main"><?=Yii::t('app', 'New Girls');?></h3>
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
    <!-- </div> -->
    <!-- <div class="row"> -->
        <div class="offset-xl-2 col-xl-8 px-to-md-0">
            <div class="last-response">
                <h3 class="subheading-main"><?=Yii::t('app', 'Customer response');?></h3>
                <div class="iconblock">
                    <a href="#" class="pencil"></a>
                    <a href="#" class="msgbox"></a>
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
    <div class="row dir-tree-links">
        <div class="offset-xl-3 col-xl-6">
            <a href="#"><?=Yii::t('app', 'Home');?></a>
            <span> > </span>
            <a href="#"><?=Yii::t('app', 'Catalog');?></a>
            <span> > </span>
            <a href="#"><?=Yii::t('app', 'English');?></a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 offset-lg-3 col-lg-6">
            <h1 class="heading-main">
                <?=Yii::t('app', 'Bursa platinum girls. High class escorts. Pleasure without limits');?>
            </h1>
        </div>
    </div>

    <div class="row mp-content">
        <?= \frontend\components\SidebarLeft::widget();?>
        <!-- <div class="col-xl-3 sidebar-main d-none d-lg-block">
            Sidebar main
        </div> -->
        <div class="col-xl-9 main-center-col">

            <div class="items-block">
                <div class="container-fluild">
                    <div class="row no-padding">
                        <div class="container-fluid">
                            <div class="row">
                                <?php foreach($model as $image):?>
                                <div class="col-6 col-sm-6 col-md-4 col-xl-3">
                                    <div class="items-block__item" style=" background-image: url(photo/<?=$image->image->src?>)">
                                        <a href="#" class="items-block__link"></a>
                                        <div class="info-card">
                                            <div class="wrapper">
                                                <div class="info-card__name">
                                                    <a href="#">
                                                        <?=$image->name?>
                                                        <!-- <i class="add-button fa fa-plus"></i> -->
                                                    </a>
                                                </div>
                                                <div class="info-card__about">
                                                    <span class="age"><?=$image->age?></span>
                                                    <span class="nationality"><?=$image->nationality?></span>
                                                </div>
                                                <p class="info-card__more-info">
                                                    <?=$image->about_myself?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-xl-3 col-xl-6 px-to-md-0">
            <div class="embded-response-box embded-response-box--mb">
                <div class="page-name">
                    <?=Yii::t('app', 'Customer reviews');?>
                </div>
                <div class="iconblock">
                    <a href="#" class="pencil"></a>
                    <a href="#" class="msgbox"></a>
                </div>
                <div class="resoponse-list">
                    <?php foreach($comments as $com):?>
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

        <div class="offset-xl-3 col-xl-6">
            <div class="mp-text-block">
                <h3 class="mp-text-block__heading">
                    <?=Yii::t('app', 'Escort in Ankara, Turkey. Housewife, Escort agency «All Ankara Escort»');?>
                </h3>
                <div class="mp-text-block__text">
                    <p>
                        <?=Yii::t('app', '
                        Escort agency «All Ankara Escort» has been operating successfully for more than five years. We work with only the best girls from different countries, mainly in the most beautiful girls from Russia and Ukraine. Customers who have used our escort service at least once, will melt our regular customers. Therefore, we value our reputation.
                        ');?>
                    </p>
                    <p>
                        <?=Yii::t('app', ' If you live in Turkey and came to Ankara on business, to visit or just relax, then you definitely need to meet with one of our girls. It will help you to relax and spend time pleasantly, help relieve stress and make you forget about everything that bothers you. You can start a new day with full force. Our girls are always cheerful and sexy, always ready to give you pleasure. They can be gentle and tender, can be rude, all depends entirely on you and your desires. The most important thing is that our girls are very fond of their work, and this is very important! Everyone has long known that the most beautiful girls are in Ukraine and Russia. ');?>
                    </p>
                </div>
            </div>
        </div>
        <div class="offset-lg-1 col-lg-10 offset-xl-2 col-xl-8">
            <div class="advertise-block">
                <div class="advertise-block__list">
                    <?php foreach($advertising as $adver):?>
                    <div class="advertise__item">
                        <a href="<?= $adver->href?>" target='_blank'>
                            <img width="600" height="230" src="/promo/<?= $adver->img?>" alt="Add">
                        </a>
                    </div>
                <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>

<!-- <div class="main-slider-container">
    <h3>New Girls</h3>
    <div class="new-girls-slider">
        <div class="owl-carousel owl-theme">
            <div class="girl-card" style="background-image: url(/img/girl-cards/girl-card-1.jpg)">
                <a class="girl-card__name">Katrina</a>
            </div>
        </div>
    </div>
</div> -->
