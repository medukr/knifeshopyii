<?php
/**
 * Created by PhpStorm.
 * User: andrii
 * Date: 23.04.18
 * Time: 16:22
 */
?>

<div class=" rsidebar span_1_of_left">
    <div class="of-left">
        <h3 class="cate">Categories</h3>
    </div>
    <ul class="menu">
        <li class="item1"><a href="#">Men </a>
            <ul class="cute">
                <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                <li class="subitem3"><a href="single.html">Automatic Fails </a></li>
            </ul>
        </li>
        <li class="item2"><a href="#">Women </a>
            <ul class="cute">
                <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                <li class="subitem3"><a href="single.html">Automatic Fails </a></li>
            </ul>
        </li>
        <li class="item3"><a href="#">Kids</a>
            <ul class="cute">
                <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                <li class="subitem3"><a href="single.html">Automatic Fails</a></li>
            </ul>
        </li>
        <li class="item4"><a href="#">Accesories</a>
            <ul class="cute">
                <li class="subitem1"><a href="single.html">Cute Kittens </a></li>
                <li class="subitem2"><a href="single.html">Strange Stuff </a></li>
                <li class="subitem3"><a href="single.html">Automatic Fails</a></li>
            </ul>
        </li>

        <li class="item4"><a href="#">Shoes</a>
            <ul class="cute">
                <li class="subitem1"><a href="product.html">Cute Kittens </a></li>
                <li class="subitem2"><a href="product.html">Strange Stuff </a></li>
                <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
            </ul>
        </li>
    </ul>
</div>
<!--initiate accordion-->
<script type="text/javascript">
    $(function() {
        var menu_ul = $('.menu > li > ul'),
            menu_a  = $('.menu > li > a');
        menu_ul.hide();
        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });

    });
</script>
<!---->
