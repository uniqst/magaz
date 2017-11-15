<?php
namespace frontend\components;

use yii\base\Widget;


Class SidebarRight extends Widget{
    public function run(){
        return $this->render('sidebar-right');
    }
}