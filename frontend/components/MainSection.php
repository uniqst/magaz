<?php
namespace frontend\components;

use frontend\models\Profile;
use yii\base\Widget;
use yii\db\Expression;


Class MainSection extends Widget{
    public function run(){
    	$model = Profile::find()->orderBy(new Expression('rand()'))->with('photo')->one();
        return $this->render('main-section', compact('model'));
    }
}