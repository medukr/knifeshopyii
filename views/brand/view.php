<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 23.04.18
 * Time: 10:53
 */

use yii\helpers\Url;

?>


<!--content-->
<!---->
<div class="container">
    <div class="text-center fit-top">
        <h1><?= $brand->name ?></h1>
    </div>
</div>
<div class="product">
    <div class="container">

        <div class="col-md-3 product-price">

            <?= \app\components\CategoriesMenuWidget::widget()?>

            <div class="product-middle">

                <div class="fit-top">
                    <h6 class="shop-top">Lorem Ipsum</h6>
                    <a href="single.html" class="shop-now">SHOP NOW</a>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <?= \app\components\SellersTagWidget::widget()?>

            <!---->

            <?= \app\components\BestSellersWidget::widget()?>

            <div class=" per1">
                <a href="single.html" ><img class="img-responsive" src="/images/pro.jpg" alt="">
                    <div class="six1">
                        <h4>DISCOUNT</h4>
                        <p>Up to</p>
                        <span>60%</span>
                    </div></a>
            </div>
        </div>
        <div class="col-md-9 product1">
            <?php if ($brand->products): ?>
            <?php $i = 0;
            foreach ($brand->products as $product): ?>
                <?php if ($i % 3 == 0): ?>
                    <div class=" bottom-product">
                <?php endif; ?>
                <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                    <div class="product-at ">
                        <a href="<?= Url::to(["brand/$brand->url/$product->url"])?>"><img class="img-responsive" src="/images/pi4.jpg" alt="">
                            <div class="pro-grid">
                                <span class="buy-in">View</span>
                            </div>
                        </a>
                    </div>
                    <p class="tun"><?= $product->name?></p>
                    <a href="#" class="item_add"><p class="number item_price"><i> </i>$<?= $product->price?></p></a>
                </div>
                <?php $i++; if ($i % 3 == 0 || $i == count($brand->products)): ?>
                    <div class="clearfix"></div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php else: ?>
                <div class=" bottom-product">
                    <h3>No items...</h3>
                </div>
            <?php endif; ?>
        </div>
        <div class="clearfix"> </div>
        <nav class="in">
            <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2 <span class="sr-only"></span></a></li>
                <li><a href="#">3 <span class="sr-only"></span></a></li>
                <li><a href="#">4 <span class="sr-only"></span></a></li>
                <li><a href="#">5 <span class="sr-only"></span></a></li>
                <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
            </ul>
        </nav>
    </div>

</div>

<!---->

<!--//content-->


