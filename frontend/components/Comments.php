<?php
namespace frontend\components;

use Yii;
use yii\base\Widget;
use frontend\models\Comments as Comment;


Class Comments extends Widget{
    public function run(){
        $model = new Comment();
        if ($model->load(Yii::$app->request->post()) && $model->save()){
            $model = new Comment();
        }
        $commentsList = Comment::find()->where(['status' => 1])->all();
        return $this->render('comments', compact('model', 'commentsList'));
    }

}