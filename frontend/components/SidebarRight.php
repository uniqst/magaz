<?php
namespace frontend\components;

use yii\base\Widget;
use frontend\models\Profile;
use frontend\models\Stories;


Class SidebarRight extends Widget{
    public function run(){
        $profile = Profile::find()->limit(3)->with('image')->all();
        $stories = Stories::find()->limit(3)->all();
        $model = array_merge($profile, $stories);
        shuffle($model);
        return $this->render('sidebar-right', compact('model'));
    }
}