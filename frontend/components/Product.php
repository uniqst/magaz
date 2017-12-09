<?php
namespace frontend\components;
use yii\base\Widget;
use frontend\models\Profile;
use frontend\models\Contacts;
use yii\db\Expression;

Class Product extends Widget{

	public function run(){
		 $contact = Contacts::find()->one();
		$model = Profile::find()->limit(2)->orderBy(new Expression('rand()'))->with('photo')->all();
		return $this->render('product', compact('model', 'contact'));

	}

}

