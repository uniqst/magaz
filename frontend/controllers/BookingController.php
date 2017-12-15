<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Pages;
use frontend\models\Contacts;


/**
 * Site controller
 */
class BookingController extends Controller
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
        $contact = Contacts::findOne(1);
        $pages = Pages::find()->where(['page' => 'Booking'])->all();
        if($_POST){
        $message = Yii::$app->mailer->compose()
        ->setFrom($_POST['email'])
        ->setTo($contact->email_message)
        ->setSubject('City Ankara - Booking')
        ->setTextBody('
            name: '.$_POST['name'].'
            email: '.$_POST['email'].'
            phone: '.$_POST['phone'].'
            escort name: '.$_POST['escort_name'].'
            are you 18: '.$_POST['adult'].'
            wishes: '.$_POST['wishes'].'

            ');
    $message->send();
    Yii::$app->getSession()->setFlash('send_booking', 'Send message');
}
        return $this->render('index', compact('pages'));
    }

}
