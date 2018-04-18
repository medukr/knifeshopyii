<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.04.18
 * Time: 17:23
 */

namespace app\components;

use yii\base\Widget;

class KnifeStoreMenu extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('knifeStoreMenu');
    }
}