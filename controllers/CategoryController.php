<?php

namespace app\controllers;

use app\models\Category;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($url)
    {
        $category = Category::find()->where('url=:url')->addParams([':url' => $url])->one();

        return $this->render('view', compact('category'));
    }

}
