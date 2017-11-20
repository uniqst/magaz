<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'homeUrl' => '/',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'db' => [
            'attributes' => [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));",
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
//        'i18n' => [
//            'class'=> Zelenin\yii\modules\I18n\components\I18N::className(),
//            'languages' => ['ru-RU', 'de-DE', 'it-IT'],
//            'translations' => [
//                'yii' => [
//                    'class' => yii\i18n\DbMessageSource::className()
//                ]
//            ]
//        ],

        'urlManager' => [
            'class' => 'pheme\i18n\I18nUrlManager',
//            'displaySourceLanguage' => true,
            'languageParam' => 'lang',
            'languages' => ['en', 'tr'],
            'aliases' => [],
            // 'aliases' => ['en' => 'en-US', 'sr' => 'sr-Latn'],
            // The keys will become labels on the language switcher widget
            // 'languages' => ['English' => 'en', 'Ελληνικά' => 'gr']
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'girl/<id:\d+>/<name:\w+>' => 'girls/girl',
                'story/<id:\d+>/<name:\w+>' => 'stories/story'
            ],
        ],
    ],
    'params' => $params,
];
