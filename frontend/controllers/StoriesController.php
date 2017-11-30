<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use frontend\models\Stories;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Pages;


/**
 * Site controller
 */
class StoriesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $pages = Pages::find()->where(['page' => 'Stories'])->all();  
        $model = Stories::find()->all(); 
        return $this->render('index', compact('model', 'pages'));
    }

    public function actionStory($id)
    {
        $pages = Pages::find()->where(['page' => 'Stories'])->all();  
        $model = Stories::find()->where(['id' => $id])->one(); 
        return $this->render('story', compact('model', 'pages'));
    }

}
