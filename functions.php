<?php

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_theme_support( 'post-thumbnails' );

/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */

add_theme_support( 'wc-product-gallery-slider' );
//add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );

add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 190,
    'gallery_thumbnail_image_width' => 98,
    'single_image_width' => 550,
) );

/*
 * Enable support for custom logo.
 *
 * @since Twenty Fifteen 1.5
 */

wp_deregister_script('jquery');
wp_register_script('jquery',get_template_directory_uri() . "/js/jquery/jquery.js", false);
wp_enqueue_script('jquery');


function poly_script_load(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style('main', get_template_directory_uri() . "/css/main.css");
    wp_enqueue_style('main2', get_template_directory_uri() . "/css/main2.css");
    wp_enqueue_style('main3', get_template_directory_uri() . "/css/main3.css");
    wp_enqueue_style('single-prod', get_template_directory_uri() . "/css/single-prod.css");
    wp_enqueue_style('main', get_template_directory_uri() . "/css/libs/libs.min.css");
    wp_enqueue_style('awesome', get_template_directory_uri() . "/css/fontawesome/css/font-awesome.min.css");
    wp_enqueue_style('custom', get_template_directory_uri() . "/css/custom.css");
    wp_enqueue_style('jquery-ui', "//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css");

    wp_enqueue_script('jquery-ui', "//code.jquery.com/ui/1.12.1/jquery-ui.js", array('jquery'));
    wp_enqueue_script('attrchange', "//cdn.rawgit.com/meetselva/attrchange/master/js/attrchange.js", array('jquery'));
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'));

    wp_enqueue_script('touchSwipe',get_template_directory_uri() . "/js/jquery/jquery.touchSwipe.min.js");
    wp_enqueue_script('myscripts',get_template_directory_uri() . "/js/scripts.js");
    wp_enqueue_script('yandex-map-api',"https://api-maps.yandex.ru/2.1/?apikey=<0d5adbac-b983-473b-94d3-630a0d144de3>&lang=ru_RU", array(), '', true);
    wp_enqueue_script('botstrap-js',get_template_directory_uri() . "/js/bootstrap.min.js");
    wp_enqueue_script('owl-carousel',get_template_directory_uri() . "/js/owl.carousel.min.js");
}

add_action('wp_enqueue_scripts', 'poly_script_load');

add_filter( 'script_loader_tag', 'change_my_script', 10, 3 );

function change_my_script( $tag, $handle, $src ) {
    if ( 'touchSwipe' === $handle || 'myscripts' === $handle ) {
        return str_replace( ' src', ' defer="defer" src', $tag );
    }

    return $tag;
}



add_action('wp_enqueue_scripts','load_script',9);

function load_script() {
    wp_enqueue_script('wc-add-to-cart',get_template_directory_uri().'/js/add-to-cart.js', WC_VERSION, true);
}

if( class_exists('acf') ) {
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title' 	=> 'Страница опций',
            'menu_title'	=> 'Страница опций',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'administrator',
            'redirect'		=> false,
            'update_button'		=> __('Сохранить', 'acf'),
            'updated_message'	=> __("Опции сохранены", 'acf'),
        ));

        acf_add_options_sub_page(array(
            'menu_title' 	=> 'Главная страница',
            'menu_slug'     => 'acf-options-home-content',
            'page_title' 	=> 'Контент для главной страницы',
            'parent_slug'	=> 'theme-general-settings',
            'update_button'		=> __('Сохранить', 'acf'),
            'updated_message'	=> __("Опции сохранены", 'acf'),
        ));

        acf_add_options_sub_page(array(
            'menu_title' 	=> 'Видео',
            'menu_slug'     => 'acf-options-video-content',
            'page_title' 	=> 'Видео контент для сайта',
            'parent_slug'	=> 'theme-general-settings',
            'update_button'		=> __('Сохранить', 'acf'),
            'updated_message'	=> __("Опции сохранены", 'acf'),
        ));

        acf_add_options_sub_page(array(
            'menu_title' 	=> 'Разное',
            'menu_slug'     => 'acf-options-other-content',
            'page_title' 	=> 'Другие блоки контента на главной',
            'parent_slug'	=> 'theme-general-settings',
            'update_button'		=> __('Сохранить', 'acf'),
            'updated_message'	=> __("Опции сохранены", 'acf'),
        ));

        acf_add_options_sub_page(array(
            'menu_title' 	=> 'Карусели',
            'menu_slug'     => 'acf-options-products-carousel',
            'page_title' 	=> 'Настройки каруселей товаров',
            'parent_slug'	=> 'theme-general-settings',
            'update_button'		=> __('Сохранить', 'acf'),
            'updated_message'	=> __("Опции сохранены", 'acf'),
        ));

        acf_add_options_sub_page(array(
            'menu_title' 	=> 'Баннеры',
            'menu_slug'     => 'acf-options-banners-content',
            'page_title' 	=> 'Настройки баннеров',
            'parent_slug'	=> 'theme-general-settings',
            'update_button'		=> __('Сохранить', 'acf'),
            'updated_message'	=> __("Опции сохранены", 'acf'),
        ));

        acf_add_options_sub_page(array(
            'menu_title' 	=> 'Калькуляторы',
            'menu_slug'     => 'acf-options-calcs',
            'page_title' 	=> 'Настройки калькуляторов',
            'parent_slug'	=> 'theme-general-settings',
            'update_button'		=> __('Сохранить', 'acf'),
            'updated_message'	=> __("Опции сохранены", 'acf'),
        ));

    }
}


register_nav_menus(array(
    'mainmenu' => 'Главное меню',
    'sidebarmenu' => 'Меню в сайдбаре',
));

register_sidebars(4, array(
    'name'          => "Меню в подвале-%d",
    'id'            => "sidebar-$i",
    'description'   => '',
    'class'         => '',
    'before_widget' => '',
    'after_widget'  => "\n",
    'before_title'  => '<h6>',
    'after_title'   => "</h6>\n",
) );



class Custom_Walker_Nav_Sidebar_Menu extends Walker_Nav_Menu{

    public function start_el(&$output, $item, $depth=0, $args = array(), $id=0){

        $html = '';
        if($depth == 0){
            $html .= "<h3><a href=\"%s\" class=\"main-a\">%s</a></h3><div class=\"plasic\"><img src=\"%s/img/plas-aside.png\" alt=\"\"></div>";
            $output .= sprintf($html,$item->url,$item->title,get_bloginfo('template_url'));
        }
        if($depth == 1){
            $html .= "<div class=\"p-item flex\">%s<a href=\"%s\" class=\"sec-a\">%s</a>";
            $output .= sprintf($html, wp_get_attachment_image((int)$item->thumbnail_id),$item->url,$item->title);
        }

    }

    public function end_el(&$output, $item, $depth=0, $args = array()){

        $html = '';
        if($depth == 0) {
            $html .= '';
            $output .= $html;
        }
        elseif($depth == 1) {
            $output .= '</div>';
        }

    }

    public function start_lvl(&$output, $depth=0, $args = array(), $id=0){
        if($depth == 0) {
            $output .= '<div class="conteiner-aside-categor">';
        }
    }

    public function end_lvl(&$output, $depth=0, $args = array(), $id=0){
        if($depth == 0) {
            $output .= '</div>';
        }
    }
}


class Custom_Walker_Nav_Menu extends Walker_Nav_Menu{

    public function start_el(&$output, $item, $depth=0, $args = array(), $id=0){

        $html = '';
        if($depth == 0){
            $html .= "<li><a href=\"%s\">%s</a>";
            $output .= sprintf($html,$item->url,$item->title);
        }
        if($depth == 1){
            $html .= "<li><a href=\"%s\">%s</a>";
            $output .= sprintf($html,$item->url,$item->title);
        }

    }

    public function end_el(&$output, $item, $depth=0, $args = array()){

        $html = '';
        if($depth == 0) {
            $html .= '</li><li><img src="%s/img/rombik.png" alt="ромб"></li>';
            $output .= sprintf($html, get_bloginfo('template_url'));
        }
        elseif($depth == 1) {
            $output .= '</li>';
        }

    }

    public function start_lvl(&$output, $depth=0, $args = array(), $id=0){
        if($depth == 0) {
            $output .= '<ul class="sub-menu">';
        }
    }

    public function end_lvl(&$output, $depth=0, $args = array(), $id=0){
        if($depth == 0) {
            $output .= '</ul>';
        }
    }

}


add_shortcode('composition', 'composition_echo');

function composition_echo(){
    $html = '';
    $html .= '<div class="sostav-2 flex between">';
    $html .= '<div class="sostav-item flex-column">';
    $html .= '<p>Полистирол</p>';
    $html .= '<div class="center flex">';
    $html .= '<img id="sostav-img-sec" src="' . get_bloginfo('template_url') . '/img/sostav-1.png" alt="img">';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '<div class="plus">';
    $html .= '<p>+</p>';
    $html .= '</div>';
    $html .= '<div class="sostav-item flex-column">';
    $html .= '<p>Смола древесная омыленная</p>';
    $html .= '<div class="center flex">';
    $html .= '<img id="sostav-img-sec-2" src="' . get_bloginfo('template_url') . '/img/sostav-2.png" alt="img">';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '<div class="plus">';
    $html .= '<p>+</p>';
    $html .= '</div>';
    $html .= '<div class="sostav-item flex-column">';
    $html .= '<p>Цемент</p>';
    $html .= '<div class="center flex">';
    $html .= '<img id="sostav-img-3" src="' . get_bloginfo('template_url') . '/img/sostav-3.png" alt="img">';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '<div class="plus">';
    $html .= '<p>+</p>';
    $html .= '</div>';
    $html .= '<div class="sostav-item flex-column">';
    $html .= '<p>Вода</p>';
    $html .= '<div class="center flex">';
    $html .= '<img src="' . get_bloginfo('template_url') . '/img/sostav-4.png" alt="img">';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '<div class="plus">';
    $html .= '<p>=</p>';
    $html .= '</div>';
    $html .= '<div class="sostav-item flex-column">';
    $html .= '<p>Полистиролбетон</p>';
    $html .= '<div class="center flex">';
    $html .= '<img id="sostav-img-5" src="' . get_bloginfo('template_url') . '/img/sostav-5.png" alt="img">';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';

    return $html;
}

function myTempl_widgets_init() {

    register_sidebar(array(
        'name' => 'mini-basket',
        'id' => 'mini-basket',
        'description' => "мини корзина",
        'before_widget' => '',
        'after_widget' => ''
    ));

    register_sidebar(array(
        'name' => 'viewed_products',
        'id' => 'viewed_products',
        'description' => "Просмотренные товары",
        'before_widget' => '',
        'after_widget' => ''
    ));
}

add_action('widgets_init','myTempl_widgets_init');


add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);

function add_my_currency_symbol( $currency_symbol, $currency ) {

    switch( $currency ) {

        case 'RUB': $currency_symbol = ' руб.'; break;

    }

    return $currency_symbol;

}

require_once 'breadcrumbs.php';

function woocommerce_template_loop_product_title(){
    global $product;
    $link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
    echo '<a href="' . esc_url( $link ) . '" class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . ' main-info-t"><p>' . get_the_title() . '</p></a>';
}

function woocommerce_template_loop_add_to_cart( $args = array() ) {
    global $product;

    if ( $product ) {
        $defaults = array(
            'quantity'   => 1,
            'class'      => implode(
                ' ',
                array_filter(
                    array(
                        'btn-t',
                        'product_type_' . $product->get_type(),
                        $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                        $product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
                    )
                )
            ),
            'attributes' => array(
                'data-product_id'  => $product->get_id(),
                'data-product_sku' => $product->get_sku(),
                'aria-label'       => $product->add_to_cart_description(),
                'rel'              => 'nofollow',
            ),
        );

        $args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );

        if ( isset( $args['attributes']['aria-label'] ) ) {
            $args['attributes']['aria-label'] = wp_strip_all_tags( $args['attributes']['aria-label'] );
        }

        wc_get_template( 'loop/add-to-cart.php', $args );
    }
}

function woocommerce_template_loop_category_title( $category )
{

    ?>
    <h2 class="woocommerce-loop-category__title cat-title">
        <?  echo '<a href="' . esc_url( get_term_link( $category, 'product_cat' ) ) . '">'; ?>
        <?php echo esc_html($category->name); ?>
        </a>
    </h2>

    <?php
}

//function woocommerce_template_loop_product_thumbnail() {
//    echo woocommerce_get_product_thumbnail('woocommerce_thumbnail'); // WPCS: XSS ok.
//}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_before_single_product', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_after_add_to_cart_quantity', 'woocommerce_template_single_price', 1 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40  );
add_action( 'woocommerce_single_product_summary', 'underbuttons_block_singl_product', 55 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );



function underbuttons_block_singl_product(){
    wc_get_template( 'single-product/underbuttons.php' );
}


function woo_tag_list(){
    $args = array( 'hide_empty' => 0 );
    $terms = get_terms('product_tag', $args );
    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
        $term_list = '';
        foreach ( $terms as $term ) {
            $term_list .= '<a href="' . get_term_link( $term ) . '" class="badge badge-pill badge-light"title="'. $term->name .'">' . $term->name . '</a>';
        }
        return $term_list;
    }else{
        return 'Не найдено ни одной метки товаров';
    }
}


add_action( 'wp_footer', 'cart_update_total_script' );
function cart_update_total_script() {
    if (is_cart()) :
        ?>
        <script>
            jQuery('div.woocommerce').on('change', function(){
                jQuery("[name='update_cart']").removeAttr("disabled").trigger("click");
            });
        </script>
    <?php
    endif;
}


add_action( 'wp_footer', 'cart_update_qty_script' );
function cart_update_qty_script() {
	if ( is_cart() ){ ?>
	
			<script>
				$(document).ready(function(){
					$('.plus').on('click', function () {
						var $input =$(this).parent().find('input');
						$input.val(parseInt($input.val()) + 1);
						$input.change();

						})
					$('.minus').on('click', function () {
						var $input =$(this).parent().find('input');
						var count = parseInt($input.val()) - 1;
						count = count < 1 ? 1 : count;
						$input.val(count);
						$input.change();
					})						
				});
			</script>
				<? }
	if ( is_product() ){ ?>
			<script>
				$(document).ready(function(){
					$('.plus').on('click', function () {
						var $input =$('.qty');
						$input.val(parseInt($input.val()) + 1);
						$input.change();
                    })
					$('.minus').on('click', function () {
						var $input =$('.qty');
						var count = parseInt($input.val()) - 1;
						count = count < 1 ? 1 : count;
						$input.val(count);
                        $input.change();
					})

$('.price-total').find('.price').text(  parseInt( $('.qty').val() ) * parseInt( $('.price-retail').find('.price').text() ) );

                    var qty = $('.qty');
					qty.on("change", function () {
                        var sale_price = $('.price-mass').find('.price');
                        var reg_price = $('.price-retail').find('.price');
                        var total_price = $('.price-total').find('.price');
                        if( sale_price.data("count") <= $(this).val() ){
                            $('.price-retail').removeClass('active');
                            $('.price-mass').addClass('active');
                            total_price.text( parseInt($(this).val()) * parseInt(sale_price.text()) );
                        }else {
                            $('.price-retail').addClass('active');
                            $('.price-mass').removeClass('active');
                            total_price.text( parseInt($(this).val()) * parseInt(reg_price.text()) );
                        };
                    })

				});
			</script>
				<?}
};

remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
add_action( 'woocommerce_checkout_before_order_review', 'woocommerce_checkout_payment', 1 );



function woocommerce_cart_totals() {
    wc_get_template( 'cart/cart-totals.php' );
}
	
	
add_filter( 'woocommerce_checkout_fields', 'my_default_address_fields' );
function my_default_address_fields( $fields ){
	unset($fields['billing']['billing_last_name']);
	unset($fields['billing']['billing_city']);
	unset($fields['billing']['billing_state']);
	unset($fields['billing']['billing_postcode']);
	$fields['billing']['billing_email']['priority'] = 5;
	$fields['billing']['billing_email']['placeholder'] = 'Email';
	$fields['billing']['billing_phone']['priority'] = 25;
	$fields['billing']['billing_phone']['placeholder'] = 'Телефон';
    $fields['billing']['billing_first_name']['class'][0] = '';
    $fields['billing']['billing_first_name']['label'] = 'Получатель';
    $fields['billing']['billing_first_name']['placeholder'] = 'Получатель';
    $fields['billing']['billing_address_1']['label'] = 'Адрес доставки';
    $fields['billing']['billing_address_1']['placeholder'] = 'Адрес или точка доставки';
    $fields['order']['order_comments']['label'] = 'Комментарий';
    $fields['order']['order_comments']['placeholder'] = '';
    $fields['order']['order_bonus'] = array(
        'label'     => "Использовать бонус",
        'type'      => 'checkbox',
    );


//    echo "<pre>";
//	print_r($fields);
//    echo "</pre>";

	return $fields;

}


function woocommerce_form_field( $key, $args, $value = null ) {
    $defaults = array(
        'type'              => 'text',
        'label'             => '',
        'description'       => '',
        'placeholder'       => '',
        'maxlength'         => false,
        'required'          => false,
        'autocomplete'      => false,
        'id'                => $key,
        'class'             => array(),
        'label_class'       => array('col-sm-3', 'col-form-label'),
        'input_class'       => array('form-control'),
        'return'            => false,
        'options'           => array(),
        'custom_attributes' => array(),
        'validate'          => array(),
        'default'           => '',
        'autofocus'         => '',
        'priority'          => '',
    );

    $args = wp_parse_args( $args, $defaults );
    $args = apply_filters( 'woocommerce_form_field_args', $args, $key, $value );

    if ( $args['required'] ) {
        $args['class'][] = 'validate-required';
        $required        = '&nbsp;<sup class="required" title="' . esc_attr__( 'required', 'woocommerce' ) . '">*</sup>';
    } else {
        $required = '';
    }

    if ( is_string( $args['label_class'] ) ) {
        $args['label_class'] = array( $args['label_class'] );
    }

    if ( is_null( $value ) ) {
        $value = $args['default'];
    }

    // Custom attribute handling.
    $custom_attributes         = array();
    $args['custom_attributes'] = array_filter( (array) $args['custom_attributes'], 'strlen' );

    if ( $args['maxlength'] ) {
        $args['custom_attributes']['maxlength'] = absint( $args['maxlength'] );
    }

    if ( ! empty( $args['autocomplete'] ) ) {
        $args['custom_attributes']['autocomplete'] = $args['autocomplete'];
    }

    if ( true === $args['autofocus'] ) {
        $args['custom_attributes']['autofocus'] = 'autofocus';
    }

    if ( $args['description'] ) {
        $args['custom_attributes']['aria-describedby'] = $args['id'] . '-description';
    }

    if ( ! empty( $args['custom_attributes'] ) && is_array( $args['custom_attributes'] ) ) {
        foreach ( $args['custom_attributes'] as $attribute => $attribute_value ) {
            $custom_attributes[] = esc_attr( $attribute ) . '="' . esc_attr( $attribute_value ) . '"';
        }
    }

    if ( ! empty( $args['validate'] ) ) {
        foreach ( $args['validate'] as $validate ) {
            $args['class'][] = 'validate-' . $validate;
        }
    }

    $field           = '';
    $label_id        = $args['id'];
    $sort            = $args['priority'] ? $args['priority'] : '';
    $field_container = '<div class="form-group row %1$s" id="%2$s" data-priority="' . esc_attr( $sort ) . '">%3$s</div>';

    switch ( $args['type'] ) {
        case 'country':
            $countries = 'shipping_country' === $key ? WC()->countries->get_shipping_countries() : WC()->countries->get_allowed_countries();

            if ( 1 === count( $countries ) ) {

                $field .= '<strong>' . current( array_values( $countries ) ) . '</strong>';

                $field .= '<input type="hidden" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="' . current( array_keys( $countries ) ) . '" ' . implode( ' ', $custom_attributes ) . ' class="country_to_state" readonly="readonly" />';

            } else {

                $field = '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="country_to_state country_select ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . '><option value="">' . esc_html__( 'Select a country&hellip;', 'woocommerce' ) . '</option>';

                foreach ( $countries as $ckey => $cvalue ) {
                    $field .= '<option value="' . esc_attr( $ckey ) . '" ' . selected( $value, $ckey, false ) . '>' . $cvalue . '</option>';
                }

                $field .= '</select>';

                $field .= '<noscript><button type="submit" name="woocommerce_checkout_update_totals" value="' . esc_attr__( 'Update country', 'woocommerce' ) . '">' . esc_html__( 'Update country', 'woocommerce' ) . '</button></noscript>';

            }

            break;
        case 'state':

            $for_country = isset( $args['country'] ) ? $args['country'] : WC()->checkout->get_value( 'billing_state' === $key ? 'billing_country' : 'shipping_country' );
            $states      = WC()->countries->get_states( $for_country );

            if ( is_array( $states ) && empty( $states ) ) {

                $field_container = '<p class="form-row %1$s" id="%2$s" style="display: none">%3$s</p>';

                $field .= '<input type="hidden" class="hidden" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="" ' . implode( ' ', $custom_attributes ) . ' placeholder="' . esc_attr( $args['placeholder'] ) . '" readonly="readonly" />';

            } elseif ( ! is_null( $for_country ) && is_array( $states ) ) {

                $field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="state_select ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ? $args['placeholder'] : esc_html__( 'Select an option&hellip;', 'woocommerce' ) ) . '">
						<option value="">' . esc_html__( 'Select an option&hellip;', 'woocommerce' ) . '</option>';

                foreach ( $states as $ckey => $cvalue ) {
                    $field .= '<option value="' . esc_attr( $ckey ) . '" ' . selected( $value, $ckey, false ) . '>' . $cvalue . '</option>';
                }

                $field .= '</select>';

            } else {

                $field .= '<input type="text" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" value="' . esc_attr( $value ) . '"  placeholder="' . esc_attr( $args['placeholder'] ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

            }

            break;
        case 'textarea':
            $field .= '<textarea name="' . esc_attr( $key ) . '" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . ( empty( $args['custom_attributes']['rows'] ) ? ' rows="2"' : '' ) . ( empty( $args['custom_attributes']['cols'] ) ? ' cols="5"' : '' ) . implode( ' ', $custom_attributes ) . '>' . esc_textarea( $value ) . '</textarea>';

            break;
        case 'checkbox':
            $field = '<label for="' . esc_attr( $args['id'] ) . '" class="col-sm-3 col-form-label checkbox ' . implode( ' ', $args['label_class'] ) . '" ' . implode( ' ', $custom_attributes ) . '>
						'. $required . $args['label'].'</label><input type="' . esc_attr( $args['type'] ) . '" class="input-checkbox ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="1" ' . checked( $value, 1, false ) . ' /> ' ;

            break;
        case 'text':
        case 'password':
        case 'datetime':
        case 'datetime-local':
        case 'date':
        case 'month':
        case 'time':
        case 'week':
        case 'number':
        case 'email':
        case 'url':
        case 'tel':
            $field .= '<input type="' . esc_attr( $args['type'] ) . '" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '"  value="' . esc_attr( $value ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

            break;
        case 'select':

            $field   = '';
            $options = '';

            if ( ! empty( $args['options'] ) ) {
                foreach ( $args['options'] as $option_key => $option_text ) {
                    if ( '' === $option_key ) {
                        // If we have a blank option, select2 needs a placeholder.
                        if ( empty( $args['placeholder'] ) ) {
                            $args['placeholder'] = $option_text ? $option_text : __( 'Choose an option', 'woocommerce' );
                        }
                        $custom_attributes[] = 'data-allow_clear="true"';
                    }
                    $options .= '<option value="' . esc_attr( $option_key ) . '" ' . selected( $value, $option_key, false ) . '>' . esc_attr( $option_text ) . '</option>';
                }

                $field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="select ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ) . '">
							' . $options . '
						</select>';
            }

            break;

        case 'radio':
            $label_id .= '_' . current( array_keys( $args['options'] ) );

            if ( ! empty( $args['options'] ) ) {
                foreach ( $args['options'] as $option_key => $option_text ) {
                    $field .= '<input type="radio" class="input-radio ' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" value="' . esc_attr( $option_key ) . '" name="' . esc_attr( $key ) . '" ' . implode( ' ', $custom_attributes ) . ' id="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '"' . checked( $value, $option_key, false ) . ' />';
                    $field .= '<label for="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '" class="radio ' . implode( ' ', $args['label_class'] ) . '">' . $option_text . '</label>';
                }
            }

            break;
    }

    if ( ! empty( $field ) ) {
        $field_html = '';

        if ( $args['label'] && 'checkbox' !== $args['type'] ) {
            $field_html .= '<label for="' . esc_attr( $label_id ) . '" class="' . esc_attr( implode( ' ', $args['label_class'] ) ) . '">' . $required . $args['label'] . ':' . '</label>';
        }

        $field_html .= '<div class="woocommerce-input-wrapper col-sm-9">' . $field;

        if ( $args['description'] ) {
            $field_html .= '<span class="description" id="' . esc_attr( $args['id'] ) . '-description" aria-hidden="true">' . wp_kses_post( $args['description'] ) . '</span>';
        }

        $field_html .= '</div>';

        $container_class = esc_attr( implode( ' ', $args['class'] ) );
        $container_id    = esc_attr( $args['id'] ) . '_field';
        $field           = sprintf( $field_container, $container_class, $container_id, $field_html );
    }


    $field = apply_filters( 'woocommerce_form_field_' . $args['type'], $field, $key, $args, $value );


    $field = apply_filters( 'woocommerce_form_field', $field, $key, $args, $value );

    if ( $args['return'] ) {
        return $field;
    } else {
        echo $field; // WPCS: XSS ok.
    }
}


add_filter( 'woocommerce_add_to_cart_fragments', 'update_desctop_cart_fragment' );
function update_desctop_cart_fragment( $fragments ) {
    ob_start(); ?>
    <div class="cart-update korzina flex">

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
                    <p>Итого: <?php echo WC()->cart->get_cart_total(); ?></p>
                    <a href="<? echo wc_get_cart_url(); ?>">Перейти в корзину</a>
                </div>
            </div>
        </div>

    </div>


    <?php	$fragments['div.cart-update'] = ob_get_clean(); // селектор блока обертки
    return $fragments;
}

add_action( 'woocommerce_before_calculate_totals', 'add_custom_price' );

function add_custom_price( $cart_object ) {

    foreach ( $cart_object->cart_contents as $key => $value ) {
        $id = $value['product_id'];
        if ($value['quantity'] >= get_field('sale_qty', 'option') && get_field('mass_price', $id)) {
             $sale_price = get_field('mass_price', $id) ;
             $value['data']->set_price($sale_price);
        }
    }
}

add_image_size( 'gallery_img', 99, 66, true );

add_filter( 'woocommerce_gallery_thumbnail_size', function( $size ) {
    return 'gallery_img';
} );

function woo_in_cart($product_id) {
    foreach(WC()->cart->get_cart() as $key => $val ) {
        $_product = $val['data'];

        if($product_id == $_product->id ) {
            return true;
        }
    }
    return false;
}

function woo_prod_qty($product_id){
    foreach(WC()->cart->get_cart() as $key => $val ) {
        $_product = $val['data'];

        if($product_id == $_product->id ) {
            return $val["quantity"];
        }
    }
    return 0;
}

function get_prod_total_bonus(){
    $total_bonus = 0;
    foreach(WC()->cart->get_cart() as $key => $val ) {
        $_product = $val['data'];
        $qty = $val['quantity'];
        $product_id = $_product->id;
        $total_bonus += ($qty * get_field('bonus', $product_id));
        var_dump($total_bonus);
    }
    return $total_bonus;
}

function get_user_bonus(){
    $cur_user = get_current_user_id();
    return get_field('bonus', "user_{$cur_user}");
}


function add_discount($cart){

    if ( is_admin() && ! defined( 'DOING_AJAX' ) || is_cart() ) {
        return;
    }
    if($_COOKIE["check_order_bonus"] === "true"){

        $bonus_fee =  WC()->session->get('bonus_fee');
        if (isset($bonus_fee)&&!empty($bonus_fee)) {
            if ($bonus_fee > 0)
                $cart->add_fee( 'Использованные бонусы', - $bonus_fee );
        }
    }else {
        WC()->session->set('bonus_fee', 0);
    }
}
add_action( 'woocommerce_cart_calculate_fees', 'add_discount' , 10 );


function add_bonus_in_order($order_id){

    $cur_user = get_current_user_id();
    $user_bonus = get_field('bonus', "user_{$cur_user}");
    $order_bonus = get_prod_total_bonus();
    $minus_user_bonus = $user_bonus - WC()->session->get('bonus_fee');
    update_field('bonus', $minus_user_bonus, "user_{$cur_user}");
    update_field('order_bonus', $order_bonus, $order_id);
}
add_action( 'woocommerce_new_order', 'add_bonus_in_order' );


function my_func_user_bonus_update(){
    if ( $_POST['post_type'] == "shop_order" ){
        $orderId = $_REQUEST['post_ID'];
        var_dump($orderId);
        $order = new WC_Order( $orderId );
        $currentStatus = $order->status;
        if($currentStatus === 'completed'){
            $cur_user = get_current_user_id();
            $user_bonus = get_field('bonus', "user_{$cur_user}");
            $order_bonus = get_field('order_bonus', $orderId);
            update_field('bonus', ($user_bonus + $order_bonus), "user_{$cur_user}");
        }


    }

}
add_action( "woocommerce_order_status_completed", 'my_func_user_bonus_update', 1);



// ШОРТКОД ФИЛЬТР ТОВАРОВ
function sp_filter_shortcode( $atts ) {
 
    // получаю id текущего объекта (категории)
    $category_id = get_queried_object_id();
    
    // Получаю минимальную и максимальную цены
    function get_max_and_min_price() {
        global $wpdb;
    
        $args       = wc()->query->get_main_query()->query_vars;
        $tax_query  = isset( $args['tax_query'] ) ? $args['tax_query'] : array();
        $meta_query = isset( $args['meta_query'] ) ? $args['meta_query'] : array();
    
        if ( ! is_post_type_archive( 'product' ) && ! empty( $args['taxonomy'] ) && ! empty( $args['term'] ) ) {
            $tax_query[] = array(
                'taxonomy' => $args['taxonomy'],
                'terms'    => array( $args['term'] ),
                'field'    => 'slug',
            );
        }
    
        foreach ( $meta_query + $tax_query as $key => $query ) {
            if ( ! empty( $query['price_filter'] ) || ! empty( $query['rating_filter'] ) ) {
                unset( $meta_query[ $key ] );
            }
        }
    
        $meta_query = new WP_Meta_Query( $meta_query );
        $tax_query  = new WP_Tax_Query( $tax_query );
    
        $meta_query_sql = $meta_query->get_sql( 'post', $wpdb->posts, 'ID' );
        $tax_query_sql  = $tax_query->get_sql( $wpdb->posts, 'ID' );
    
        $sql  = "SELECT min( FLOOR( price_meta.meta_value ) ) as min_price, max( CEILING( price_meta.meta_value ) ) as max_price FROM {$wpdb->posts} ";
        $sql .= " LEFT JOIN {$wpdb->postmeta} as price_meta ON {$wpdb->posts}.ID = price_meta.post_id " . $tax_query_sql['join'] . $meta_query_sql['join'];
        $sql .= "   WHERE {$wpdb->posts}.post_type IN ('" . implode( "','", array_map( 'esc_sql', apply_filters( 'woocommerce_price_filter_post_type', array( 'product' ) ) ) ) . "')
            AND {$wpdb->posts}.post_status = 'publish'
            AND price_meta.meta_key IN ('" . implode( "','", array_map( 'esc_sql', apply_filters( 'woocommerce_price_filter_meta_keys', array( '_price' ) ) ) ) . "')
            AND price_meta.meta_value > '' ";
        $sql .= $tax_query_sql['where'] . $meta_query_sql['where'];
    
        $search = WC_Query::get_main_search_query_sql();
        if ( $search ) {
            $sql .= ' AND ' . $search;
        }
    
        $sql = apply_filters( 'woocommerce_price_filter_sql', $sql, $meta_query_sql, $tax_query_sql );
    
        return $wpdb->get_row( $sql ); // WPCS: unprepared SQL ok.
    }
    //применение
    //get_max_and_min_price()->min_price
    //get_max_and_min_price()->max_price
    
    $min_price = get_max_and_min_price()->min_price;
    $max_price = get_max_and_min_price()->max_price;
    ?>

    <div class="sp-filter"> <?php // префикс sp- значит sidebar-products- ?>
        <form id="sp-filter__form" class="sp-filter__form" action="" method="POST">
    
            <div class="sp-filter__price-block">
                <div class="sp-filter__block-title">Стоимость:</div>
                <div class="sp-filter__price-inputs">
                    <label for="amount_min">от <input id="amount_min" class="sp-filter__changing-field" type="text" name="amount_min" /></label>
                    <label for="amount_max">до <input id="amount_max" class="sp-filter__changing-field" type="text" name="amount_max" /> руб.</label>
                </div>
                <div id="slider-range"></div>
            </div>
    
            <div class="sp-filter__sort-block">
                <div class="sp-filter__block-title">Сортировать:</div>
                <div class="sp-filter__sort-buttons">
                    <button type="button" id="sp-filter__sort-by-price" class="theme__link sp-filter__sort-button" data-order="asc"><span>Дешевле </span><img src="<?php echo get_template_directory_uri() . '/img/sort.png'; ?>" /></button>
                    <button type="button" id="sp-filter__sort-by-raiting" class="theme__link sp-filter__sort-button" data-order="desc">По рейтингу</button>
                    <button type="button" id="sp-filter__sort-by-comment_count" class="theme__link sp-filter__sort-button" data-order="desc">По отзывам</button>
                    <button type="button" id="sp-filter__sort-by-hits" class="theme__link sp-filter__sort-button" data-order="desc">Хиты продаж</button>
                </div>
            </div>

            <div class="sp-filter__select-block">
                <div class="sp-filter__select-type">
                    <div class="sp-filter__select-title">Тип:</div>
                    <select class="sp-filter__changing-field">
    
                        <?php // Получаю значения атрибута "Тип"
                            $tax = 'pa_product_type';
                            $pa_args = get_terms( $tax, array(
                                'hide_empty' => false,
                                )
                            ); ?>
                            <option value="">---------</option>
    
                            <?php // Вывожу значения
                            foreach ( $pa_args as $value ) { ?>
                                <option id="atrribute_<?php echo $value->slug; ?>_<?php echo $value->term_id; ?>" value="<?php echo $value->slug; ?>"><?php echo $value->name; ?></option>
                            <?php }
                        ?>
                        
                    </select>
                </div>
                <div class="sp-filter__select-density">
                    <div class="sp-filter__select-title">Плотность:</div>
                    <select class="sp-filter__changing-field">
                        <option value="">---------</option>
                        <?php // Получаю значения атрибута "Плотность"
                            $tax = 'pa_product_solidity';
                            $pa_args = get_terms( $tax, array(
                                'hide_empty' => false,
                                )
                            );
                            // Вывожу значения
                            foreach ( $pa_args as $value ) { ?>
                                <option id="atrribute_<?php echo $value->slug; ?>_<?php echo $value->term_id; ?>" value="<?php echo $value->slug; ?>"><?php echo $value->name; ?></option>
                            <?php }
                        ?>
                    </select>
                </div>
                <div class="sp-filter__select-size">
                    <div class="sp-filter__select-title">Размеры:</div>
                    <select class="sp-filter__changing-field">
                        <option value="">---------</option>
                        <?php // Получаю значения атрибута "Размеры"
                            $tax = 'pa_product_size';
                            $pa_args = get_terms( $tax, array(
                                'hide_empty' => false,
                                )
                            );
                            // Вывожу значения
                            foreach ( $pa_args as $value ) { ?>
                                <option id="atrribute_<?php echo $value->slug; ?>_<?php echo $value->term_id; ?>" value="<?php echo $value->slug; ?>"><?php echo $value->name; ?></option>
                            <?php }
                        ?>
                    </select>
                </div>
    
            </div>
        </form>
    
    </div><!-- sp-filter -->

    <script>
    // при загрузке перемещаю фильтр в сайдбар
    jQuery(function() {
        $(document).ready(function() {
            $('.sp-filter').appendTo('.sp-filter_wrapper');
        });
    });
    </script>

    <?php // Блок "Стоимость". Инпуты и ползунок сделан с помощью jQuery UI ?>
    
    <script>
    $( function() {
        $( '#slider-range' ).slider({
            range: true,
            min: <?php echo $min_price; ?>, // минимальное значение в цены
            max: <?php echo $max_price; ?>, // максимальное значение в цены
            values: [ <?php echo $min_price; ?>, <?php echo $max_price; ?> ], // значения при загрузке страницы (минимальное и максимальное)
            slide: function( event, ui ) {
                $( '#amount_min' ).val(ui.values[ 0 ] );
                $( '#amount_max' ).val(ui.values[ 1 ] );

                $( '#amount_min' ).attr( 'value', $( '#amount_min' ).val() );
                $( '#amount_max' ).attr( 'value', $( '#amount_max' ).val() );
            }
        });
        $( '#amount_min' ).val( $( '#slider-range' ).slider( 'values', 0 ) );
        $( '#amount_max' ).val( $( '#slider-range' ).slider( 'values', 1 ) );
    
        // Изменение местоположения ползунка при вводиде данных в первый input
        $('#amount_min').change(function() {
            var price_min = $('#amount_min').val();
            var price_max = $('#amount_max').val();
            if ( parseInt(price_min) > parseInt(price_max) ) {
                price_min = price_max;
                $('#amount_min').val(price_min);
            }
            $('#slider-range').slider('values', 0, price_min);	
        });
                
        // Изменение местоположения ползунка при вводиде данных во второй input 	
        $('#amount_max').change(function() {
            var price_min = $('#amount_min').val();
            var price_max = $('#amount_max').val();
    
            if ( parseInt(price_min) > parseInt(price_max) ) {
                price_max = price_min;
                $('#amount_max').val(price_max);
            }
            $('#slider-range').slider('values', 1 ,price_max);
        });
        
        // фильтрация ввода в поля
        $('#amount_min, #amount_max').keypress( function(event) {
            var key, keyChar;
            if (!event) var event = window.event;
                    
            if (event.keyCode) key = event.keyCode;
            else if(event.which) key = event.which;
                
            if ( key==null || key==0 || key==8 || key==13 || key==9 || key==46 || key==37 || key==39 ) return true;
            keyChar = String.fromCharCode(key);
                    
            if(!/\d/.test(keyChar))	return false;
        }); 

        // добавляю кнопку "загрузить еще" после блока "bloki"
        $('.bloki').after('<div class="sp_filter__load-more-wrapper"><button id="sp_filter__load-more" class="btn-t" type="button">Загрузить еще</button></div>');

        // СОРТИРОВКА ПО ЦЕНЕ
        var sp_sort_by_price = $('#sp-filter__sort-by-price');
        sp_sort_by_price.click(function() {

            if ( $('#sp-filter__sort-by-price').attr('data-order') == 'asc' ) {
                $('div[data-price]').sort(function (a, b) {
                    return parseInt($(a).attr('data-price'), 10) < parseInt($(b).attr('data-price'), 10) ? -1: 1;
                }).appendTo('.bloki');
                sp_sort_by_price.attr('data-order', 'desc');
                // в обратном порядке
            } else if ( $('#sp-filter__sort-by-price').attr('data-order') == 'desc' ) {
                $('div[data-price]').sort(function (a, b) {
                    return parseInt($(a).attr('data-price'), 10) > parseInt($(b).attr('data-price'), 10) ? -1: 1;
                }).appendTo('.bloki');
                sp_sort_by_price.attr('data-order', 'asc');
            }
            
        });

        // СОРТИРОВКА ПО РЕЙТИНГУ
        var sp_sort_by_raiting = $('#sp-filter__sort-by-raiting');
        sp_sort_by_raiting.click(function() {

            if ( $('#sp-filter__sort-by-raiting').attr('data-order') == 'desc' ) {
                $('div[data-rating]').sort(function (a, b) {
                    return parseInt($(a).attr('data-rating'), 10) > parseInt($(b).attr('data-rating'), 10) ? -1: 1;
                }).appendTo('.bloki');
                sp_sort_by_raiting.attr('data-order', 'asc');
                // в обратном порядке
            } else if ( $('#sp-filter__sort-by-raiting').attr('data-order') == 'asc' ) {
                $('div[data-rating]').sort(function (a, b) {
                    return parseInt($(a).attr('data-rating'), 10) < parseInt($(b).attr('data-rating'), 10) ? -1: 1;
                }).appendTo('.bloki');
                sp_sort_by_raiting.attr('data-order', 'desc');
            }
            
        });

        // СОРТИРОВКА ПО КОММЕНТАРИЯМ
        var sp_sort_by_comment = $('#sp-filter__sort-by-comment_count');
        sp_sort_by_comment.click(function() {

            if ( $('#sp-filter__sort-by-comment_count').attr('data-order') == 'desc' ) {
                $('div[data-comments]').sort(function (a, b) {
                    return parseInt($(a).attr('data-comments'), 10) > parseInt($(b).attr('data-comments'), 10) ? -1: 1;
                }).appendTo('.bloki');
                sp_sort_by_comment.attr('data-order', 'asc');
                // в обратном порядке
            } else if ( $('#sp-filter__sort-by-comment_count').attr('data-order') == 'asc' ) {
                $('div[data-comments]').sort(function (a, b) {
                    return parseInt($(a).attr('data-comments'), 10) < parseInt($(b).attr('data-comments'), 10) ? -1: 1;
                }).appendTo('.bloki');
                sp_sort_by_comment.attr('data-order', 'desc');
            }

        });

        // СОРТИРОВКА ПО ПРОДАЖАМ
        var sp_sort_by_hits = $('#sp-filter__sort-by-hits');
        sp_sort_by_hits.click(function() {

            if ( $('#sp-filter__sort-by-hits').attr('data-order') == 'desc' ) {
                $('div[data-sell]').sort(function (a, b) {
                    return parseInt($(a).attr('data-sell'), 10) > parseInt($(b).attr('data-sell'), 10) ? -1: 1;
                }).appendTo('.bloki');
                sp_sort_by_hits.attr('data-order', 'asc');
                // в обратном порядке
            } else if ( $('#sp-filter__sort-by-hits').attr('data-order') == 'asc' ) {
                $('div[data-sell]').sort(function (a, b) {
                    return parseInt($(a).attr('data-sell'), 10) < parseInt($(b).attr('data-sell'), 10) ? -1: 1;
                }).appendTo('.bloki');
                sp_sort_by_hits.attr('data-order', 'desc');
            }

        });

        // AJAX запрос при изменении полей
        $('.sp-filter__changing-field').change(function() {
            let price_min       = $('#amount_min').val();
            let price_max       = $('#amount_max').val();
            let type            = $('.sp-filter__select-type select option:selected').val();
            let density         = $('.sp-filter__select-density select option:selected').val();
            let size            = $('.sp-filter__select-size select option:selected').val();

            let productsOnPage  = $('.block-item-t').length;

            $.ajax({
                url:        '<?php echo admin_url("admin-ajax.php") ?>',
                type:       'POST',
                data: {
                    action:         'product_filter',
                    'price_min':    price_min,
                    'price_max':    price_max,
                    'type':         type,
                    'density':      density,
                    'size':         size,
                    'productsOnPage':         productsOnPage,
                },
                success: function(data) {
                    $('.bloki').html(data);
                }
            });
        }); // change function

        // AJAX запрос при изменении цены
        $('.sp-filter__price-block .ui-slider-handle').on('mouseover mousedown mouseleave',function() {
                let price_min       = $('#amount_min').val();
                let price_max       = $('#amount_max').val();
                let type            = $('.sp-filter__select-type select option:selected').val();
                let density         = $('.sp-filter__select-density select option:selected').val();
                let size            = $('.sp-filter__select-size select option:selected').val();

                let productsOnPage  = $('.block-item-t').length;

                $.ajax({
                    url:        '<?php echo admin_url("admin-ajax.php") ?>',
                    type:       'POST',
                    data: {
                        action:         'product_filter',
                        'price_min':    price_min,
                        'price_max':    price_max,
                        'type':         type,
                        'density':      density,
                        'size':         size,
                        'productsOnPage':         productsOnPage,
                    },
                    success: function(data) {
                        $('.bloki').html(data);
                    }
                });
        });

        

        // AJAX запрос при клике "Загрузить еще"
        $('#sp_filter__load-more').click(function() {
            let price_min       = $('#amount_min').val();
            let price_max       = $('#amount_max').val();
            let type            = $('.sp-filter__select-type select option:selected').val();
            let density         = $('.sp-filter__select-density select option:selected').val();
            let size            = $('.sp-filter__select-size select option:selected').val();

            let productsOnPage  = $('.block-item-t').length;

            $.ajax({
                url:        '<?php echo admin_url("admin-ajax.php") ?>',
                type:       'POST',
                data: {
                    action:         'product_load_more',
                    'price_min':    price_min,
                    'price_max':    price_max,
                    'type':         type,
                    'density':      density,
                    'size':         size,
                    'productsOnPage':         productsOnPage,
                },
                success: function(data) {
                    $('.block-item-t:last').after( data );
                }
            });
        }); // change function


    });
    </script>
    <?php 

}
add_shortcode( 'sp_filter', 'sp_filter_shortcode' );
// ШОРТКОД ФИЛЬТР ТОВАРОВ. КОНЕЦ



// изменяю количество товаров на странице
$sp_filter_wc_per_page = 20;
add_filter("loop_shop_per_page", create_function("$cols", "return $sp_filter_wc_per_page;"), 20);




// AJAX для фильтра товаров 
add_action( 'wp_ajax_nopriv_product_filter', 'product_filter_func' );
add_action( 'wp_ajax_product_filter', 'product_filter_func' );
function product_filter_func() {

    $category_id = get_queried_object_id();

    // получаю значения
    $price_min  = $_POST['price_min'];
    $price_max  = $_POST['price_max'];
    $type       = $_POST['type'];
    $density    = $_POST['density'];
    $size       = $_POST['size'];
    $offset     = $_POST['productsOnPage'];
    $category   = $category_id;

    // если тип не выбран - тип не учитывается
    if ( !empty($type) ) {

        $type_query_args = array(
            'taxonomy'  => 'pa_product_type',
            'field'     => 'slug',
            'terms'     =>  array($type),
            'operator'  => 'IN'
        );
    } 
    if ( !empty($density) ) {

        $density_query_args = array(
            'taxonomy'  => 'pa_product_solidity',
            'field'     => 'slug',
            'terms'     =>  array($density),
            'operator'  => 'IN'
        );
    } 
    if ( !empty($size) ) {

        $size_query_args = array(
            'taxonomy'  => 'pa_product_size',
            'field'     => 'slug',
            'terms'     =>  array($size),
            'operator'  => 'IN'
        );
    } 
    if ( !empty($category) ) {

        $category_query_args = array(
            'taxonomy'  => 'product_cat',
            'terms'     =>  $category,
            'operator'  => 'IN'
        );
    }



    // $args_general = array( 
    //     'posts_per_page'=> -1,
    //     'post_type'		=> 'product',
    //     'offset'        => $offset,
    //     'meta_query'    => array(
    //         'price' => array(
    //             'key'     => '_price',
    //             'value'   => array($price_min, $price_max),
    //             'compare' => 'BETWEEN',
    //         )
    //     ),
    //     'tax_query'     => array( 
    //         'type' => array(
    //             $type_query_args
    //         ),
    //         'density' => array(
    //             $density_query_args
    //         ),
    //         'size' => array(
    //             $size_query_args
    //         ),
    //         'category' => array(
    //             $category_query_args
    //         ),
    //     ),
    // );

	// $loop_general = new WP_Query( $args_general );

    // $product_count_general = count($loop_general->posts);




    $args = array( 
        'posts_per_page'=> $GLOBALS['sp_filter_wc_per_page'],
        'post_type'		=> 'product',
        'offset'        => 0,
        'meta_query'    => array(
            'price' => array(
                'key'     => '_price',
                'value'   => array($price_min, $price_max),
                'compare' => 'BETWEEN',
            )
        ),
        'tax_query'     => array( 
            'type' => array(
                $type_query_args
            ),
            'density' => array(
                $density_query_args
            ),
            'size' => array(
                $size_query_args
            ),
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
        
        <script>
        jQuery(function() {
            $('#sp_filter__load-more').show();
        });
        </script>
 
    <?php } else { ?>
        <script>
        jQuery(function() {
            $('#sp_filter__load-more').hide();
        });
        </script>
    <?php /* echo __( 'No products found' ); */ }
    wp_reset_postdata();
    wp_die();

} 

// AJAX Загрузить еще 
add_action( 'wp_ajax_nopriv_product_load_more', 'product_load_more_func' );
add_action( 'wp_ajax_product_load_more', 'product_load_more_func' );
function product_load_more_func() {

    $category_id = get_queried_object_id();

    // получаю значения
    $price_min  = $_POST['price_min'];
    $price_max  = $_POST['price_max'];
    $type       = $_POST['type'];
    $density    = $_POST['density'];
    $size       = $_POST['size'];
    $offset     = $_POST['productsOnPage'];
    $category   = $category_id;

    // если тип не выбран - тип не учитывается
    if ( !empty($type) ) {

        $type_query_args = array(
            'taxonomy'  => 'pa_product_type',
            'field'     => 'slug',
            'terms'     =>  array($type),
            'operator'  => 'IN'
        );
    } 
    if ( !empty($density) ) {

        $density_query_args = array(
            'taxonomy'  => 'pa_product_solidity',
            'field'     => 'slug',
            'terms'     =>  array($density),
            'operator'  => 'IN'
        );
    } 
    if ( !empty($size) ) {

        $size_query_args = array(
            'taxonomy'  => 'pa_product_size',
            'field'     => 'slug',
            'terms'     =>  array($size),
            'operator'  => 'IN'
        );
    } 
    if ( !empty($category) ) {

        $category_query_args = array(
            'taxonomy'  => 'product_cat',
            'terms'     =>  $category,
            'operator'  => 'IN'
        );
    }



    // $args_general = array( 
    //     'posts_per_page'=> -1,
    //     'post_type'		=> 'product',
    //     'offset'        => $offset,
    //     'meta_query'    => array(
    //         'price' => array(
    //             'key'     => '_price',
    //             'value'   => array($price_min, $price_max),
    //             'compare' => 'BETWEEN',
    //         )
    //     ),
    //     'tax_query'     => array( 
    //         'type' => array(
    //             $type_query_args
    //         ),
    //         'density' => array(
    //             $density_query_args
    //         ),
    //         'size' => array(
    //             $size_query_args
    //         ),
    //         'category' => array(
    //             $category_query_args
    //         ),
    //     ),
    // );

	// $loop_general = new WP_Query( $args_general );

    // $product_count_general = count($loop_general->posts);



    $args = array( 
        'posts_per_page'=> $GLOBALS['sp_filter_wc_per_page'],
        'post_type'		=> 'product',
        'offset'        => $offset,
        'meta_query'    => array(
            'price' => array(
                'key'     => '_price',
                'value'   => array($price_min, $price_max),
                'compare' => 'BETWEEN',
            )
        ),
        'tax_query'     => array( 
            'type' => array(
                $type_query_args
            ),
            'density' => array(
                $density_query_args
            ),
            'size' => array(
                $size_query_args
            ),
            'category' => array(
                $category_query_args
            ),
        ),
    );



    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        $product_counter = 0;
        while ( $loop->have_posts() ) : $loop->the_post();
            woocommerce_get_template_part( 'content', 'product' );
        endwhile; ?>

        <script>
        jQuery(function() {
            $('#sp_filter__load-more').show();
        });
        </script>

    <?php } else { ?>
        <script>
        jQuery(function() {
            $('#sp_filter__load-more').hide();
        });
        </script>
    <?php /* echo __( 'No products found' ); */ }
    wp_reset_postdata();
    wp_die();

}

add_action( 'wp_enqueue_scripts', 'myajax_data', 99 );
function myajax_data(){

   wp_localize_script( 'myscripts', 'myajax',
        array(
            'url' => admin_url('admin-ajax.php')
        )
    );

}

add_action( 'wp_ajax_nopriv_block_calc_email', 'block_calc_email_func' );
add_action( 'wp_ajax_block_calc_email', 'block_calc_email_func' );

function block_calc_email_func(){

    $adminMail = get_option('admin_email');
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $calc_1 = $_POST['calc_1'];
    $calc_2 = $_POST['calc_2'];

    $massege = '';
    $massege .= 'Имя: ' . $name . "\n";
    $massege .= 'Контатная информация: телефон - ' . $phone . ', почта - ' . $email . "\n";
    $massege .= 'Адрес доставки: ' . $address  . "\n";
    $massege .= 'Данные калькулятора №1: ' . $calc_1  . "\n";
    $massege .= 'Данные калькулятора №2: ' . $calc_2  . "\n";

    wp_mail($adminMail, 'Калькулятор блоков', $massege);

    return -1;

    wp_die();
}
