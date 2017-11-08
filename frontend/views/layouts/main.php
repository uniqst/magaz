<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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

    <nav class="navbar navbar-expand-lg navbar-bg-top">

        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">123</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav navbar-main">

                <li class="nav-item active">
                    <a class="nav-link" href="#">home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">all girls</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">how to make an order</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">servises</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">booking</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">erotic stories</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">casting</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">riveiws</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">contacts</a>
                </li>

            </ul>

        </div>

        <div class="contacts-nav">

            <h2 class="phone-navbar">
                <span>+</span>
                90 539 460 85 63
            </h2>

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        call
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        sms
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        viber
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        whatsupp
                    </a>
                </li>

            </ul>

        </div>

    </nav>
    <div class="navbar-bottom navbar-bg-bottom ml-auto"></div>


    <div class="container-fluid h-100 site-wrapper" style="min-height: 75vh">

            <div ><!--site content-->
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div><!--site content-->

    </div>

</div><!--wrap-->


<footer class="footer">
    <div class="footer-top-line"></div>

    <div class="container">

        <p class="text-center">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi consequatur culpa esse est illum, ipsam neque praesentium. Adipisci atque autem consequuntur iste nulla possimus quae quis reprehenderit similique vitae, voluptatum.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur corporis dicta, distinctio dolor ducimus facere, harum ipsum laboriosam maxime, modi odio pariatur quae quo repellat similique voluptas voluptate. Aspernatur!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad asperiores commodi distinctio dolorem doloremque ducimus illum minima nulla repudiandae. Architecto aut eaque necessitatibus officiis, reiciendis voluptate. Expedita, iusto, perspiciatis.
        </p>

    </div>

</footer>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
