<?php
namespace frontend\components;

use yii\data\Pagination;
use yii\base\Widget;

Class ProductList extends Widget{
    public $model;
    public $modelcount;

    public function run(){
            $countQuery = clone $this->model;
    // подключаем класс Pagination, выводим по 10 пунктов на страницу
            $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 1]);
    // приводим параметры в ссылке к ЧПУ
    		$pages->pageSizeParam = false;
    		$models = $countQuery->offset($pages->offset)
        		->limit($pages->limit)
        		->all();
        return $this->render('product-list', [
            'model' => $models,
            'pages' => $pages
        ]);
    }
}
