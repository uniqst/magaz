<?php
namespace frontend\components;
use yii\base\Widget;
use frontend\models\Service as Services;
use yii\db\Expression;

Class Service extends Widget{

	public function run(){

		$model = Services::find()->all();
		return $this->render('service', compact('model'));

	}

}