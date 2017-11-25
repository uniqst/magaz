<?php
namespace frontend\components;
use yii\base\Widget;
use yii\db\Expression;
use frontend\models\Stories;

Class StoriesSlider extends Widget{

	public function run(){

		$model = Stories::find()->limit(5)->orderBy(new Expression('rand()'))->all();
		$model1 = array_slice($model, 0, 2);
        $model2 = array_slice($model, 3, 5);
		return $this->render('stories-slider', compact('model1', 'model2'));

	}

}
