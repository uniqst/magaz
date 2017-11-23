<?php
namespace frontend\components;

use frontend\models\Comments;
use yii\base\Widget;

Class CommentsList extends Widget{
    public function run(){
        $model = Comments::find()->where(['status' => 1])->limit(10)->all();
        $model1 = array_slice($model, 0, 5);
        $model2 = array_slice($model, 6, 10);
        return $this->render('comments-list', compact('model1', 'model2'));
    }
}