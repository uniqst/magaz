<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>

    <div class="row">
        <div class="offset-xl-2 col-xl-8 main-slider-container">

            <h3 class="subheading-main">New Girls</h3>

            <div class="new-girls-slider">
                <div class="slick-carousel">
                    <?php foreach($model as $image):?>
                    <div class="slider-item">
                        <div class="girl-card" style="background-image: url(photo/<?= $image->image->src?>)">
                            <a class="girl-card__name" href="<?=Url::to(['/girls/girl', 'id' => $image->id, 'name' => $image->name])?>"><?= $image->name?></a>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="offset-xl-2 col-xl-8 last-response">
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
    <div class="row dir-tree-links">
        <div class="offset-xl-2 col-xl-8">
            <a href="#">Home</a>
            <span> > </span>
            <a href="#">Catalog</a>
            <span> > </span>
            <a href="#">English</a>
        </div>
    </div>
    
    <div class="row">
        <div class="offset-md-2 col-8">
            <h1 class="heading-main">
                Bursa platinum girls. High class escorts. Pleasure without limits
            </h1>
        </div>
    </div>

    <div class="row no-gutters">
        <div class="col-2 sidebar-main d-none d-lg-block">
            Sidebar main
        </div>
        <div class="col main-center-col">

            <div class="items-block">
                <div class="container">
                    <div class="row no-padding">
                        <?php foreach($model as $image):?>
                        <div class="col">
                            <div class="items-block__item" style=" background-image: url(photo/<?=$image->image->src?>)">
                                <div class="info-card" style="width: 100%;">
                                    <div class="wrapper">
                                        <div class="info-card__name">
                                            <a href="#"><?=$image->name?></a>
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
