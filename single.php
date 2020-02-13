<?php 

get_header(); 
?>


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

<?php 
    if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>
                <div class="br-3">
                    <img src="<? bloginfo('template_url'); ?>/img/br.png" alt="br">
                </div>
                <div class="stati-item flex">

                    <div>
                        <h1><? the_title() ?></h1>
                        <? the_post_thumbnail('full', array('class' => 'img-responsive')) ?>
                        <p> <? the_content("...далее") ?> </p>
                    </div>
                </div>

            <?
		}
	}
?>
 <div class="br-3">
                    <img src="<? bloginfo('template_url'); ?>/img/br.png" alt="br">
                </div>
<div class="bottom-margin">
<?php
        $myhome = '<img src="' . get_bloginfo('template_url') . '/img/kroshka.png" alt="img">';
        if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('&nbsp;&gt;&gt;&nbsp;', array('home' => $myhome) );
?>
</div>

        </div>
    </div>
</section>


<?php get_footer(); ?>