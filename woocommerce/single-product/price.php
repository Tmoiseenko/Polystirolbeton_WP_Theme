<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>


<p class="price-mass">

    <span><i class="fa fa-question"></i>Оптовая цена за шт</span>
    <span>
        <span class="price" data-count="<? the_field('sale_count'); ?>"><?php the_field('mass_price') ?></span>
        <span class="price-index">руб.</span>
    </span>
</p>
<p class="price-retail active">
    <sapn>Розничаня цена за шт</sapn>
    <span>
        <span class="price"><?php echo $product->regular_price; ?></span>
        <span class="price-index">руб.</span>
    </span>
</p>

<p class="price-total">
    <sapn>Итого:</sapn>
    <span>
        <span class="price"><?php echo ($product->regular_price * 1 ); ?></span>
        <span class="price-index">руб.</span>
    </span>
</p>
