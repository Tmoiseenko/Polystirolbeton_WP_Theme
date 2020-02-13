<?php

?>

<div class="site-bar flex column asideindex">

    <div class="sp-filter_wrapper"></div>

    <div class="pocaz-razderl">
        <div class="box-pokaza">
            <p>РАСКРЫТЬ<br> РАЗДЕЛ</p>
            <div class="arow-box">
                <div class="sg215gsg"></div>
            </div>
        </div>
    </div>

    <?

    $nav_id = get_term_by( 'slug', 'sidebar-menu', 'nav_menu');
    wp_nav_menu( [
        'menu'            => $nav_id,
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_id'         => '',
        'menu_class'      => 'polibeton flex column box-column columnaside',
        'items_wrap'      => '<div id="%1$s" class="%2$s">%3$s</div>',
        'walker'          => new Custom_Walker_Nav_Sidebar_Menu(),
    ] );



    ?>

    <div class="publ columnaside">

        <? get_template_part('template-parts/section', 'topics') ?>
       
    </div>                  
</div>

