<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>

    <div class="row main-page-upper-box">
        <div class="offset-xl-2 col-xl-8">
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
        <div class="offset-xl-2 col-xl-8 ">
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
        <div class="offset-xl-3 col-xl-6">
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
                <div class="mp-text-block__text">
                    <p>
                        Her kiz bir bakig ile adami nasil buyulemeyi biliyor: sadece mukemmel kizin gozune bakin ve bu randevu ile sizi baglaycak ozel manyetizmayi hissedeceksiniz. Hizmetlerimizi sizin igin mumkun oldugunca rahat yapmaya galigtik, sadece katologumuzu bakin, kizi segin, biz de kalan her gey ile ilgilenegiz. inanin - bu randevu hafizamzda en heyecanli macera gibi kalacak.
                    </p>
                    <p>
                        §ehrimizi ig ya da zevk igin ziyaret edersiniz olsun, her halde biz er guzel kizlarla en iyi randevulari size teklif etmekter memnun olacagiz. igleri dijgunmeden zor ig gijnunden dinleyebirsiniz. Kiz ile ortak dil bulmak igin gok zaman harcamamz gerek yok, о kendisi her gey yapip randevunuzu unutulmaz yapacak. Randevu igin ideal bir kizi segin ve biz eminiz ki bize yineden donecksiniz.
                    </p>
                </div>
                <h3 class="mp-text-block__heading">
                    Eskort bursa kizlari bunlari siz sipari? ettikten sonra sizin igin her geyi yapacaklar
                </h3>
                <div class="mp-text-block__text">
                    <p>
                        Her kiz bir bakig ile adami nasil buyulemeyi biliyor: sadece mukemmel kizin gozune bakin ve bu randevu ile sizi baglaycak ozel manyetizmayi hissedeceksiniz. Hizmetlerimizi sizin igin mumkun oldugunca rahat yapmaya galigtik, sadece katologumuzu bakin, kizi segin, biz de kalan her gey ile ilgilenegiz. inanin - bu randevu hafizamzda en heyecanli macera gibi kalacak.
                    </p>
                    <p>
                        §ehrimizi ig ya da zevk igin ziyaret edersiniz olsun, her halde biz er guzel kizlarla en iyi randevulari size teklif etmekter memnun olacagiz. igleri dijgunmeden zor ig gijnunden dinleyebirsiniz. Kiz ile ortak dil bulmak igin gok zaman harcamamz gerek yok, о kendisi her gey yapip randevunuzu unutulmaz yapacak. Randevu igin ideal bir kizi segin ve biz eminiz ki bize yineden donecksiniz.
                    </p>
                </div>
                <h3 class="mp-text-block__heading">
                    Eskort bursa kizlari bunlari siz sipari? ettikten sonra sizin igin her geyi yapacaklar
                </h3>
                <div class="mp-text-block__text">
                    <p>
                        Her kiz bir bakig ile adami nasil buyulemeyi biliyor: sadece mukemmel kizin gozune bakin ve bu randevu ile sizi baglaycak ozel manyetizmayi hissedeceksiniz. Hizmetlerimizi sizin igin mumkun oldugunca rahat yapmaya galigtik, sadece katologumuzu bakin, kizi segin, biz de kalan her gey ile ilgilenegiz. inanin - bu randevu hafizamzda en heyecanli macera gibi kalacak.
                    </p>
                    <p>
                        §ehrimizi ig ya da zevk igin ziyaret edersiniz olsun, her halde biz er guzel kizlarla en iyi randevulari size teklif etmekter memnun olacagiz. igleri dijgunmeden zor ig gijnunden dinleyebirsiniz. Kiz ile ortak dil bulmak igin gok zaman harcamamz gerek yok, о kendisi her gey yapip randevunuzu unutulmaz yapacak. Randevu igin ideal bir kizi segin ve biz eminiz ki bize yineden donecksiniz.
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
