<?php

?>

<section>
    <div class="container">
        <h2 class="h2-s">Сертификаты и лицензии</h2>
        <div class="serti flex">
            <?
            if( have_rows('sertificate', 'option') ):
                while ( have_rows('sertificate', 'option') ) : the_row();
                    ?>
            <div class="serti-1 flex">
                        <div class="img-r">
                            <img class="img-responsive frrr" src="<? the_sub_field('image'); ?>" style="max-width: 245px;" alt="img">
                        </div>
            </div>
                <? endwhile;
            endif;  ?>
            
        </div>
        <div class="br">
            <img src="<? bloginfo( 'template_url' ); ?>/img/br.png" alt="br">
        </div>
    </div>
</section>