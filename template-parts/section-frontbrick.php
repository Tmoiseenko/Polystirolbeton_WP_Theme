<?php
$slug = get_field('car2-slug', 'options');
$theCatId = get_term_by( 'slug', $slug, 'product_cat' );
$id = $theCatId->term_id;
?>
<section>
    <div class="container">

        <h2 class="h2-next mt-5 mb-5"><a href="<? echo get_category_link($id); ?>"><? the_field('car2-title', 'options'); ?></a></h2>
        <div class="bloki flex between">
            <div class="change flex left-btn-sl2">
                <div class="prev n flex"><img src="<? bloginfo( 'template_url' ); ?>/img/slider-l.png" alt="img"></div>
                <div class="prev-a n flex"><img id="js2-prev" src="<? bloginfo( 'template_url' ); ?>/img/slider-l-n.png" alt="img"></div>
            </div>

            <div class="slider-2">
                <div class="slider2-line">
                    <div class="slider-2-line-smal">
                        <?
                        $args = array( 'post_type' => 'product', 'posts_per_page' => get_field('car2-count', 'options'),
                            'tax_query' => array( array( 'taxonomy' => 'product_cat', 'field' => 'slug', 'terms' => get_field('car2-slug', 'options') ) ) );
                        $loop = new WP_Query( $args );
                        $z = count($loop->posts);
                        $k = 0;
                        if ( $loop->have_posts() ) {
                            while ( $loop->have_posts() ) :
                                $loop->the_post();
                                ++$k;
                                get_template_part('template-parts/section', 'prodtemplate');
                                if( $z != $k ) echo ( ( $k % 4 == 0 ) ? '</div> <div class="slider-2-line-smal">' : "" );
                            endwhile;
                        } else {
                            echo __( 'No products found' ); }
                        wp_reset_postdata();

                        ?>
                    </div>
                </div>
            </div>

            <div class="change flex right-btn-sl2">
                <div class="next flex"><img src="<? bloginfo( 'template_url' ); ?>/img/slider-r.png" alt="img"></div>
                <div class="next-a flex"><img id="js2-next" src="<? bloginfo( 'template_url' ); ?>/img/slider-r-n.png" alt="img"></div>
            </div>
        </div>
        <div class="flex txt-2">
            <a href="<? echo get_category_link($id); ?>" class="last-txt-2">Смотреть все кирпичи</a>
        </div>
        <div class="br">
            <img src="<? bloginfo( 'template_url' ); ?>/img/br.png" alt="img">
        </div>
        <div class="price-p flex column">
            <div class="main-price flex">
                <h3>Получить прайс на всю продукцию</h3>
                <img src="<? bloginfo( 'template_url' ); ?>/img/exel.png" alt="price">
            </div>
            <div class="form-price flex column">

                <? echo do_shortcode('[contact-form-7 id="238" title="Получить прайс"]'); ?>

            </div>
        </div>
    </div>
</section>
