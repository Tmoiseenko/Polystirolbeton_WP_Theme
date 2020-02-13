<?php

?>

<section>
    <div class="container">
        <h2 class="h2-about">О материале полистиролбетон</h2>
        <div class="about-content flex column">
            <p>Полистиролбетон - усовершенствованный бетон с широкой сферой применения - от теплоизоляции до возведения ограждающих конструкций.
                Полистиролбетон (ПСБ) – особо легкий бетон с пористой структурой, производимый на базе цементного вяжущего (обычно портландцемент), с пористым гранулированным заполнителем (вспененный полистирол). Допустимая насыпная плотность гранулята – до 15 кг на кубометр </p>
        </div>

        <? echo do_shortcode('[composition]'); ?>

        <div class="about-video">
            <h3>Презентационный фильм “полистиролбетон”</h3>
            <div class="main-video flex">
                <div class="videoWrapper videoWrapper169 js-videoWrapper">
                    <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/<? the_field('presentation_video', 'option') ?>?autoplay=1& modestbranding=1&rel=0&hl=sv&controls=1"></iframe>
                    <button class="videoPoster js-videoPoster" style="background-image:url(<? the_field('presentation_video_poster', 'option') ?>);">Play video</button>
                </div>
            </div>
        </div>
        <div class="about-video-2">
            <h3>Видео о полистиролбетонных блоках</h3>
            <div class="video-items flex between">
                <?
                if( have_rows('video_about_blocks', 'option') ):
                while ( have_rows('video_about_blocks', 'option') ) : the_row();
                ?>

                <div class="video-item flex column">
                    <div class="videoWrapper videoWrapper169 js-videoWrapper">
                        <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/<? the_sub_field('embed'); ?>?autoplay=1& modestbranding=1&rel=0&hl=sv&controls=1"></iframe>
                        <button class="videoPoster js-videoPoster" style="background-image:url(<? the_sub_field('poster'); ?>);">Play video</button>
                    </div>
                    <p><? the_sub_field('descritiopn'); ?></p>
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


