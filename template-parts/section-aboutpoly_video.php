<?php

?>

<div class="about-video-4">
    <h3>Видео о полистиролбетонных блоках</h3>
    <div class="video-items flex between">

        <?
        if( have_rows('video_about_blocks', 'option') ):
            while ( have_rows('video_about_blocks', 'option') ) : the_row();
                ?>

                <div class="video-item-2 flex column">
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
