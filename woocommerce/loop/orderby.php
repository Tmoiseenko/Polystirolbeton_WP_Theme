<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="buy-content">
    <!-- <form class="buy-form flex between">
        <p>Тип</p>
        <select>
            <option value="1">-----------------</option>
            <option value="2">Рядовой</option>
            <option value="3">Фасадный</option>
            <option value="4">Фасадный угловой</option>
            <option value="5">Перегородный</option>
        </select>
        <p>Плотность</p>
        <select>
            <option value="1">-----</option>
            <option value="2">D150</option>
            <option value="3">D200</option>
            <option value="4">D250</option>
            <option value="5">D300</option>
            <option value="6">D350</option>
            <option value="7">D400</option>
            <option value="8">D450</option>
            <option value="9">D500</option>
        </select>
        <p>Размеры блока</p>
        <select>
            <option value="1">---------------------</option>
            <option value="2">600x300x200 мм</option>
            <option value="3">300х300х200 мм</option>
            <option value="4">300х300х100 мм</option>
        </select>
    </form>
    <div class="sortirovka flex">
        <p>Сортировать:</p>
        <a href="">По цене</a>
        <img src="<? bloginfo('template_url'); ?>/img/sort.png" alt="img">
        <a href="">По рейтингу</a>
    </div> -->
</div>


<!-- <form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby" aria-label="<?php esc_attr_e( 'Shop order', 'woocommerce' ); ?>">
		<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
			<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
		<?php endforeach; ?>
	</select>
	<input type="hidden" name="paged" value="1" />
	<?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
</form> -->
