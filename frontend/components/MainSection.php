<?php
namespace frontend\components;

use frontend\models\Profile;
use yii\base\Widget;
use yii\db\Expression;
use yii\db\ActiveQuery;


Class MainSection extends Widget{
    public function run(){
    	$model = Profile::find()->orderBy(new Expression('rand()'))->with(['photo' => function(ActiveQuery $query){
    		$query->limit(3);
    	}])->one();
        return $this->render('main-section', compact('model'));
    }
}