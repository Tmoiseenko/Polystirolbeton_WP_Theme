<?php
/**
 * Checkout Payment Section
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.3
 */

defined( 'ABSPATH' ) || exit;

if ( ! is_ajax() ) {
	do_action( 'woocommerce_review_order_before_payment' );
}
?>


<div id="payment" class="woocommerce-checkout-payment">
    <div class="d-flex flex-row">
    <div class="label"><p ><sup>*</sup>Методы оплаты:</p></div>
	<?php if ( WC()->cart->needs_payment() ) : ?>
		<ul class="wc_payment_methods payment_methods methods">
			<?php
			if ( ! empty( $available_gateways ) ) {
				foreach ( $available_gateways as $gateway ) {
					wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );
				}
			} else {
				echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">' . apply_filters( 'woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? esc_html__( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) : esc_html__( 'Please fill in your details above to see available payment methods.', 'woocommerce' ) ) . '</li>'; // @codingStandardsIgnoreLine
			}
			?>
		</ul>
	<?php endif; ?>
    </div>
    <p>

        <?
        $cart_totals_arr = WC()->cart->get_totals();
        $cart_half_sum = (int)$cart_totals_arr['cart_contents_total'] * 0.5;
        $user_bonus = get_user_bonus();
        if( $user_bonus > $cart_half_sum ) {
            WC()->session->set('bonus_fee', $cart_half_sum );
            ?>
            <label id="bonus_lable" for="order_bonus" data-bonus="<? echo ($_COOKIE["check_order_bonus"] === "true") ? 'checked' : ''; ?>">
                Использовать накопленные бонусы: <? echo ($cart_half_sum ) . " из ( " .$user_bonus. "р. )"; ?>
            </label>
            <?
        }else{
            WC()->session->set('bonus_fee', $user_bonus );
            ?>
            <label id="bonus_lable" for="order_bonus" data-bonus="<? echo ($_COOKIE["check_order_bonus"] === "true") ? 'checked' : ''; ?>">
                Использовать накопленные бонусы: <? echo "( {$user_bonus}р. )"; ?>
            </label>
            <?
        }
        ?>

    </p>

    <?php wc_get_template( 'checkout/terms.php' ); ?>
</div>

<?php
if ( ! is_ajax() ) {
	do_action( 'woocommerce_review_order_after_payment' );
}
