<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'language' => 'ru-RU', // <- здесь!
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
//            'viewPath' => '@frontend/mail',
        ],
        'i18n' => [
            'class' => Zelenin\yii\modules\I18n\components\I18N::className(),
            'languages' => ['en', 'tr']
        ],
    ],
];
