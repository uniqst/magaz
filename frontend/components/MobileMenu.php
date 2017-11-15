<?php
namespace frontend\components;

use yii\base\Widget;


Class MobileMenu extends Widget{
    public function run(){
        return $this->render('mobile-menu');
    }
}