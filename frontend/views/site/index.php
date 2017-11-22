<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>

    <div class="row main-page-upper-box">
        <div class="offset-xl-2 col-xl-8 px-to-md-0">
            <div class="main-slider-container">
                <h3 class="subheading-main">New Girls</h3>
                <div class="new-girls-slider">
                    <div class="slick-carousel">
                        <?php foreach($model as $image):?>
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
                <h3 class="subheading-main">Customer response</h3>
                <div class="iconblock">
                    <a href="#" class="pencil"></a>
                    <a href="#" class="msgbox"></a>
                </div>
                <blockquote class="response">
                    <p class="response__quote">Vis primis omnium hendrerit no, ei sumo clita salutatus est. Cu nisl falli ocurreret pri, ne duo aeque accusam salutandi. Vim ex commune definitiones, duo vero audiam alterum cu, has id graeci viderer malorum. Sed epicuri maluisset omittantur in, ornatus fierent dolores mel an. Integre platonem posidonium an his, in duo dicta labores facilisi, ceteros intellegebat vis te.</p>
                    <div class="response__author">
                        <cite>Mr. Customuer</cite>
                    </div>
                </blockquote>
            </div>
        </div>
    </div>
    <div class="row dir-tree-links">
        <div class="offset-xl-3 col-xl-6">
            <a href="#">Home</a>
            <span> > </span>
            <a href="#">Catalog</a>
            <span> > </span>
            <a href="#">English</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 offset-lg-3 col-lg-6">
            <h1 class="heading-main">
                Bursa platinum girls. High class escorts. Pleasure without limits
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
                                        <div class="info-card" style="width: 100%;">
                                            <div class="wrapper">
                                                <div class="info-card__name">
                                                    <a href="#">
                                                        <?=$image->name?>
                                                        <i class="add-button fa fa-plus"></i>
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
                    Customer reviews
                </div>
                <div class="iconblock">
                    <a href="#" class="pencil"></a>
                    <a href="#" class="msgbox"></a>
                </div>
                <div class="resoponse-list">

                    <blockquote class="response">
                        <p class="response__quote">Vis primis omnium hendrerit no, ei sumo clita salutatus est. Cu nisl falli ocurreret pri, ne duo aeque accusam salutandi. Vim ex commune definitiones, duo vero audiam alterum cu, has id graeci viderer malorum. Sed epicuri maluisset omittantur in, ornatus fierent dolores mel an. Integre platonem posidonium an his, in duo dicta labores facilisi, ceteros intellegebat vis te.</p>
                        <div class="response__author">
                            <cite>Mr. Customuer</cite>
                            |
                            <time>10.04.17 14:11</time>
                        </div>
                    </blockquote>
                    <blockquote class="response">
                        <p class="response__quote">Vis primis omnium hendrerit no, ei sumo clita salutatus est. Cu nisl falli ocurreret pri, ne duo aeque accusam salutandi. Vim ex commune definitiones, duo vero audiam alterum cu, has id graeci viderer malorum. Sed epicuri maluisset omittantur in, ornatus fierent dolores mel an. Integre platonem posidonium an his, in duo dicta labores facilisi, ceteros intellegebat vis te.</p>
                        <div class="response__author">
                            <cite>Mr. Customuer</cite>
                            |
                            <time>10.04.17 14:11</time>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="offset-xl-3 col-xl-6">
            <div class="mp-text-block">
                <h3 class="mp-text-block__heading">
                    Escort in Ankara, Turkey. Housewife, Escort agency «All Ankara Escort»
                </h3>
                <div class="mp-text-block__text">
                    <p>
                        Escort agency «All Ankara Escort» has been operating successfully for more than five years. We work with only the best girls from different countries, mainly in the most beautiful girls from Russia and Ukraine. Customers who have used our escort service at least once, will melt our regular customers. Therefore, we value our reputation.
                    </p>
                    <p>
                        If you live in Turkey and came to Ankara on business, to visit or just relax, then you definitely need to meet with one of our girls. It will help you to relax and spend time pleasantly, help relieve stress and make you forget about everything that bothers you. You can start a new day with full force. Our girls are always cheerful and sexy, always ready to give you pleasure. They can be gentle and tender, can be rude, all depends entirely on you and your desires. The most important thing is that our girls are very fond of their work, and this is very important! Everyone has long known that the most beautiful girls are in Ukraine and Russia. 
                    </p>
                </div>
            </div>
        </div>
        <div class="offset-lg-1 col-lg-10 offset-xl-2 col-xl-8">
            <div class="advertise-block">
                <div class="advertise-block__list">
                    <div class="advertise__item">
                        <a href="">
                            <img src="http://via.placeholder.com/600x230" alt="Add">
                        </a>
                    </div>
                    <div class="advertise__item">
                        <a href="">
                            <img src="http://via.placeholder.com/600x230" alt="Add">
                        </a>
                    </div>
                    <div class="advertise__item">
                        <a href="">
                            <img src="http://via.placeholder.com/600x230" alt="Add">
                        </a>
                    </div>
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
