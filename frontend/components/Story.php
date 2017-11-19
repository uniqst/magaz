<?php
namespace frontend\components;
use yii\base\Widget;
use yii\db\Expression;

Class Story extends Widget{

	public function run(){

		
		return $this->render('story');

	}

}
