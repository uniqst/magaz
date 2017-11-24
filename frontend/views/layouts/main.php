<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <nav class="navbar navbar-expand-lg main-header">



        <a class="navbar-brand main-header__logo" href="/">
            <div class="logo-image">
                <!-- <div class="logo-image__lips">
                </div> -->
            </div>
        </a>

        <button 
            class="navbar-toggler"
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse main-header__nav" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-main justify-content-center">
                <li class="nav-item <?=Yii::$app->controller->id == 'site' ? 'active' : ''?>">
                    <a class="nav-link" href="<?=Url::to(['/'])?>"><?=Yii::t('app','home');?></a>
                </li>
                <li class="nav-item <?=Yii::$app->controller->id == 'girls' ? 'active' : ''?>">
                    <a class="nav-link" href="<?=Url::to(['/girls'])?>"><?=Yii::t('app', 'all girls');?></a>
                </li>
                <li class="nav-item <?=Yii::$app->controller->id == 'how-make-order' ? 'active' : ''?>">
                    <a class="nav-link" href="<?=Url::to(['/how-make-order'])?>"><?=Yii::t('app', 'how to make an order');?></a>
                </li>
                <li class="nav-item <?=Yii::$app->controller->id == 'services' ? 'active' : ''?>">
                    <a class="nav-link" href="<?=Url::to(['/services'])?>"><?=Yii::t('app', 'servises');?></a>
                </li>
                <li class="nav-item <?=Yii::$app->controller->id == 'booking' ? 'active' : ''?>">
                    <a class="nav-link" href="<?=Url::to(['/booking'])?>"><?=Yii::t('app', 'booking');?></a>
                </li>
                <li class="nav-item <?=Yii::$app->controller->id == 'stories' ? 'active' : ''?>">
                    <a class="nav-link" href="<?=Url::to(['/stories'])?>"><?=Yii::t('app', 'erotic stories');?></a>
                </li>
                <li class="nav-item <?=Yii::$app->controller->id == 'casting' ? 'active' : ''?>">
                    <a class="nav-link" href="<?=Url::to(['/casting'])?>"><?=Yii::t('app', 'casting');?></a>
                </li>
                <li class="nav-item <?=Yii::$app->controller->id == 'reviews-for-escrort' ? 'active' : ''?>">
                    <a class="nav-link" href="<?=Url::to(['/reviews-for-escort'])?>"><?=Yii::t('app', 'riveiws');?></a>
                </li>
                <li class="nav-item <?=Yii::$app->controller->id == 'contacts' ? 'active' : ''?>">
                    <a class="nav-link" href="<?=Url::to(['/contacts'])?>"><?=Yii::t('app', 'contacts');?></a>
                </li>
            </ul>
            <div class="main-header__multiling">
                <div class="lang-wrapper">
                    <a href="<?=Url::to(['/', 'lang' => '']);?>">
                        <button class="lang active" id="lang-en" data-lant="en">En</button>
                    </a>
                </div>
                <div class="lang-wrapper">
                    <a href="<?=Url::to(['/', 'lang' => 'tr']);?>">
                        <button class="lang" id="lang-tr" data-lant="tr">Tr</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="main-header__contacts d-none d-xl-block">

            <h2 class="phone-number">
                <span>+</span>
                90 539 460 85 63
            </h2>

            <ul class="phone-links">
                <li class="nav-item">
                    <a href="#">
                        <?=Yii::t('app', 'call');?>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <?=Yii::t('app', 'sms');?>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="#">
                        <?=Yii::t('app', 'viber');?>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="#">
                        <?=Yii::t('app', 'whatsupp');?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="navbar-bottom navbar-bg-bottom ml-auto main-header__bottom-line">
        <div class="main-header__contacts d-xl-none">

            <div class="phone-icon d-md-none">
                <i class="fa fa-phone"></i>
            </div>

            <h2 class="phone-number">
                <span>+</span>
                90 539 460 85 63
            </h2>

            <ul class="phone-links">
                <li class="nav-item">
                    <a href="#">
                        <?=Yii::t('app', 'call');?>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <?=Yii::t('app', 'sms');?>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="#">
                        <?=Yii::t('app', 'viber');?>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="#">
                        <?=Yii::t('app', 'whatsupp');?>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main-header__social">
            <ul class="social-list list-unstyled">
                <li><a href="#" class="social-link"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="social-link"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="social-link"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="container-fluid h-100 site-wrapper main-wrapper" style="min-height: 75vh">
        <div class="left-menu-button d-xl-none">
            <div class="left-menu-button__wrapper">
                <button>
                </button>
            </div>
        </div>

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>

    </div>
</div>

<div class="main-footer__top-line"></div>

<footer class="main-footer container-fluid">
    <div class="row">
        <div class="d-none d-xl-block col-xl-2">
            <div class="main-footer__logo">
                <div class="logo-image">
                    <div class="logo-image__lips">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="main-footer-wrapper">
    <div class="main-footer__brand-name">
        <p>
            <?=Yii::t('app', 'All Ankara Escort');?>
        </p>
    </div>
    <ul class="main-footer__nav nav justify-content-center navbar-main">

        <li class="nav-item active">
            <a class="nav-link" href="/"><?=Yii::t('app', 'home');?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=Url::to(['/girls'])?>"><?=Yii::t('app', 'all girls');?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=Url::to(['/how-make-order'])?>"><?=Yii::t('app', 'how to make an order');?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=Url::to(['/services'])?>"><?=Yii::t('app', 'servises');?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=Url::to(['/booking'])?>"><?=Yii::t('app', 'booking');?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=Url::to(['/stories'])?>"><?=Yii::t('app', 'erotic stories');?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=Url::to(['/casting'])?>"><?=Yii::t('app', 'casting');?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=Url::to(['/reviews-for-escort'])?>"><?=Yii::t('app', 'riveiws');?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=Url::to(['/contacts'])?>"><?=Yii::t('app', 'contacts');?></a>
        </li>

    </ul>
    <div class="main-footer__info">
        <p>
            <?=Yii::t('app', "All Ankara Escort organize the best love place on Earth. With us, you will feel as a king of seas, lands, aid skies - that big high you'll get from our pussycats. Here come people wanting to get fun with 1) exceptional beauties hard to find anywhere else in Italy, 2) Russian and Ukrainian girls of exclusive skills, and 3) girls, ready for everything for the exciting pleasure without boundaries.");?>
        </p>
        <p>
            <?=Yii::t('app', "What is more - these three are united in every our girl! Have a great time with allescortinankara.com.");?>
        </p>
    </div>
    <div class="main-footer__copy">
        <?=Yii::t('app', 'Copyright &copy; 2017 AllAnkaraEscort');?>
    </div>
            </div>
        </div>
        <div class="d-none d-xl-flex justify-content-center col-xl-2">
            <div class="main-footer__to-top">
                <button class="to-top-button" type="button"></button>
            </div>
        </div>
    </div>
    <!-- <div class="footer-top-line"></div>
    <div class="container-fluid">
            
    </div> -->
</footer>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
