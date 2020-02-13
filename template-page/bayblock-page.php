<?php
/* Template name: bayblock */
get_header();
?>

<section>
    <div class="container-2 flex">
<?php
    get_sidebar();
?>
    <div class="second-content flex column">

        <?php
        $myhome = '<img src="' . get_bloginfo('template_url') . '/img/kroshka.png" alt="img">';
        if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('&nbsp;&gt;&gt;&nbsp;', array('home' => $myhome) );
        ?>
<?php
    get_template_part('template-parts/section', 'catalog');
?>

        <? if (have_posts()) : ?>
            <div class="home">
           <? while (have_posts()) : the_post(); ?>
                <? the_content(); ?>
        <?   endwhile; ?>
            </div>

        <? else:
            echo 'Sorry, no posts matched your criteria.';
        endif; ?>


        <?php
        $myhome = '<img src="' . get_bloginfo('template_url') . '/img/kroshka.png" alt="img">';
        if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('&nbsp;&gt;&gt;&nbsp;', array('home' => $myhome) );
        ?>

    </div>
    </div>
</section>

<?php
get_footer();

