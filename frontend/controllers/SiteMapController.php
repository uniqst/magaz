<?php
 
namespace frontend\controllers;
 

use yii\web\Controller;
use yii\db\Query;
use frontend\models\Category;
use frontend\models\FiltersValue;
use Yii;
 
class SitemapController extends Controller
{
 
    public function actionIndex()
    {
 
        if (!$xml_sitemap = Yii::$app->cache->get('sitemap')) {  // проверяем есть ли закэшированная версия sitemap
            $urls = array();
 
            // Выбираем категории сайта
            $categories = Category::find()->all();
            foreach ($categories as $category) {
                $urls[] = array(
                    Yii::$app->urlManager->createUrl(['/category/' . $category->id]) // создаем ссылки на выбранные категории
                , ''                                                           // вероятная частота изменения категории
                );
            }

            $posts = (new Query())
                ->select('b.alias, c.alias as c_alias')
                ->from('blog as b')
                ->leftJoin('blog_categories as c', 'b.catid = c.id')
                ->where('b.publish = 1 AND b.created <= NOW()')->all();
 
            foreach ($posts as $post) {
                $urls[] = array(
                    Yii::$app->urlManager->createUrl(['/blog/' . $post['c_alias'] . '/' . $post['alias']]) // строим ссылки на записи блога
                , 'weekly'
                );
            }

            
            $filters = FiltersValue::find()->all();
            foreach ($filters as $filter) {
                $urls[] = array(
                    Yii::$app->urlManager->createUrl(['/filters_value/' . $filter->id]) // создаем ссылки на выбранные категории
                , ''                                                           // вероятная частота изменения категории
                );
            }
           
 
            $xml_sitemap = $this->renderPartial('index', array( // записываем view на переменную для последующего кэширования
                'host' => Yii::$app->request->hostInfo,         // текущий домен сайта
                'urls' => $urls,                                // с генерированные ссылки для sitemap
            ));
 
            Yii::$app->cache->set('sitemap', $xml_sitemap, 1*2); // кэшируем результат, чтобы не нагружать сервер и не выполнять код при каждом запросе карты сайта.
        }
 
        Yii::$app->response->format = \yii\web\Response::FORMAT_XML; // устанавливаем формат отдачи контента
 
        echo $xml_sitemap;
    }
}
