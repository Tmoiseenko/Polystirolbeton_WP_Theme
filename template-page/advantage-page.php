<?php
/* Template name: advantage */
global $post;
get_header();


?>

<section>
    <div class="container-2 flex">

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); ?>

            <?php
            get_sidebar();
            ?>
            <div class="second-content flex column">

                <?php
                $myhome = '<img src="' . get_bloginfo('template_url') . '/img/kroshka.png" alt="img">';
                if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('&nbsp;&gt;&gt;&nbsp;', array('home' => $myhome) );
                ?>

                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title advantage-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->

                    <?php the_content(); ?>
                    <?php
                    wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                        'separator'   => '<span class="screen-reader-text">, </span>',
                    ) );
                    ?>
                    <?php
                    get_template_part('template-parts/section', 'presentation_video');
                    get_template_part('template-parts/section', 'aboutpoly_video');
                    ?>
                    <div class="br-2">
                        <img src="<? bloginfo('template_url'); ?>/img/br.png" alt="br">
                    </div>
                    <?php
                    get_template_part('template-parts/section', 'slider_blocks');
                    get_template_part('template-parts/section', 'blog');
                    ?>



                <?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

                <div class="breadcrumb-wrapp">
                    <?php
                    $myhome = '<img src="' . get_bloginfo('template_url') . '/img/kroshka.png" alt="img">';
                    if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('&nbsp;&gt;&gt;&nbsp;', array('home' => $myhome) );
                    ?>
                </div>

                </div>

            </div>
            <?
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

            // End the loop.
        endwhile;
        ?>



    </div><!-- .site-main -->
</section><!-- .content-area -->

<?php get_footer(); ?>
