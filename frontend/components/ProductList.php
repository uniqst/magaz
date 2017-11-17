<?php
namespace frontend\components;

use yii\base\Widget;

Class ProductList extends Widget{
    public $model;
    public function run(){
        return $this->render('product-list', [
            'model' => $this->model
        ]);
    }
}
