<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$total_pallets = 0;
$total_volume = 0;
$total_weight = 0;

foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
    $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

    if ($_product->get_attribute('pa_poduct_count')) $total_volume = $total_volume + ($cart_item['quantity'] / $_product->get_attribute('pa_poduct_count'));
    if ($_product->get_attribute('pa_product_weight')) $total_weight = $total_weight + ($cart_item['quantity'] * $_product->get_attribute('pa_product_weight'));
    if ($_product->get_attribute('pa_count_in_pallet')) $total_pallets = $total_pallets + ($cart_item['quantity'] / $_product->get_attribute('pa_count_in_pallet'));

}
?>


<div class="shop_table woocommerce-checkout-review-order-table">

<!--    --><?// print_r( WC()->cart->get_cart() ); ?>

    <div class="order-weight">
        <span class="order">
            Вес заказа
        </span>
        <span class="total-weight">
            <? echo number_format($total_weight, 2, '.', ' '); ?> кг.
        </span>
    </div>

    <div class="br-small">
        <img src="<? bloginfo('template_url'); ?>/img/br-small.png" alt="">
    </div>

    <div class="order-volume">
        <span class="order">
            Обьем заказа
        </span>
        <span class="total-volume">
            <? echo number_format($total_volume, 2, '.', ' '); ?> м3.
        </span>
    </div>

    <div class="br-small">
        <img src="<? bloginfo('template_url'); ?>/img/br-small.png" alt="">
    </div>

    <div class="order-pallets">
        <span class="order">
            Паллеты (поддоны)
        </span>
        <span class="total-pallets">
            <? echo number_format($total_pallets, 2, '.', ' '); ?>
        </span>
    </div>

<div class="cart-items">
		<?php
			do_action( 'woocommerce_review_order_before_cart_contents' );

			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					?>
					<p class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
						<span class=" d-flex flex-row justify-content-between align-items-end">
                            <span class="product-name text-left">
                                <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
                            </span>
							<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <span class="product-quantity">' . sprintf( ' %s', $cart_item['quantity'] ) . '</span>', $cart_item, $cart_item_key ); ?>
							<?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>
						</span>
					</p>
					<?php
				}
			}

			do_action( 'woocommerce_review_order_after_cart_contents' );
		?>
</div>
    <div class="br-small">
        <img src="<? bloginfo('template_url'); ?>/img/br-small.png" alt="">
    </div>

		<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

		<div class="order-total">
			<p class="order-total-title">Общая стоимость</p>
			<p><?php wc_cart_totals_order_total_html(); ?></p>
		</div>

		<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>


</div>
