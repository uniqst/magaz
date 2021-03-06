<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use frontend\models\Contacts;
use frontend\models\Pages;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * Site controller
 */
class ContactsController extends Controller
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
        $model = Contacts::find()->one();
        $contact = Contacts::findOne(1);
        if($_POST){
           
            $message = Yii::$app->mailer->compose()
            ->setFrom($_POST['email'])
            ->setTo($contact->email_message)
            ->setSubject('Reviews')
            ->setTextBody('
                name: '.$_POST['Comments']['name'].'
                content: '.$_POST['Comments']['content'].'
    
                ');
        $message->send();
            Yii::$app->getSession()->setFlash('send', 'Send message');
        }
        $pages = Pages::find()->where(['page' => 'Contacts'])->all();  
        return $this->render('index', compact('model', 'pages'));
    }

}
