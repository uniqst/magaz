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
use frontend\models\Contacts;
use frontend\models\Price;
use frontend\models\Pages;
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
        $pages = Pages::find()->where(['page' => 'All Girls'])->all();  
        return $this->render('index', compact('model', 'pages'));
    }
    public function actionGirl($id)
    {
        $pages = Pages::find()->where(['page' => 'Girl'])->all();
        $contact = Contacts::find()->one();
        $service = Service::find()->all();
        $price_usd = Price::find()->where(['currency' => 0])->all();
        $price_eur = Price::find()->where(['currency' => 1])->all();
        $price_try = Price::find()->where(['currency' => 2])->all();
        $model = Profile::find()->where(['id' => $id])->with('photo', 'value.category')->one();

        return $this->render('girl', compact('model', 'service', 'price_usd', 'price_eur', 'price_try', 'contact', 'pages'));
    }
    public function actionFilters()
    {
        $model = Profile::find()->joinWith(['value.category' => function(yii\db\ActiveQuery $query){
            $query->andFilterWhere(['category.id' => $_GET['value']]);
        }])->distinct();


        return $this->render('filters', compact('model'));
    }

}
