<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\UploadedFile;
use frontend\models\Profile;
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

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $photo->imageFiles = UploadedFile::getInstances($photo, 'imageFiles');
                foreach ($photo->imageFiles as $file) {
                    $str = substr(md5(microtime() . rand(0, 9999)), 0, 20);
                    $file->saveAs('photo/' . $str . '.' . $file->extension);
                    $image = new Photo();
                    $image->profile_id = $model->id;
                    $image->src = $str . '.' . $file->extension;
                    $image->save();
                }
        }
        return $this->render('index', compact('model', 'photo'));
    }

}
