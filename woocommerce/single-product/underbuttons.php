<div class="mb-4">
    <img src="<? bloginfo('template_url'); ?>/img/br-small.png" alt="">
</div>

<p class="credit">
    <i class="fa fa-question mr-2"></i>
    Кредит в месяц от............
    <span class="price">1578</span>
    <span class="price-index">руб.</span>
</p>

<p class="bonus">
    <i class="fa fa-question mr-2"></i>
    Бонусных рублей ..............
    <span class="price">+ <? the_field('bonus'); ?></span>
</p>

<div class="mychek">

<? echo do_shortcode('[yith_compare_button]'); ?>
<? echo do_shortcode(' [yith_wcwl_add_to_wishlist]'); ?>


</div>