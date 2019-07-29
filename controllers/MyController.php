<?php


namespace app\controllers;

class MyController extends AppControler
{
    public function actionIndex($id = null){
        $hi = 'Hello World!';
        $names = ['ivanov', 'petrov', 'sidorov'];
        if(!$id) $id = 'test';
        return $this->render('index', ['hello' => $hi, 'names' => $names, 'id' => $id]);

    }

    public function actionBlogPost(){
        // /my/blog-post
        return 'Blog Post';
    }
}