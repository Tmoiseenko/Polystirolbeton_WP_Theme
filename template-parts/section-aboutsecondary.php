<?php

?>

<div class="second-about">


    <? if (have_posts()) : ?>
        <div class="home">
            <? while (have_posts()) : the_post(); ?>
                <? the_content(); ?>
            <?   endwhile; ?>
        </div>

    <? else:
        echo 'Sorry, no posts matched your criteria.';
    endif; ?>



