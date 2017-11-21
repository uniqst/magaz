<?php
namespace frontend\components;

use frontend\models\FiltersValue;
use frontend\models\Category;
use yii\db\ActiveQuery;
use yii\base\Widget;


Class SidebarLeft extends Widget{
    public function run(){
        $model = Category::find()->where(['parent_id' => 0])->with('category')->all();
        return $this->render('sidebar-left', compact('model'));
    }
}