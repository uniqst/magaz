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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid h-100">
        <div class="row no-margin h-100">

            <div class="col-2 collapse d-md-flex sidebar-bg pt-2 h-100" id="sidebar">

                <ul class="nav flex-column flex-nowrap" style="width: 100%">

                    <li class="nav-item">

                        <a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">
                            Reports
                            <span class="float-right">
                                |
                            </span>
                        </a>

                        <div class="collapse" id="submenu1">

                            <ul class="flex-column pl-2 nav">

                                <li class="nav-item">

                                    <a class="nav-link collapsed py-0" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1">
                                        Customers <span>|</span>
                                    </a>

                                    <div class="collapse small" id="submenu1sub1" aria-expanded="false">

                                        <ul class="flex-column nav pl-4">
                                            <li class="nav-item">
                                                <a class="nav-link p-0" href="">
                                                    - Daily
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link p-0" href="">
                                                    - Dashboard
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link p-0" href="">
                                                    - Charts
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link p-0" href="">
                                                   - Areas
                                                </a>
                                            </li>
                                        </ul>

                                    </div><!--collapse submenu-->

                                </li><!-- 2 level collapse-->

                            </ul>

                        </div><!--collapse-->

                    </li><!-- 1 level collapse-->
                    
                </ul>

            </div><!--sidebar-->

            <div class="col pt-2"><!--site content-->
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div><!--site content-->

        </div><!--row-->
    </div><!--container-fluid-->
</div><!--wrap-->

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
