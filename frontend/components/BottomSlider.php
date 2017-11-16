<?php
namespace frontend\components;

use yii\base\Widget;
use frontend\models\Profile;
use frontend\models\Stories;


Class BottomSlider extends Widget{
    public function run(){
    	$profile = Profile::find()->limit(6)->with('image')->all();
        $stories = Stories::find()->limit(6)->all();
        $model = array_merge($profile, $stories);
        shuffle($model);
        return $this->render('bottom-slider', compact('model'));
    }
}