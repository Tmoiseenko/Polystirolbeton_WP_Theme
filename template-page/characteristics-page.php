<?php
/* Template name: characteristics */
get_header();
wp_enqueue_style('char-css', get_template_directory_uri() . "/css/characteristic.css");
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

?>


        <div class="xleb flex">
            <a href=""><img src="<? bloginfo('template_url'); ?>/img/kroshka.png" alt="img"></a>
            <span>>></span>
            <a href="" class="xleb-default">Полистиролбетон</a>
        </div>


    </section>
    </div>
        <div class="sd22sds">
            <div class="second-question flex column">
                <h2>Появились вопросы?</h2>
                <p>Звоните на бесплатный номер:</p>
                <a href="">8 800 312-33-12</a>
            </div>
        </div>



    <script>
        $(window).load(function () {
            $('.sd22sds').offset({top: $('.none').offset().top})
        });
    </script>

<?php


get_footer();
