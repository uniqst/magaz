<?php
namespace frontend\components;

use Yii;
use yii\base\Widget;
use frontend\models\Comments as Comment;
use frontend\models\Pages;


Class Comments extends Widget{
		
    public function run(){
        $model = new Comment();
        if ($model->load(Yii::$app->request->post()) && $model->save()){
            $model = new Comment();
        }
        $pages = Pages::find()->where(['page' => 'Reviews'])->all();  
        $commentsList = Comment::find()->where(['status' => 1])->all();
        return $this->render('comments', compact('model', 'commentsList', 'pages'));
    }

}