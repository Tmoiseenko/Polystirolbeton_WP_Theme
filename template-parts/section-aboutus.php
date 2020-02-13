<?php

?>

<section>
    <div class="container">
        <div class="stats flex between">

            <?
            if( have_rows('progress', 'option') ):
                while ( have_rows('progress', 'option') ) : the_row();
                    ?>

                    <div class="stat-item">
                        <p><? the_sub_field('text_over'); ?></p>
                        <h4><? the_sub_field('award'); ?></h4>
                        <p><? the_sub_field('text_under'); ?></p>
                    </div>

                    <? the_sub_field('descritiopn'); ?>


                <? endwhile;
            endif; ?>

        </div>
        <div class="stat-content flex column">
            <p><? the_field('text_over', 'option'); ?></p>
            <div class="main-video flex">
                <div class="videoWrapper videoWrapper169 js-videoWrapper">
                    <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/<? the_field('aboutus_video', 'option') ?>?autoplay=1& modestbranding=1&rel=0&hl=sv&controls=1"></iframe>
                    <button class="videoPoster js-videoPoster" style="background-image:url(<? the_field('aboutus_video_poster', 'option') ?>);">Play video</button>
                </div>
<!--                <iframe src="https://www.youtube.com/embed/--><?// the_field('aboutus_video', 'option'); ?><!--" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            </div>
            <p id="video-txt"><? the_field('text_under', 'option'); ?></p>
        </div>
        <div class="otzivi-content">
            <h3>Видео отзывы наших клиентов</h3>
            <div class="otziv-items flex between">

                <?
                if( have_rows('video_testimonials', 'option') ):
                    while ( have_rows('video_testimonials', 'option') ) : the_row();
                        ?>

                        <div class="otziv-item">
                            <div class="videoWrapper videoWrapper169 js-videoWrapper">
                                <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/<? the_sub_field('embed'); ?>?autoplay=1& modestbranding=1&rel=0&hl=sv&controls=1"></iframe>
                                <button class="videoPoster js-videoPoster" style="background-image:url(<? the_sub_field('poster'); ?>);">Play video</button>
                            </div>
                            <p><? the_sub_field('tetimonial_title'); ?></p>
                        </div>

                    <? endwhile;
                endif; ?>

            </div>
        </div>
        <div class="br mar-10">
            <img src="<? bloginfo( 'template_url' ); ?>/img/br.png" alt="br">
        </div>
    </div>
</section>
