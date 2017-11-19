<?php
namespace frontend\components;

use Yii;
use yii\base\Widget;
use frontend\models\Comments as Comment;


Class Comments extends Widget{
    public $profile;
    public function run(){
        $profile = $this->profile;
        $model = new Comment();
        if ($model->load(Yii::$app->request->post()) && $model->save()){
            $model = new Comment();
        }
        $commentsList = Comment::find()->where(['profile_id' => $profile->id])->all();
        return $this->render('comments', compact('model', 'profile', 'commentsList'));
    }

}