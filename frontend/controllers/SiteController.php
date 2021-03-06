<?php
namespace frontend\controllers;

use Yii;
use yii\db\Expression;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\Category;
use frontend\models\Profile;
use frontend\models\Comments;
use frontend\models\Pages;
use frontend\models\Advertising;
use frontend\models\Sitemap;

/**
 * Site controller
 */
class SiteController extends Controller
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
                    'logout' => ['post', 'get'],
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
        Yii::$app->controller->view->registerMetaTag(['property'=>'og:title', 'content'=>"Ankara escort"], 'og:title');
        Yii::$app->controller->view->registerMetaTag(['property'=>'og:site_name', 'content'=>"allescortsankara"], 'og:site_name');
        Yii::$app->controller->view->registerMetaTag(['property'=>'og:url', 'content'=>"https://www.allescortsankara.com"], 'og:url');
        Yii::$app->controller->view->registerMetaTag(['property'=>'og:image', 'content'=>"https://allescortsankara.com/img/logo.png"], 'og:image');
        Yii::$app->controller->view->registerMetaTag(['property'=>'og:type', 'content'=>"website"], 'og:type');
        
        $pages = Pages::find()->where(['page' => 'Home'])->all();
        $model = Profile::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC])->with('image')->all();
        $model2 = Profile::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC])->with('image');
        $slider = array_slice($model, 0, 10);
        $comment = Comments::find()->where(['status' => 1])->orderBy(['date' => SORT_DESC])->one();
        $comments = Comments::find()->where(['status' => 1])->orderBy(['date' => SORT_DESC])->limit(10)->all();
        $advertising = Advertising::find()->all();
        return $this->render('index', compact('model', 'model2', 'slider', 'comment', 'comments', 'advertising', 'pages'));
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }


    public function actionSitemap(){
    //Карта сайта. Выводит в виде XML файла.
    $sitemap = new Sitemap();
    // Если в кэше нет карты сайта        
    if (!$xml_sitemap = Yii::$app->cache->get('sitemaps')) {
        //Получаем мыссив всех ссылок
        $urls = $sitemap->getUrl();
        //Формируем XML файл
        $xml_sitemap = $sitemap->getXml($urls);
        // кэшируем результат
        // Yii::$app->cache->set('sitemap', $xml_sitemap, 3*1); 
    } 
    // Выводим карту сайта
    $sitemap->showXml($xml_sitemap);
}
}
