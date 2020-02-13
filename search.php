<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<section>

    <div class="container-2 flex">

        <? get_sidebar(); ?>
        <div class="second-content flex column">
            <div>
                <?php
                $myhome = '<img src="' . get_bloginfo('template_url') . '/img/kroshka.png" alt="img">';
                if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('&nbsp;&gt;&gt;&nbsp;', array('home' => $myhome) );
                ?>
            </div >

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyfifteen' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

                <div class="br-3">
                    <img src="<? bloginfo('template_url'); ?>/img/br.png" alt="br">
                </div>
                <div class="stati-item flex">
                    <div class="imgnews">
                        <? the_post_thumbnail('full', array('class' => 'img-responsive')) ?>
                    </div>
                    <div class="stati-img-txt flex column">
                        <h3><a href="<? the_permalink() ?>"><? the_title() ?></a></h3>
                        <p> <? the_excerpt() ?> </p>
                    </div>
                </div>

				<?php
							// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

            <div class="bottom-margin">
                <?php
                $myhome = '<img src="' . get_bloginfo('template_url') . '/img/kroshka.png" alt="img">';
                if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('&nbsp;&gt;&gt;&nbsp;', array('home' => $myhome) );
                ?>
            </div >

        </div>
    </div>
</section>
<?php get_footer(); ?>
