<?php
$cat = get_category_by_slug( 'publikacii' );
$args = array( 'cat' => $cat->cat_ID, 'posts_per_page' => 6 );
$loop = new WP_Query( $args );
?>

<div class="stati">
<?
if ( $loop->have_posts() ) {
while ( $loop->have_posts() ) :
$loop->the_post(); ?>
    <div class="br-3">
        <img src="<? bloginfo('template_url'); ?>/img/br.png" alt="br">
    </div>
    <div class="stati-item flex">
        <div class="imgnews">
            <img class="img-responsive" src="<? echo get_the_post_thumbnail_url(); ?>" alt="img">
        </div>
        <div class="stati-img-txt flex column">
            <h3><a href=""><? the_title(); ?></a></h3>
            <p> <? the_content(' ...далее') ?></p>
        </div>
    </div>
<? endwhile;
} else {
    echo __( 'No products found' ); }
wp_reset_postdata();

?>

</div>
