<?php
namespace frontend\components;

use frontend\models\Profile;
use yii\base\Widget;
use yii\db\Expression;
use yii\db\ActiveQuery;


Class MainSection extends Widget{
    public function run(){
    	$model = Profile::find()->orderBy(new Expression('rand()'))->limit(3)->all();
        return $this->render('main-section', compact('model'));
    }
}