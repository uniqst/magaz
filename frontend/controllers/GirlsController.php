<?php
namespace frontend\controllers;

use Yii;
use yii\db\Expression;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Profile;

/**
 * Site controller
 */
class GirlsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

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


    public function actionIndex()
    {
        $model = Profile::find()->with('image')->all();
        return $this->render('index', compact('model'));
    }
    public function actionGirl()
    {
        return $this->render('girl');
    }
    public function actionFilters()
    {
//        $model = Profile::find()->joinWith(['value' => function(yii\db\ActiveQuery $query){
//            $query->andFilterWhere(['value' => [2, 'WQEE']]);
//        }])->all();
//            echo "<pre>";
//            print_r($model);
//            echo "</pre>";
        print_r($_GET);
        die();
        return $this->render('filters');
    }
    public function actionTest(){
        print_r($_GET);
    }

}
