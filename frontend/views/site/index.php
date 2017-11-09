<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col main-slider-container">

            <h3 class="subheading-main">New Girls</h3>

            <div class="new-girls-slider">
                <div class="slick-carousel">
                    <?php foreach($model as $image):?>
                    <div class="slider-item">
                        <div class="girl-card" style="background-image: url('photo/<?= $image->image->src?>')">
                            <a class="girl-card__name" href="#"><?= $image->name?></a>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col last-response">
            <h3 class="subheading-main">Customer response</h3>
            <div class="iconblock">
                <a href="#" class="pencil"></a>
                <a href="#" class="msgbox"></a>
            </div>
            <blckquote class="response">
                <p class="response__quote">Vis primis omnium hendrerit no, ei sumo clita salutatus est. Cu nisl falli ocurreret pri, ne duo aeque accusam salutandi. Vim ex commune definitiones, duo vero audiam alterum cu, has id graeci viderer malorum. Sed epicuri maluisset omittantur in, ornatus fierent dolores mel an. Integre platonem posidonium an his, in duo dicta labores facilisi, ceteros intellegebat vis te.</p>
                <div class="response__author">
                    <cite>Mr. Customuer</cite>
                </div>
            </blockquote>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-2 sidebar-main d-none d-lg-block">
            Sidebar main
        </div>
        <div class="col main-center-col">
            <div class="links-tree">
                <a href="#">Home</a>
                <a href="#">Catalog</a>
                <a href="#">English</a>
            </div>

            <h1 class="heading-main">
                Bursa platinum girls. High class escorts. Pleasure without limits
            </h1>
            <div class="items-block">
                <div class="container">
                    <div class="row no-padding">

                        <div class="col">
                            <div class="items-block__item" style="background-image: url(/img/girl-cards/girl-card-2.jpg)">
                                <div class="info-card">
                                    <div class="wrapper">
                                        <div class="info-card__name">
                                            <a href="#">Valerry</a>
                                        </div>
                                        <div class="info-card__about">
                                            <span class="age">Age 22</span>
                                            <span class="nationality">Ukrainian</span>
                                        </div>
                                        <p class="info-card__more-info">
                                            Id hinc dicam splendide pri, te mel mazim omnes voluptua, eos id eius eligendi consequuntur.  In decore dolore liberavisse pro, eum diam cibo gloriatur te.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="items-block__item" style="background-image: url(/img/girl-cards/girl-card-2.jpg)">
                                <div class="info-card">
                                    <div class="wrapper">
                                        <div class="info-card__name">
                                            <a href="#">Valerry</a>
                                        </div>
                                        <div class="info-card__about">
                                            <span class="age">Age 22</span>
                                            <span class="nationality">Ukrainian</span>
                                        </div>
                                        <p class="info-card__more-info">
                                            Id hinc dicam splendide pri, te mel mazim omnes voluptua, eos id eius eligendi consequuntur.  In decore dolore liberavisse pro, eum diam cibo gloriatur te.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col d-none d-lg-block">
                            <div class="items-block__item" style="background-image: url(/img/girl-cards/girl-card-2.jpg)">
                                <div class="info-card">
                                    <div class="wrapper">
                                        <div class="info-card__name">
                                            <a href="#">Valerry</a>
                                        </div>
                                        <div class="info-card__about">
                                            <span class="age">Age 22</span>
                                            <span class="nationality">Ukrainian</span>
                                        </div>
                                        <p class="info-card__more-info">
                                            Id hinc dicam splendide pri, te mel mazim omnes voluptua, eos id eius eligendi consequuntur.  In decore dolore liberavisse pro, eum diam cibo gloriatur te.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col d-none d-xl-block">
                            <div class="items-block__item" style="background-image: url(/img/girl-cards/girl-card-2.jpg)">
                                <div class="info-card">
                                    <div class="wrapper">
                                        <div class="info-card__name">
                                            <a href="#">Valerry</a>
                                        </div>
                                        <div class="info-card__about">
                                            <span class="age">Age 22</span>
                                            <span class="nationality">Ukrainian</span>
                                        </div>
                                        <p class="info-card__more-info">
                                            Id hinc dicam splendide pri, te mel mazim omnes voluptua, eos id eius eligendi consequuntur.  In decore dolore liberavisse pro, eum diam cibo gloriatur te.
                                        </p>
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


</div>
