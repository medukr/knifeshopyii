<?php

namespace app\controllers;

use app\models\Brand;

class BrandController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $brands = Brand::find();
        $condition = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '#'];

        return $this->render('index', compact('brands', 'condition'));
    }

}
