<?php

namespace frontend\controllers;

use yii\rest\Controller;

class PostController extends Controller
{
    public $modelClass = 'common\models\Post';

    public function actions()
    {
        $acrions = parent::actions();
        unset($actions['create'], $actions['update'], $actions['delete']);
        return $actions;
    }
}