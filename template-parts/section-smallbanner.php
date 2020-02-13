<?php

$banner_rubric = get_field('small_banner_rubric', 'options');
$banner_prod = get_field('small_banner_prod_cat', 'options');
$banner_shop = get_field('small_shop_banner', 'options');
$banner_main = get_field('small_mainpage_banner', 'options');
$banner_other = get_field('small_other_banner', 'options');

if( is_front_page() ) {
    if( !(count($banner_shop)>1)  ){
        ?>
        <div class="publ-img flex">
            <img class="img-responsive" src="<? echo $banner_shop[0]['image']; ?>" alt="img">
        </div>
        <?
    }else {
        $k = rand(0, count($banner_shop));
        ?>
        <div class="publ-img flex">
            <img class="img-responsive" src="<? echo $banner_shop[$k]['image']; ?>" alt="img">
        </div>
        <?
    }
}
elseif( is_shop() ) {
    if( !(count($banner_main)>1)  ){
        ?>
        <div class="publ-img flex">
            <img class="img-responsive" src="<? echo $banner_main[0]['image']; ?>" alt="img">
        </div>
        <?
    }else {
        $k = rand(0, count($banner_main));
        ?>
        <div class="publ-img flex">
            <img class="img-responsive" src="<? echo $banner_main[$k]['image']; ?>" alt="img">
        </div>
        <?
    }
}elseif( is_product_category() && $banner_prod[0]["prod_cat"] == get_queried_object()->term_id ) {
    if( !(count($banner_prod)>1)  ){
        ?>
        <div class="publ-img flex">
            <img class="img-responsive" src="<? echo $banner_prod[0]['image']; ?>" alt="img">
        </div>
        <?
    }else {
        $k = rand(0, count($banner_prod));
        ?>
        <div class="publ-img flex">
            <img class="img-responsive" src="<? echo $banner_prod[$k]['image']; ?>" alt="img">
        </div>
        <?
    }
}
elseif( is_category() && $banner_rubric[0]["prod_cat"] == get_queried_object()->term_id ){

    if( !(count($banner_rubric)>1)  ){
        ?>
        <div class="publ-img flex">
            <img class="img-responsive" src="<? echo $banner_rubric[0]['image']; ?>" alt="img">
        </div>
        <?
    }else {
        $j = rand(0, count($banner_prod));
        ?>
        <div class="publ-img flex">
            <img class="img-responsive" src="<? echo $banner_rubric[$j]['image']; ?>" alt="img">
        </div>
        <?
    }
}else {
    if( !(count($banner_other)>1)  ){
        ?>
        <div class="publ-img flex">
            <img class="img-responsive other-ban" src="<? echo $banner_other[0]['image']; ?>" alt="img">
        </div>
        <?
    }else {
        $j = rand(0, count($banner_other));
        ?>
        <div class="publ-img flex">
            <img class="img-responsive other-ban" src="<? echo $banner_other[$j]['image']; ?>" alt="img">
        </div>
        <?
    }
}

?>

