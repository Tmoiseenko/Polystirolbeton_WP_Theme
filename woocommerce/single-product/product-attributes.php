<?php
/**
 * Product attributes
 *
 * Used by list_attributes() in the products class.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-attributes.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;
$i = 1;


if ( ! $product_attributes ) {
	return;
}
?>
<div class="woocommerce-product-attributes shop_attributes ">
	<?php foreach ( $product_attributes as $product_attribute_key => $product_attribute ) : ?>
		<div class="d-flex flex-row <? if ( ($i % 2) == 0 ) echo " bg-gray "?> justify-content-around woocommerce-product-attributes-item woocommerce-product-attributes-item--<?php echo esc_attr( $product_attribute_key ); ?>">
			<div class="woocommerce-product-attributes-item__label  align-self-center w-300"><?php echo wp_kses_post( $product_attribute['label'] ); ?></div>
			<div class="woocommerce-product-attributes-item__value text-right  w-200"><?php echo wp_kses_post( $product_attribute['value'] ); ?></div>
		</div>
	<?php
    $i++;
    endforeach; ?>
</div>
