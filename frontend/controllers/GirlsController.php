<?php
namespace frontend\controllers;

use Yii;
use yii\db\ActiveQuery;
use yii\db\Expression;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\Profile;
use frontend\models\Contacts;
use frontend\models\Price;
use frontend\models\Pages;
use frontend\models\Service;
use frontend\models\FiltersValue;
use frontend\models\Category;
use frontend\models\Attendance;

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
        $model = Profile::find()->orderBy(['id' => SORT_DESC])->with('image');
        $pages = Pages::find()->where(['page' => 'All Girls'])->all();  
        return $this->render('index', compact('model', 'pages'));
    }
    public function actionGirl($id)
    {
        $contact = Contacts::find()->one();
        $service = Service::find()->all();
        $price_usd = Price::find()->where(['currency' => 0])->all();
        $price_eur = Price::find()->where(['currency' => 1])->all();
        $price_try = Price::find()->where(['currency' => 2])->all();
        $model = Profile::find()->where(['id' => $id, 'status' => 1])
            ->with('photo', 'value.category', 'attVal.att')->one();
        return $this->render('girl', compact('model', 'service', 'price_usd', 'price_eur', 'price_try', 'contact'));
    }
    public function actionFilters()
    {
        $pages = Pages::find()->where(['page' => 'All Girls'])->all();  
        $model = Profile::find()->where(['status' => 1])->orderBy(['id' => SORT_DESC])->joinWith(['value.category' => function(yii\db\ActiveQuery $query){
            $query->andFilterWhere(['category.id' => $_GET['value']]);
        }])->joinWith(['attVal.att' => function(yii\db\ActiveQuery $query){
            $query->andFilterWhere(['attendance.id' => $_GET['service']]);
        }])->distinct();
        $filters = Category::find()->joinWith(['category as cat' => function(yii\db\ActiveQuery $query){
            $query->andWhere(['cat.id' => Yii::$app->request->get('value')]);
        }])->all();
        $services = Attendance::find()->where(['id' => Yii::$app->request->get('service')])->all();
    
        return $this->render('filters', compact('model', 'filters', 'services', 'pages'));
    }

}
