<?php
namespace frontend\components;

use frontend\models\FiltersValue;
use frontend\models\Category;
use frontend\models\City;
use yii\db\ActiveQuery;
use yii\base\Widget;
use frontend\models\Attendance;

Class SidebarLeft extends Widget{
    public function run(){
        $model = Category::find()->where(['parent_id' => 0])->with('category')->all();
        $services = Attendance::find()->all();
        $city = City::find()->all();
        return $this->render('sidebar-left', compact('model', 'city', 'services'));
    }
}