<?php
namespace frontend\components;

use yii\base\Widget;
use frontend\models\Profile;
use frontend\models\Stories;
use yii\db\Expression;


Class BottomSlider extends Widget{
    public function run(){
    	$profile = Profile::find()->limit(6)->orderBy(new Expression('rand()'))->with('image')->all();
        $stories = Stories::find()->limit(6)->orderBy(new Expression('rand()'))->all();
        $model = array_merge($profile, $stories);
        shuffle($model);
        return $this->render('bottom-slider', compact('model'));
    }
}