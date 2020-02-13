
<section>
    <?
        $slug = get_field('car1-slug', 'options');
        $theCatId = get_term_by( 'slug', $slug, 'product_cat' );
        $id = $theCatId->term_id;
    ?>
    <div class="container">

        <h2 class="h2-main mt-5 mb-5"><a href="<? echo get_category_link($id) ?>"><? the_field('car1-title', 'options'); ?></a></h2>
<div class="bloki flex between">
            <div class="change flex left-btn-sl1">
                <div  class="prev n flex"><img src="<? bloginfo( 'template_url' ); ?>/img/slider-l.png" alt="img"></div>
                <div  class="prev-a n flex"><img id="js-prev" src="<? bloginfo( 'template_url' ); ?>/img/slider-l-n.png" alt="img"></div>
            </div>

    <div class="slider-1">
        <div class="slider1-line">
            <div class="slider-1-line-smal">
                <?
                $args = array( 'post_type' => 'product', 'posts_per_page' => get_field('car1-counts', 'options'),
                    'tax_query' => array( array( 'taxonomy' => 'product_cat', 'field' => 'slug', 'terms' => get_field('car1-slug', 'options') ) ) );
                $loop = new WP_Query( $args );
                $z = count($loop->posts);
                $i = 0;
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) :
                        $loop->the_post();
                        ++$i;
                        get_template_part('template-parts/section', 'prodtemplate');
                        if( $z != $i ) echo ( ($i % 4) == 0 ) ? '</div> <div class="slider-1-line-smal">' : "" ;
                    endwhile;
                } else {
                    echo __( 'No products found' ); }
                wp_reset_postdata();

                ?>
            </div>
        </div>
    </div>

<div class="change flex right-btn-sl1">
                <div  class="next flex"><img src="<? bloginfo( 'template_url' ); ?>/img/slider-r.png" alt="img"></div>
                <div class="next-a flex"><img id="js-next" src="<? bloginfo( 'template_url' ); ?>/img/slider-r-n.png" alt="img"></div>
            </div>
</div>



        <div class="flex txt">
            <p class="last-txt">Найдете аналогичный товар дешевле - мы сделаем скидку 110% от разницы в цене!*</p>
            <a href="<? echo get_category_link($id) ?>" class="last-txt-2">Смотреть все блоки</a>
        </div>
    </div>
</section>