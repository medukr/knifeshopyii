<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 23.04.18
 * Time: 16:34
 */

namespace app\components;


use yii\base\Widget;

class BestSellersWidget extends Widget
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function run()
    {
        return $this->render('bestSellers');
    }
}