<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Verification;


/**
 * Site controller
 */

class VerificationController extends Controller
{

    /**
     * @inheritdoc
     */

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
        $this->layout = false;
        $model = Verification::find()->one(); 
        $session = Yii::$app->session;
        if ($_GET['verification'] == 1){
            $session['verification'] = 1;
            return $this->redirect([$model->enter]);
        }
  

        return $this->render('index', compact('model'));
    }

}