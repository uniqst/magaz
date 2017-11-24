<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Home';
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
                    <span href="#" class="pencil"></span>
                    <span href="#" class="msgbox"></span>
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
                <?=Yii::t('app', 'Bursa platinum girls. High class escorts. Pleasure without limits');?>
            </h1>
        </div>
    </div>

    <div class="row mp-content">
        <?= \frontend\components\SidebarLeft::widget();?>
        <!-- <div class="col-xl-3 sidebar-main d-none d-lg-block">
            Sidebar main
        </div> -->
        <div class="col main-center-col">

            <?= \frontend\components\ProductList::widget(['model' => $model2]);?>
            
        </div>
    </div>
    <div class="row">
        <div class="mx-auto col-lg-9 col-xl-9 common-block">
            <div class="row mx-0">
            <div class="col-md-6 px-0 most-wanted-block">
                <div class="most-wanted-block">
                    <h3 class="page-name"><?=Yii::t('app', 'Most Wanted');?></h3>
                    <div class="most-wanted-slider most-wanted-slider-js">
                        <div class="most-wanted-slider__item">
                            <div class="girl-image" style="background-image: url(photo/82db0c2c079e2f8f56a2.png)"></div>
                        </div>
                        <div class="most-wanted-slider__item">
                            <div class="girl-image" style="background-image: url(photo/82db0c2c079e2f8f56a2.png)"></div>
                        </div>
                        <div class="most-wanted-slider__item">
                            <div class="girl-image" style="background-image: url(photo/82db0c2c079e2f8f56a2.png)"></div>
                        </div>
                    </div>
                    <div class="most-wanted__name">
                        <p>Sveta</p>
                    </div>
                    <div class="most-wanted__description">
                        <p><?=Yii::t('app', 'This design is fucking brilliant. Fuck. Can we all just agree as the greater design community to stop fucking talking about Comic Sans altogether? It’s getting fucking old. A good fucking composition is the result of a hierarchy consisting of clearly contrasting elements set with distinct alignments containing irregular intervals of negative space. Paul Rand once said, “The public is more familiar with bad fucking design than good design.');?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-md-0">
                <div class="posts-container">
                    <h3 class="page-name"><?=Yii::t('app', 'EROTIC STORIES');?></h3>
                    
                    <div class="post-lists-wrapper stories-list-js">

                        <div class="posts-list">
                            <div class="post-item clearfix">
                            <div class="image">
                                <a href="/stories/story?id=2&amp;name=Wow+man+thats+nice">
                                <img src="/stori/8078dac3dd07fc5d7f9c.png" width="200px" hight="200px" alt="Girl photo">
                                </a>
                            </div>
                            <div class="post-info-container">
                                <h2 class="title">
                                    <a href="/stories/story?id=2&amp;name=Wow+man+thats+nice"><?=Yii::t('app', 'Wow man thats nice');?></a>
                                </h2>
                                <div class="center-block">
                                    <p><?=Yii::t('app', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget mi tincidunt, ultricies quam non, rutrum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat non justo at auctor. Nullam malesuada metus eu sollicitudin auctor. In a posuere neque, ac blandit risus. Curabitur at dictum ipsum. Mauris sagittis nisl eget orci tincidunt ornare. Sed facilisis nisl vel dui bibendum placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis e');?></p>
                                </div>
                            </div>
                            </div>
                            <div class="post-item clearfix">
                            <div class="image">
                                <a href="/story/3/Hehehe">
                                <img src="/stori/31f4870677169de72b00.png" width="200px" hight="200px" alt="Girl photo">
                                </a>
                            </div>
                            <div class="post-info-container">
                                <h2 class="title">
                                    <a href="/story/3/Hehehe"><?=Yii::t('app', 'Hehehe');?></a>
                                </h2>
                                <div class="center-block">
                                    <p><?=Yii::t('app', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget mi tincidunt, ultricies quam non, rutrum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat non justo at auctor. Nullam malesuada metus eu sollicitudin auctor. In a posuere neque, ac blandit risus. Curabitur at dictum ipsum. Mauris sagittis nisl eget orci tincidunt ornare. Sed facilisis nisl vel dui bibendum placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis e');?></p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="posts-list">
                            <div class="post-item clearfix">
                            <div class="image">
                                <a href="/stories/story?id=2&amp;name=Wow+man+thats+nice">
                                <img src="/stori/8078dac3dd07fc5d7f9c.png" width="200px" hight="200px" alt="Girl photo">
                                </a>
                            </div>
                            <div class="post-info-container">
                                <h2 class="title">
                                    <a href="/stories/story?id=2&amp;name=Wow+man+thats+nice"><?=Yii::t('app', 'Wow man thats nice');?></a>
                                </h2>
                                <div class="center-block">
                                    <p><?=Yii::t('app', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget mi tincidunt, ultricies quam non, rutrum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat non justo at auctor. Nullam malesuada metus eu sollicitudin auctor. In a posuere neque, ac blandit risus. Curabitur at dictum ipsum. Mauris sagittis nisl eget orci tincidunt ornare. Sed facilisis nisl vel dui bibendum placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis e');?></p>
                                </div>
                            </div>
                            </div>
                            <div class="post-item clearfix">
                            <div class="image">
                                <a href="/story/3/Hehehe">
                                <img src="/stori/31f4870677169de72b00.png" width="200px" hight="200px" alt="Girl photo">
                                </a>
                            </div>
                            <div class="post-info-container">
                                <h2 class="title">
                                    <a href="/story/3/Hehehe"><?=Yii::t('app', 'Hehehe');?></a>
                                </h2>
                                <div class="center-block">
                                    <p><?=Yii::t('app', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget mi tincidunt, ultricies quam non, rutrum orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi feugiat non justo at auctor. Nullam malesuada metus eu sollicitudin auctor. In a posuere neque, ac blandit risus. Curabitur at dictum ipsum. Mauris sagittis nisl eget orci tincidunt ornare. Sed facilisis nisl vel dui bibendum placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis e');?></p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-xl-3 col-xl-6 px-to-md-0">
            <?=\frontend\components\CommentsList::widget();?>
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
