<?php
namespace frontend\components;
use yii\base\Widget;
use yii\db\Expression;
use frontend\models\Stories;

Class Story extends Widget{

	public function run(){

		$model = Stories::find()->limit(2)->orderBy(new Expression('rand()'))->all();
		return $this->render('story', compact('model'));

	}

}
