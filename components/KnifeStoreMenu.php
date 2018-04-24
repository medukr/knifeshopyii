<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.04.18
 * Time: 17:23
 */

namespace app\components;

use app\models\Category;
use yii\base\Widget;
use app\models\Brand;

class KnifeStoreMenu extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $popularBrands = Brand::find()->where(['between', 'name', "a", "z" ])
            ->andWhere(['status'=> 1])->limit(10)->all();
        $categories = Category::find()->all();

        return $this->render('knifeStoreMenu', compact('popularBrands', 'categories'));
    }
}