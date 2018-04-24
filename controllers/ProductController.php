<?php

namespace app\controllers;

use app\models\Product;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView($url)
    {
        $product = Product::find()->where('url=:url')->addParams([':url' => $url])->one();

        return $this->render('view', compact('product'));
    }

}
