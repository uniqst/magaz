<?php
namespace frontend\components;

use yii\base\Widget;
use frontend\models\Profile;
use frontend\models\Stories;
use frontend\models\Service;
use yii\db\Expression;


Class BottomSlider extends Widget{
    public function run(){
    	$profile = Profile::find()->where(['status' => 1])->limit(3)->orderBy(new Expression('rand()'))->with('image')->all();
    	foreach($profile as $prof){
    	$prof->date = 'profile';
    	}
        $stories = Stories::find()->limit(3)->orderBy(new Expression('rand()'))->all();
        foreach($stories as $stor){
    	$stor->date = 'stories';
    	}
        $service = Service::find()->limit(3)->orderBy(new Expression('rand()'))->all();
        foreach($service as $serv){
    	$serv->date = 'service';
    	}
        $model = array_merge($profile, $stories, $service);
        shuffle($model);

        return $this->render('bottom-slider', compact('model'));
    }
}