<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
//wc_get_template( 'single-product/title.php' );
?>

    <div class="d-flex flex-row justify-content-between align-items-center">
        <div class="d-flex flex-row align-items-center">

            <div class="reviev-star" >
                <span>Рейтинг</span>
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
                $html = $rev_num;
                if( $rev_num > 10 && $rev_num < 21 ) {
                    echo $html. " отзывов";
                }elseif ( ($rev_num > 1 && $rev_num < 5) || (($rev_num % 10) > 1 && ($rev_num % 10) < 5) ){
                    echo $html. " отзыва";
                }elseif ( ($rev_num % 10) == 1 ){
                    echo $html. " отзыв";
                }else {
                    echo $html . " отзывов";
                }
                ?>

            </div>


            <div class="sale-cash" ><span>скидка 3,7% за наличную оплату</span></div>
            <div class="warranty">
                <i class="fa fa-exclamation-circle"></i>
                <span class="orange-span">гарантия лучшей цены!</span>
                <span class="gray-span">Нашли дешевле? Снизим цену!</span>
            </div>
        </div>
        <div class="part-num">Код товара <?php echo $product->sku; ?></div>
    </div>

<div class="d-flex flex-row justify-content-between relative mb-5">
	<?php

	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

    <div class="d-flex flex-column prod-main-info">


		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
    </div>



	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>


<?php do_action( 'woocommerce_after_single_product' ); ?>

<div class="container">

<div class="tags">
    <? echo woo_tag_list(); ?>
</div>
<div class="bottom-margin">
<?
$myhome = '<img src="' . get_bloginfo('template_url') . '/img/kroshka.png" alt="img">';
if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('&nbsp;&gt;&gt;&nbsp;', array('home' => $myhome) );
?>
</div>
</div>

