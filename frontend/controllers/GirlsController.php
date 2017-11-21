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
use frontend\models\Service;
use frontend\models\FiltersValue;

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
        $model = Profile::find()->with('image');
        return $this->render('index', compact('model'));
    }
    public function actionGirl($id)
    {
        $service = Service::find()->all();
        $model = Profile::find()->where(['id' => $id])->with('photo')->one();
        return $this->render('girl', compact('model', 'service'));
    }
    public function actionFilters()
    {
        $model = Profile::find()->joinWith(['value.category' => function(yii\db\ActiveQuery $query){
            $query->andFilterWhere(['category.id' => $_GET['value']]);
        }])->distinct();
//        $models = Profile::find()->with('value.category')->all();
//        echo "<pre>";
//        print_r($models);
//        echo "</pre>";

        return $this->render('filters', compact('model'));
    }

}
