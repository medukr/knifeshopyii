<?php

use yii\helpers\Url;

?>
<div class="head-top">
    <div class="logo">
        <a href="/"><img src="/images/logo.png" alt=""></a>
    </div>
    <div class=" h_menu4">
        <ul class="memenu skyblue">
            <li class="active grid"><a class="color8" href="/">Home</a></li>
            <li><a class="color1" href="<?= Url::to('/brand')?>">Brands</a>
                <div class="mepanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <ul>
                                    <li><a href="products.html">Accessories</a></li>
                                    <li><a href="products.html">Bags</a></li>
                                    <li><a href="products.html">Caps & Hats</a></li>
                                    <li><a href="products.html">Hoodies & Sweatshirts</a></li>
                                    <li><a href="products.html">Jackets & Coats</a></li>
                                    <li><a href="products.html">Jeans</a></li>
                                    <li><a href="products.html">Jewellery</a></li>
                                    <li><a href="products.html">Jumpers & Cardigans</a></li>
                                    <li><a href="products.html">Leather Jackets</a></li>
                                    <li><a href="products.html">Long Sleeve T-Shirts</a></li>
                                    <li><a href="products.html">Loungewear</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <ul>
                                    <li><a href="products.html">Shirts</a></li>
                                    <li><a href="products.html">Shoes, Boots & Trainers</a></li>
                                    <li><a href="products.html">Shorts</a></li>
                                    <li><a href="products.html">Suits & Blazers</a></li>
                                    <li><a href="products.html">Sunglasses</a></li>
                                    <li><a href="products.html">Sweatpants</a></li>
                                    <li><a href="products.html">Swimwear</a></li>
                                    <li><a href="products.html">Trousers & Chinos</a></li>
                                    <li><a href="products.html">T-Shirts</a></li>
                                    <li><a href="products.html">Underwear & Socks</a></li>
                                    <li><a href="products.html">Vests</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Popular Brands</h4>
                                <ul>
                                    <?php foreach ($popularBrands as $popularBrand): ?>
                                        <li><a href="<?= Url::to(["/brand/{$popularBrand->url}"])?>"><?= $popularBrand->name?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="grid"><a class="color2" href="<?= Url::to(["/category"])?>">Categories</a>
                <div class="mepanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <ul>
                                    <li><a href="products.html">Accessories</a></li>
                                    <li><a href="products.html">Bags</a></li>
                                    <li><a href="products.html">Caps & Hats</a></li>
                                    <li><a href="products.html">Hoodies & Sweatshirts</a></li>
                                    <li><a href="products.html">Jackets & Coats</a></li>
                                    <li><a href="products.html">Jeans</a></li>
                                    <li><a href="products.html">Jewellery</a></li>
                                    <li><a href="products.html">Jumpers & Cardigans</a></li>
                                    <li><a href="products.html">Leather Jackets</a></li>
                                    <li><a href="products.html">Long Sleeve T-Shirts</a></li>
                                    <li><a href="products.html">Loungewear</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <ul>
                                    <li><a href="products.html">Shirts</a></li>
                                    <li><a href="products.html">Shoes, Boots & Trainers</a></li>
                                    <li><a href="products.html">Shorts</a></li>
                                    <li><a href="products.html">Suits & Blazers</a></li>
                                    <li><a href="products.html">Sunglasses</a></li>
                                    <li><a href="products.html">Sweatpants</a></li>
                                    <li><a href="products.html">Swimwear</a></li>
                                    <li><a href="products.html">Trousers & Chinos</a></li>
                                    <li><a href="products.html">T-Shirts</a></li>
                                    <li><a href="products.html">Underwear & Socks</a></li>
                                    <li><a href="products.html">Vests</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>Popular Categories</h4>
                                <ul>
                                    <?php foreach ($categories as $category): ?>
                                    <li><a href="<?= Url::to(["/category/{$category->url}"])?>"><?= $category->name?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li><a class="color4" href="blog.html">Blog</a></li>
            <li><a class="color6" href="<?= Url::to('/contact')?>">Conact</a></li>
        </ul>
    </div>

    <div class="clearfix"> </div>
</div>