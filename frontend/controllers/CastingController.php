<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\UploadedFile;
use frontend\models\Profile;
use frontend\models\Pages;
use frontend\models\Contacts;
use frontend\models\Photo;
use frontend\models\UploadForm;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * Site controller
 */
class CastingController extends Controller
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
        $model = new Profile();
        $photo = new UploadForm();
        $contact = Contacts::findOne(1);
        $pages = Pages::find()->where(['page' => 'Casting'])->all();
        if ($model->load(Yii::$app->request->post())) {
            $photo->imageFiles = UploadedFile::getInstances($photo, 'imageFiles');
            $message = Yii::$app->mailer->compose()
                ->setFrom($_POST['Profile']['email'])
                ->setTo($contact->email_message)
                ->setSubject('City Ankara - Casting')
                ->setTextBody('
                    name: '.$_POST['Profile']['name'].'
                    email: '.$_POST['Profile']['email'].'
                    phone: '.$_POST['Profile']['phone'].'
                    nationality: '.$_POST['Profile']['nationality'].'
                    age: '.$_POST['Profile']['age'].'
                    height: '.$_POST['Profile']['height'].'
                    mesurements: '.$_POST['Profile']['mesurements'].'
                    weight: '.$_POST['Profile']['weight'].'
                    about_myself: '.$_POST['Profile']['about_myself'].'

                    ');

                foreach ($photo->imageFiles as $file) {
                    $str = substr(md5(microtime() . rand(0, 9999)), 0, 20);
                    $file->saveAs('photo/' . $str . '.' . $file->extension);
                    $message->attach('photo/' . $str . '.' . $file->extension);

                }
            $message->send();
            Yii::$app->getSession()->setFlash('send_casting', 'Send message');
        }
        return $this->render('index', compact('model', 'photo', 'contact', 'pages'));
    }

}
