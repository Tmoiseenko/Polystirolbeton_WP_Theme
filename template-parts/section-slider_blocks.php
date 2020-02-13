
<div class="bloki-2 flex between">
				<div class="change flex left-btn-sl2">
						<div class="prev n flex"><img src="<? bloginfo('template_url'); ?>/img/slider-l.png" alt="img"></div>
						<div class="prev-a n flex"><img id="js3-prev" src="<? bloginfo('template_url'); ?>/img/slider-l-n.png" alt="img"></div>
				</div>

    <div class="slider-2">
        <div class="slider2-line">
            <div class="slider-2-line-smal">
                <?
                $args = array( 'post_type' => 'product', 'posts_per_page' => get_field('car3-count', 'options'),
                    'tax_query' => array( array( 'taxonomy' => 'product_cat', 'field' => 'slug', 'terms' => get_field('car3-slug', 'options') ) ) );
                $loop = new WP_Query( $args );
                $z = count($loop->posts);
                $k = 0;
                if ( $loop->have_posts() ) {
                    while ( $loop->have_posts() ) :
                        $loop->the_post();
                        ++$k;
                        get_template_part('template-parts/section', 'prodtemplate');
                        if( $z != $k )  echo ( ( $k % 3 == 0 ) ? '</div> <div class="slider-2-line-smal">' : "" );
                    endwhile;
                } else {
                    echo __( 'No products found' ); }
                wp_reset_postdata();

                ?>
            </div>
        </div>
    </div>



  <div class="change flex right-btn-sl2">
        <div class="next flex"><img src="<? bloginfo('template_url'); ?>/img/slider-r.png" alt="img"></div>
        <div class="next-a flex"><img id="js3-next" src="<? bloginfo('template_url'); ?>/img/slider-r-n.png" alt="img"></div>
  </div>

</div>







