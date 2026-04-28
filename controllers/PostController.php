<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Post;

class PostController extends Controller
{
    public function actionIndex()
    {
        $posts = Post::find()->all();
        return $this->render('index', compact('posts'));
    }

}