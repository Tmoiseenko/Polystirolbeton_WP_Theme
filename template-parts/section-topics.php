<?php

$cat = get_category_by_slug( 'publikacii' );
$args = array( 'cat' => $cat->cat_ID, 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
$banner_pos = round(count($loop->posts) / 2);
$i = 1;

$current_url = get_bloginfo('url') . $_SERVER["REQUEST_URI"];

?>

<h3><a href="" class="main-a"><? echo $cat->name ?></a></h3><div class="plasic"><img src="<? bloginfo( 'template_url' ); ?>/img/plas-aside.png" alt=""></div>

<div class="conteiner-aside-categor">
<?
if ( $loop->have_posts() ) {
                            while ( $loop->have_posts() ) :
                                $loop->the_post(); ?>
                                
                                <div class="publ-item flex">
                                    <img src="<? bloginfo( 'template_url' ); ?>/img/marker.png" alt="img">
                                    <?
                                    if ( $current_url == get_permalink() ){ ?>
                                        <span><? the_title(); ?></span>
                                    <? }else{?>
                                        <a href="<?the_permalink()?>" class="sec-a"><? the_title(); ?></a>
                                    <? } ?>

                                </div>

                                <? if ($i == $banner_pos){
                                    get_template_part('template-parts/section', 'smallbanner');
                            }
                                 ?>
                                
                            <? $i++; 
                            endwhile;
                        } else {
                            echo __( 'No products found' ); }
                        wp_reset_postdata();

                        ?>
            
        </div>