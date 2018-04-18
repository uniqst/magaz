<?php
namespace frontend\components;

use frontend\models\Profile;
use yii\base\Widget;
use yii\db\Expression;
use yii\db\ActiveQuery;


Class MostWantedGirl extends Widget{
    public function run(){
    	
    	$model = Profile::find()->orderBy(['id' => SORT_DESC])->limit(3)->all();
        return $this->render('most-wanted-girl', compact('model'));
    }
}