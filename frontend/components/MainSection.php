<?php
namespace frontend\components;

use frontend\models\Profile;
use frontend\models\Pages;
use yii\base\Widget;
use yii\db\Expression;
use yii\db\ActiveQuery;


Class MainSection extends Widget{
    public function run(){
    	$pages = Pages::find()->where(['page' => 'Booking'])->all();
    	$model = Profile::find()->orderBy(new Expression('rand()'))->limit(3)->all();
        return $this->render('main-section', compact('model', 'pages'));
    }
}