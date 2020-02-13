<?php
/* Template name: about */
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
    get_template_part('template-parts/section', 'aboutsecondary');
    get_template_part('template-parts/section', 'quality');
    get_template_part('template-parts/section', 'comprasion');
    get_template_part('template-parts/section', 'recommendation');
?>
            <div class="none"></div>
<?php
    get_template_part('template-parts/section', 'presentation_video');
    get_template_part('template-parts/section', 'aboutpoly_video');
    get_template_part('template-parts/section', 'tesimonial_video');
?>
            <div class="br-2">
                <img src="<? bloginfo('template_url'); ?>/img/br.png" alt="br">
            </div>
<?php
    get_template_part('template-parts/section', 'slider_blocks');
    ?>
        </div>
            <?
    get_template_part('template-parts/section', 'blog');
?>
            <div class="xleb flex">
                <a href=""><img src="<? bloginfo('template_url'); ?>/img/kroshka.png" alt="img"></a>
                <span>>></span>
                <a href="" class="xleb-default">Полистиролбетон</a>
            </div>


        </div>
    </div>
    <div class="sd22sds">
        <div class="second-question flex column">
            <h2>Появились вопросы?</h2>
            <p>Звоните на бесплатный номер:</p>
            <a href="">8 800 312-33-12</a>
        </div>
    </div>
</section>


    <script>
        $(window).load(function () {
            $('.sd22sds').offset({top: $('.none').offset().top})
        });
    </script>

<?php
get_footer();