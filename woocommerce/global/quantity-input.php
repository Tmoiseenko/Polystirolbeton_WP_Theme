<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
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

if ( $max_value && $min_value === $max_value ) {
	?>
	<div class="quantity hidden">
		<input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	</div>
	<?php
} else {
	/* translators: %s: Quantity. */
	$label = ! empty( $args['product_name'] ) ? sprintf( __( '%s quantity', 'woocommerce' ), wp_strip_all_tags( $args['product_name'] ) ) : __( 'Quantity', 'woocommerce' );
	?>

<? if ( is_cart() || is_checkout() ) { ?>
        <p class="quantity-product<? if (is_product()) echo " d-none"; ?>">
            <span class="qty-div d-flex flex-row justify-content-center">
                            <input
                                    type="number"
                                    id="<?php echo esc_attr($input_id); ?>"
                                    class="<?php echo esc_attr(join(' ', (array)$classes)); ?>"
                                    step="<?php echo esc_attr($step); ?>"
                                    min="<?php echo esc_attr($min_value); ?>"
                                    max="<?php echo esc_attr(0 < $max_value ? $max_value : ''); ?>"
                                    name="<?php echo esc_attr($input_name); ?>"
                                    value="<?php echo esc_attr($input_value); ?>"
                                    title="<?php echo esc_attr_x('Qty', 'Product quantity input tooltip', 'woocommerce'); ?>"
                                    size="4"
                                    inputmode="<?php echo esc_attr($inputmode); ?>"/>
									<span class="ml-2">шт</span>
            </span>
        </p>
        <?php
    }elseif (is_product()){
    ?>

        <p class="quantity-product d-flex flex-row justify-content-between">
            <span>1.5т /2 подд./ 1.057м3</span>
            <span class="qty-div d-flex flex-row">
							<i class="fa fa-plus plus" aria-hidden="true"></i>
                            <input
                                    type="number"
                                    id="<?php echo esc_attr($input_id); ?>"
                                    class="<?php echo esc_attr(join(' ', (array)$classes)); ?>"
                                    step="<?php echo esc_attr($step); ?>"
                                    min="1000"
                                    max="<?php echo esc_attr(0 < $max_value ? $max_value : ''); ?>"
                                    name="<?php echo esc_attr($input_name); ?>"
                                    value="<?php echo esc_attr($input_value); ?>"
                                    title="<?php echo esc_attr_x('Qty', 'Product quantity input tooltip', 'woocommerce'); ?>"
                                    size="4"
                                    inputmode="<?php echo esc_attr($inputmode); ?>"/>
                            <i  class="fa fa-minus minus" aria-hidden="true"></i>
            </span>
        </p>



        <?
    }
}
