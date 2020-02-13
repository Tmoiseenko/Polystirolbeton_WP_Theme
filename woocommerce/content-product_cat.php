<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php // вывод товаров по категориям на главной странице магазина 
do_action( 'woocommerce_shop_loop_subcategory_title', $category );

$args = array( 
    'post_type' => 'product', 
    'posts_per_page' => 6, // было 10
    'tax_query' => array( 
        array( 
            'taxonomy' => 'product_cat', 
            'field' => 'id', 
            'terms' => $category->cat_ID 
        ) 
    ) 
);

$loop = new WP_Query( $args );

?>
<?php 

if ( $loop->have_posts() ) {

    while ( $loop->have_posts() ) :
        $loop->the_post();
        wc_get_template_part( 'content', 'product' );
    endwhile;

} else {
    echo __( 'No products found' ); 
}




wp_reset_postdata();


?>
