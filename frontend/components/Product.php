<?php
namespace frontend\components;
use yii\base\Widget;
use frontend\models\Profile;
use yii\db\Expression;

Class Product extends Widget{

	public function run(){

		$model = Profile::find()->limit(2)->orderBy(new Expression('rand()'))->with(['photo' => function(\yii\db\ActiveQuery $query){
			$query->limit(2);
		}])->all();
		return $this->render('product', compact('model'));

	}

}

