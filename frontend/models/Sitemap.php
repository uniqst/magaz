<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
use frontend\models\Category;
use frontend\models\Profile;
use frontend\models\Stories;
use yii\helpers\Url;
class Sitemap extends Model{
    public function getUrl(){
            $urls = array();    
            //Получаем массив URL из таблицы Sef
            $url_category = Category::find()
                    ->select('name')
                    ->where(['<>', 'parent_id', 0])
                    ->all();

            $url_profiles = Profile::find()
                    ->select('id')
                    ->all();

            $url_stories = Stories::find()
                    ->select('id')
                    ->all();
            //Формируем двумерный массив. createUrl преобразует ссылки в правильный вид. 
            //Добавляем элемент массива 'daily' для указания периода обновления контента 
            $urls[] = array(Yii::$app->urlManager->createUrl(['/girls']),'daily');
            $urls[] = array(Yii::$app->urlManager->createUrl(['/how-make-order']),'daily');
            $urls[] = array(Yii::$app->urlManager->createUrl(['/services']),'daily');
            $urls[] = array(Yii::$app->urlManager->createUrl(['/booking']),'daily');
            $urls[] = array(Yii::$app->urlManager->createUrl(['/stories']),'daily');
            $urls[] = array(Yii::$app->urlManager->createUrl(['/casting']),'daily');
            $urls[] = array(Yii::$app->urlManager->createUrl(['/reviews-for-escort']),'daily');
            $urls[] = array(Yii::$app->urlManager->createUrl(['/contacts']),'daily');

            foreach ($url_category as $url_rule){
                $urls[] = array(Yii::$app->urlManager->createUrl(['/category', 'value' => $url_rule->name]),'daily');
            }

            foreach ($url_profiles as $url_rule){
                $urls[] = array(Url::to(['/girl', 'id' =>$url_rule->id]). '/name','daily');
            }

            foreach ($url_stories as $url_rule){
                $urls[] = array(Url::to(['/stories/story', 'id' => $url_rule->id]). '/title','daily');
            }
            return $urls;
    }
    public function getXml($urls){
        $host = Yii::$app->request->hostInfo; // домен сайта    
        ob_start();  
        echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
        <loc><?= $host ?></loc>
        <changefreq>daily</changefreq>
        <priority>1</priority>
        </url>
        <?php foreach($urls as $url): ?>
        <url>
        <loc><?= $host.$url[0] ?></loc>
        <changefreq><?= $url[1] ?></changefreq>
        </url>
        <?php endforeach; ?>
        </urlset>
        <?php return ob_get_clean();
    }
    public function showXml($xml_sitemap){
        // устанавливаем формат отдачи контента        
        Yii::$app->response->format = \yii\web\Response::FORMAT_XML;  
        //повторно т.к. может не сработать
        header("Content-type: text/xml");
        echo $xml_sitemap;
        Yii::$app->end(); 
    }    
}