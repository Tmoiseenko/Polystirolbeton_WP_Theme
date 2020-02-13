<?php

?>

<div class="second-otziv">
    <h3>Видео отзывы наших клиентов</h3>
    <div class="s-otziv flex between">

        <?
        if( have_rows('video_testimonials', 'option') ):
            while ( have_rows('video_testimonials', 'option') ) : the_row();
                ?>

                <div class="s-otziv-item">
                    <div class="videoWrapper videoWrapper169 js-videoWrapper">
                        <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/<? the_sub_field('embed'); ?>?autoplay=1& modestbranding=1&rel=0&hl=sv&controls=1"></iframe>
                        <button class="videoPoster js-videoPoster" style="background-image:url(<? the_sub_field('poster'); ?>);">Play video</button>
                    </div>
                    <p><? the_sub_field('tetimonial_title'); ?></p>
                </div>

            <? endwhile;
        endif; ?>

    </div>
    <p>
        Проанализировав характеристики материала, понятно, что его качества во многом превосходят аналоги.
        Купить полистиролбетон для строительства коттеджа в Москве или утепления здания - это правильный выбор,
        если вы хотите сэкономить как в деньгах, так и в сроках. Цена за куб вполне разумна,
        а качества этих теплоблоков оправдают затраты.
    </p>
</div>


