<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500',
//        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css',
        'css/bootstrap.min.css',
        // 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css',
        // 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css',
        // 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.5/css/lightgallery.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css',
        'css/font-awesome.min.css',
        // 'css/bootstrap4.css',
        'css/site.css',
        'css/styles.css',
    ];
    public $js = [
        // 'http://code.jquery.com/jquery-1.9.1.min.js',
        'https://code.jquery.com/jquery-3.2.1.min.js',
        // 'js/libs/jquery.waterwheelCarousel.min.js',
        'js/libs/jquery.waterwheelCarousel.min.js',
        'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.5/js/lightgallery-all.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js',
        'js/home-page.js',
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',

    ];
}

