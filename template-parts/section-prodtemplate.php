<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>

<div class="block-item flex column text-center justify-content-around" >
    <?php
    /**
     * Hook: woocommerce_before_shop_loop_item.
     *
     * @hooked woocommerce_template_loop_product_link_open - 10
     */
    do_action( 'woocommerce_before_shop_loop_item' );

    /**
     * Hook: woocommerce_before_shop_loop_item_title.
     *
     * @hooked woocommerce_show_product_loop_sale_flash - 10
     * @hooked woocommerce_template_loop_product_thumbnail - 10
     */
    do_action( 'woocommerce_before_shop_loop_item_title' );

    /**
     * Hook: woocommerce_shop_loop_item_title.
     *
     * @hooked woocommerce_template_loop_product_title - 10
     */
    do_action( 'woocommerce_shop_loop_item_title' );
    ?>
    <p class="about"><? the_field('size'); ?></p>
    <?
    /**
     * Hook: woocommerce_after_shop_loop_item_title.
     *
     * @hooked woocommerce_template_loop_rating - 5
     * @hooked woocommerce_template_loop_price - 10
     */
    do_action( 'woocommerce_after_shop_loop_item_title' );
    ?>
    <p class="about">за штуку</p>

    <div class="cat-reviev">
        <div class="reviev-star" >
            <?
            $reit = (int)$product->average_rating;
            while( $reit ): ?>
                <i class="fa fa-star gold-star"></i>
                <? $reit--; ?>
            <? endwhile; ?>
            <? $empty_star = 5 - (int)$product->average_rating;
            while( $empty_star ): ?>
                <i class="fa fa-star grey-star"></i>
                <? $empty_star--; ?>
            <? endwhile; ?>


        </div>
        <div class="reviev" >

            <?
            $rev_num = $product->review_count;
            if($rev_num){
                $html = $rev_num ;

            }
            $html .= ' <i class="fa fa-commenting-o" aria-hidden="true"></i>';
            echo $html;

            ?>

        </div>
    </div>

    <?
    /**
     * Hook: woocommerce_after_shop_loop_item.
     *
     * @hooked woocommerce_template_loop_product_link_close - 5
     * @hooked woocommerce_template_loop_add_to_cart - 10
     */
    do_action( 'woocommerce_after_shop_loop_item' );
    echo do_shortcode('[viewBuyButton]');
    ?>

</div>
