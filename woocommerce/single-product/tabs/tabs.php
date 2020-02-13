<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>
</div>

    <nav class="tab-container">
        <div class="nav nav-tabs justify-content-center mb-5" id="nav-tab" role="tablist">
            <?php foreach ( $tabs as $key => $tab ) : ?>
<!--            --><?// echo $key; ?>

                <a class="nav-item nav-link <? if($key == 'additional_information') echo 'active';?>" id="nav-<? echo $key; ?>-tab" data-toggle="tab" href="#nav-<? echo $key; ?>" role="tab" aria-controls="nav-<? echo $key; ?>" aria-selected="true">
                    <span><?php echo ($key == 'additional_information') ?  'Характеристики' : apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></span>
                </a>
            <?php endforeach; ?>
            <a class="nav-item nav-link " id="nav-payment-tab" data-toggle="tab" href="#nav-payment" role="tab" aria-controls="nav-payment" aria-selected="true">
                <span>Оплата</span>
            </a>
            <a class="nav-item nav-link " id="nav-delivery-tab" data-toggle="tab" href="#nav-delivery" role="tab" aria-controls="nav-delivery" aria-selected="true">
                <span>Доставка</span>
            </a>
            <a class="nav-item nav-link " id="nav-warranty-tab" data-toggle="tab" href="#nav-warranty" role="tab" aria-controls="nav-warranty" aria-selected="true">
                <span>Гарантия</span>
            </a>
        </div>
    </nav>
<div сlass="container">
    <div class="tab-content container" id="nav-tabContent">
        <?php foreach ( $tabs as $key => $tab ) : ?>
            <div class="tab-pane fade show <? if($key == 'additional_information') echo 'active';?>" id="nav-<? echo $key; ?>" role="tabpanel" aria-labelledby="nav-<? echo $key; ?>-tab">
                <?php if ( isset( $tab['callback'] ) ) { call_user_func( $tab['callback'], $key, $tab ); } ?>
            </div>
        <?php endforeach; ?>
        <div class="tab-pane fade show " id="nav-payment" role="tabpanel" aria-labelledby="nav-payment-tab">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dignissimos distinctio dolore doloremque error est eum fugit ipsa magni, maiores modi numquam officiis quod rem sunt tempore ullam ut veniam vero, voluptatibus? Adipisci alias, amet dolor eaque error esse facere illum iste laboriosam necessitatibus rem repellat rerum sapiente sequi temporibus?
        </div>
        <div class="tab-pane fade show " id="nav-delivery" role="tabpanel" aria-labelledby="nav-delivery-tab">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dignissimos distinctio dolore doloremque error est eum fugit ipsa magni, maiores modi numquam officiis quod rem sunt tempore ullam ut veniam vero, voluptatibus? Adipisci alias, amet dolor eaque error esse facere illum iste laboriosam necessitatibus rem repellat rerum sapiente sequi temporibus?
        </div>
        <div class="tab-pane fade show  id="nav-warranty" role="tabpanel" aria-labelledby="nav-warranty-tab">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dignissimos distinctio dolore doloremque error est eum fugit ipsa magni, maiores modi numquam officiis quod rem sunt tempore ullam ut veniam vero, voluptatibus? Adipisci alias, amet dolor eaque error esse facere illum iste laboriosam necessitatibus rem repellat rerum sapiente sequi temporibus?
        </div>
    </div>
</div>
</div>
    <div class="separator">
        <img src="<? bloginfo('template_url'); ?>/img/br.png" alt="">
        <img src="<? bloginfo('template_url'); ?>/img/br.png" alt="">
    </div>

<?php endif; ?>
