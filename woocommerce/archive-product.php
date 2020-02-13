<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

// СТРАНИЦА КАТЕГОРИИ


defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */

do_action( 'woocommerce_before_main_content' );
;
?>
<!--    <header class="woocommerce-products-header">-->
<!--        --><?php //if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
<!--            <h1  class="woocommerce-products-header__title page-title" style="text-align: center;">ПОЛИСТЕРОЛЬНЫЕ БЛОКИ ИНТЕРНЕТ-МАГАЗИН</h1>-->
<!--        --><?php //endif; ?>
<!--    </header>-->

<?php // название категории если не наглавной странице магазина
$sp_category_id = get_queried_object_id();

if ( $sp_category_id == 0 ) {
	if ( woocommerce_product_loop() ) {

		/**
		 * Hook: woocommerce_before_shop_loop.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 * @hooked woocommerce_result_count - 20
		 * @hooked woocommerce_catalog_ordering - 30
		 */
		do_action( 'woocommerce_before_shop_loop' );
	?>
	
	<?
		woocommerce_product_loop_start();
	
	
		if ( wc_get_loop_prop( 'total' ) ) {
			while ( have_posts() ) {
				the_post();
	
				/**
				 * Hook: woocommerce_shop_loop.
				 *
				 * @hooked WC_Structured_Data::generate_product_data() - 10
				 */
				do_action( 'woocommerce_shop_loop' );
	
				wc_get_template_part( 'content', 'product' );
			}
		}
	
		woocommerce_product_loop_end(); ?>

		<?php
		/**
		 * Hook: woocommerce_after_shop_loop.
		 *
		 * @hooked woocommerce_pagination - 10
		 */
		do_action( 'woocommerce_after_shop_loop' );
	} else {
		/**
		 * Hook: woocommerce_no_products_found.
		 *
		 * @hooked wc_no_products_found - 10
		 */
		do_action( 'woocommerce_no_products_found' );
	}
	// $sp_category_id == 0 end
} else { ?>
	<h1><?php echo get_queried_object()->name; ?></h1>
	<?php
	woocommerce_product_loop_start();
	$category = $sp_category_id;

	$category_query_args = array(
		'taxonomy'  => 'product_cat',
		'terms'     =>  $category,
		'operator'  => 'IN'
	);
	
	$args_general = array(
		// sp_filter_wc_per_page объявлена в functions.php
		'posts_per_page'=> -1,
		'post_type'		=> 'product',
		'offset'        => 0,
		'tax_query'     => array( 
			'category' => array(
				$category_query_args
			),
		),
	);

	$loop_general = new WP_Query( $args_general );

	$args = array( 
		// sp_filter_wc_per_page объявлена в functions.php
		'posts_per_page'=> $GLOBALS['sp_filter_wc_per_page'],
		'post_type'		=> 'product',
		'offset'        => 0,
		'tax_query'     => array( 
			'category' => array(
				$category_query_args
			),
		),
	);

	$loop = new WP_Query( $args );

    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
            woocommerce_get_template_part( 'content', 'product' );
        endwhile; ?>
        
    <?php } else {
        echo __( 'No products found' );
	}
	woocommerce_product_loop_end();

} ?>

<?php 
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
?>

    <div class="bottom-margin">
        <?php
        $myhome = '<img src="' . get_bloginfo('template_url') . '/img/kroshka.png" alt="img">';
        if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('&nbsp;&gt;&gt;&nbsp;', array('home' => $myhome) );
        ?>
    </div>

<?
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */

get_footer( 'shop' );


