<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 16.04.18
 * Time: 17:28
 */
$this->registerJsFile('js/brand-filter.js',  ['position' => yii\web\View::POS_END]);
$this->registerCssFile('css/amshopbybrand.min.css',  ['position' => yii\web\View::POS_END]);
//$this->registerCssFile('css/styles-l.min.css',  ['position' => yii\web\View::POS_END]);
//$this->registerCssFile('css/700af7436b70f276ad2b35f84318e840.min.css',  ['position' => yii\web\View::POS_END]);

?>
<div class="container">
<div class="content">
    <div class="brands-filters">
        <div class="letters">
            <div class="letters-box">
                <a href="javascript:void(0)" class="active letter-all">All Brands</a>
            </div>
            <div class="letters-box">
                <?php for ($i = 0; $i < count($condition); $i++): ?>
                    <a href="javascript:void(0)" class="letter-<?= $condition[$i] ?>"><?= $condition[$i] ?></a>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <div class=" brand-images " style="float:left; width:100%">
        <?php for ($i = 0; $i < count($condition); $i++): ?>
            <div class="brands-letter letter-<?= $condition[$i] ?>">
                <div id="<?= $condition[$i] ?>" class="brand-item-letter">
                    <span><?= $condition[$i] ?></span>
                </div>
                <div class="brand-item-links-to-brand">
                    <?php if ($condition[$i] == '#'): ?>
                    <?php foreach ($brands->filterWhere(['not between', 'name', 'a','z', false])->all() as $brand): ?>
                        <a href="/brand/a-r-s-knives.html" class="brand-btn"> <?= $brand->name ?> </a>

                    <?php endforeach; ?>
                    <?php else: ?>
                    <?php foreach ($brands->filterWhere(['like', 'name', "{$condition[$i]}%", false])->all() as $brand): ?>
                        <a href="/brand/a-r-s-knives.html" class="brand-btn"> <?= $brand->name ?> </a>

                    <?php endforeach; ?>
                    <?php endif; ?>



                </div>
            </div>
        <?php endfor; ?>
    </div>
        <script>
            $(".letters-box a").click(function (e) {
                e.preventDefault();
                $(this).applyBrandFilter('.brands-letter');
            });</script>
        <p></p>
</div>
</div>