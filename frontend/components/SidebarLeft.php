<?php
namespace frontend\components;

use frontend\models\Filters;
use frontend\models\FiltersValue;
use frontend\models\Category;
use yii\db\ActiveQuery;
use yii\base\Widget;


Class SidebarLeft extends Widget{
    public function run(){
        $filters = Filters::find()->with('values')->all();
        $model = Category::find()->where(['parent_id' => 0])->with('category')->all();
        return $this->render('sidebar-left', compact('filters','model'));
    }
}