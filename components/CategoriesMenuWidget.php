<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 23.04.18
 * Time: 16:20
 */

namespace app\components;


use yii\base\Widget;

class CategoriesMenuWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('categoriesMenuWidget');
    }
}