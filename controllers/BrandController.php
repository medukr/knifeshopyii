<?php

namespace app\controllers;

use app\models\Brand;

class BrandController extends \yii\web\Controller
{
    public function actionIndex()
    {
//        $allBrands = Brand::find()->all();
        $allBrands = Brand::find()->orderBy('name asc')->all();
        $brands = $this->sortBrands($allBrands);
        return $this->render('index', compact(  'brands'));
    }

    public function actionView($url)
    {
        $brand = Brand::find()->where('url=:url')->addParams([':url' => $url])->one();

        return $this->render('view', compact('brand'));
    }


    protected function sortA($allBrands)
    {
        $bar = [];
        $sortBrands = [];
        $condition = $this->getArray();

        for ($i = 0; $i < count($condition); $i++){
            if ($condition[$i] != '#'){
                foreach ($allBrands as $brand){
                    if ($brand->name[0] == $condition[$i]) {
                        //array_push($bar, $brand);
                        $bar[] = $brand;
                    }
                }
                if ($bar) {
                    $sortBrands[$condition[$i]] = $bar;
                    $bar = [];
                }

            }else{
                foreach ($allBrands as $brand) {
                    if (is_numeric($brand->name[0]) || $brand->name[0] == '.') {
//                        array_push($bar, $brand);
                        $bar[] = $brand;
                    }
                }
                if ($bar) {
                    $sortBrands[$condition[$i]] = $bar;
                    $bar = [];
                }
            }
        }
        return $sortBrands;
    }




    protected function sortBrands($allBrands, $condition = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '#'])
    {
        $bar = [];
        $sortBrands = [];

        for ($i = 0; $i < count($condition); $i++){
            if ($condition[$i] != '#'){
                foreach ($allBrands as $brand){
                    if (ucfirst($brand->name[0]) == $condition[$i]) {
                        array_push($bar, $brand);
                    }
                }
                if ($bar) {
//                    $sortBrands[$condition[$i]] = $this->sortArrByObjectField($bar);
                    $sortBrands[$condition[$i]] = $bar;
                    $bar = [];
                }

            }else{
                foreach ($allBrands as $brand) {
                    if (is_numeric($brand->name[0]) || $brand->name[0] == '.') {
                        array_push($bar, $brand);
                    }
                }
                if ($bar) {
//                    $sortBrands[$condition[$i]] =  $this->sortArrByObjectField($bar);
                    $sortBrands[$condition[$i]] =  $bar;
                    $bar = [];
                }
            }
        }
        return $sortBrands;
    }

    protected function sortArrByObjectField($arrObj)
    {
        $arr = [];
        $arr2 = [];
        foreach ($arrObj as $item){
            array_push($arr, $item->name);

        }
        sort($arr);
        foreach ($arr as $arrItem) {
            foreach ($arrObj as $arrObjItem) {
                if ($arrItem == $arrObjItem->name){
                    array_push($arr2, $arrObjItem);
                }
            }
        }
        return $arr2;
    }


    protected function getArray()
    {
        return array_push(range('a','z'), '#');
    }
}
