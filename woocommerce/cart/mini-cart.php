<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! WC()->cart->is_empty() ) : ?>
    <a href="<? echo wc_get_cart_url(); ?>" class="k-img"><img src="<? bloginfo('template_url'); ?>/img/korzina.png" alt="korzina"></a>
    <a href="<? echo wc_get_cart_url(); ?>"><p>Корзина</p></a>
    <a href="<? echo wc_get_cart_url(); ?>" id="k-items"><?php echo WC()->cart->get_cart_contents_count(); ?></a>

    <div class="vipad flex column">
        <div class="vipad-content">
            <? $products = WC()->cart->get_cart_contents(); ?>
            <? foreach ($products as $item): ?>

                <div class="vipad-item flex">
                    <div class="vipad-img"><?php echo get_the_post_thumbnail( $item['product_id'], 'small'); ?></div>
                    <div class="vipad-txt flex column">
                        <a href=""> <? echo $item['data']->get_name(); ?></a>
                        <p><? the_field('size'); ?></p>
                        <p><? echo $item['data']->get_price(); ?> руб.</p>
                    </div>
                </div>
            <? endforeach; ?>
            <div class="vipad-btn flex column">
                <p>Итого: <?php echo WC()->cart->get_cart_subtotal();?></p>
                <a href="<? echo wc_get_cart_url(); ?>">Перейти в корзину</a>
            </div>
        </div>
    </div>
<?php else : ?>
    <a href="<? echo wc_get_cart_url(); ?>" class="k-img"><img src="<? bloginfo('template_url'); ?>/img/korzina.png" alt="korzina"></a>
    <a href="<? echo wc_get_cart_url(); ?>"><p>Корзина пуста</p></a>
<?php endif; ?>