<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products container mt-5">

		<h2 class="text-center mb-5">Просмотренные товары:</h2>

        <div class="bloki flex between">

            <div class="change flex left-btn-sl2">
                <div class="prev n flex"><img src="<? bloginfo( 'template_url' ); ?>/img/slider-l.png" alt="img"></div>
                <div class="prev-a n flex"><img id="js-prev" src="<? bloginfo( 'template_url' ); ?>/img/slider-l-n.png" alt="img"></div>
            </div>

            <div class="slider-2">
                <div class="slider2-line">
                    <div class="slider-2-line-smal">
                        <? do_shortcode('[woocommerce_recently_viewed_products per_page="6"]'); ?>
                    </div>
                </div>
            </div>

            <div class="change flex right-btn-sl2">
                <div class="next flex"><img src="<? bloginfo( 'template_url' ); ?>/img/slider-r.png" alt="img"></div>
                <div class="next-a flex"><img id="js2-next" src="<? bloginfo( 'template_url' ); ?>/img/slider-r-n.png" alt="img"></div>
            </div>
        </div>

	</section>

<?php endif;

wp_reset_postdata();
