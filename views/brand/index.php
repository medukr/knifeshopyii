<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 16.04.18
 * Time: 17:28
 */

use yii\helpers\Url;

$this->registerJsFile('js/brand-filter.js',  ['position' => yii\web\View::POS_END]);
$this->registerCssFile('css/amshopbybrand.min.css',  ['position' => yii\web\View::POS_END]);
?>
<div class="container">
<div class="content">
    <div class="brands-filters">
        <div class="letters">
            <div class="letters-box">
                <a href="javascript:void(0)" class="active letter-all">All Brands</a>
            </div>
            <div class="letters-box">
                <?php foreach ($brands as $key => $item): ?>
                <a href="javascript:void(0)" class="letter-<?= $key ?>"><?= $key ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class=" brand-images " style="float:left; width:100%">
       <?php foreach ($brands as $key => $item): ?>
            <div class="brands-letter letter-<?= $key?>">
                <div id="<?= $key?>" class="brand-item-letter">
                    <span><?= $key?></span>
                </div>
                <div class="brand-item-links-to-brand">
                    <?php foreach ($item as $brand): ?>
                    <a href="<?= Url::to(["{$brand->url}"])?>" class="brand-btn"> <?= ucfirst($brand->name) ?> </a>
                    <?php endforeach; ?>
                </div>
            </div>
       <?php endforeach; ?>
    </div>
        <script>
            $(".letters-box a").click(function (e) {
                e.preventDefault();
                $(this).applyBrandFilter('.brands-letter');
            });</script>
        <p></p>
</div>
</div>