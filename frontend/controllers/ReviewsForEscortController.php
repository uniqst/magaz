<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Pages;
use frontend\models\Comments;



/**
 * Site controller
 */
class ReviewsForEscortController extends Controller
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
        if($_POST){
            Yii::$app->getSession()->setFlash('send', 'Send message');
        }
        
        

        $pages = Pages::find()->where(['page' => 'Reviews'])->all();
        $model = Comments::find()->where(['status' => 1])->orderBy(['date' => SORT_DESC])->limit(30)->all();
        $model1 = array_slice($model, 0, 15);
        $model2 = array_slice($model, 16, 30); 
        return $this->render('index', compact('pages', 'model1', 'model2'));
    }

}
