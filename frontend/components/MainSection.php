<?php
namespace frontend\components;

use yii\base\Widget;


Class MainSection extends Widget{
    public function run(){
        return $this->render('main-section');
    }
}