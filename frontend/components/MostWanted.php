<?php
namespace frontend\components;
use yii\base\Widget;
use frontend\models\Profile;
use yii\db\Expression;

Class MostWanted extends Widget{

	public function run(){

		$model = Profile::find()->orderBy(new Expression('rand()'))->with('photo')->one();
		return $this->render('most-wanted', compact('model'));

	}

}
