<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 15.04.18
 * Time: 15:32
 */

namespace app\components;

use yii\base\Widget;

class BannerWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('banner');
    }

}
