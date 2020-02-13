<?php
/** The template for displaying the header */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>>
    <title><? the_title(); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="yandex-verification" content="3bc0a4e7db4c57cf" />
    <!-- Template Basic imgs Start -->
    <meta property="og:img" content="path/to/img.jpg">
    <link rel="icon" href="<? bloginfo( 'template_url' ); ?>/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<? bloginfo( 'template_url' ); ?>/<? bloginfo( 'template_url' ); ?>/img/favicon.ico">
    <!-- Template Basic imgs End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">

    <?php wp_head(); ?>
</head>
<body>
<div class="main-container">


    <!--- Header start --->


    <div class="popup">

    </div>
    <div class="hjiiii">
        <div class="close-ic">
            <img src="<? bloginfo('template_url'); ?>/img/close-icg.png" alt="">
        </div>
    </div>
    <div id="totope"></div>

    <nav class="mob-nav headerr">
        <div class="container">
            <div class="nav-content flex between">

                <div class="logo flex">
                    <a href="<? bloginfo('url'); ?>">
                        <img src="<? bloginfo('template_url'); ?>/img/mob-menu.png" alt="img">
                    </a>
                </div>

                <div class="tel flex">

                    <img src="<? bloginfo('template_url'); ?>/img/phone.png" alt="img">
                    <p>8 (8352) 22-50-61</p>
                </div>

                <div class="cart-update desc-korzina flex">
                    <a href="<? echo wc_get_cart_url(); ?>" class="k-img"><img src="<? bloginfo('template_url'); ?>/img/korzina.png" alt="korzina"></a>
                    <a href="<? echo wc_get_cart_url(); ?>"><p>Корзина</p></a>
                    <a href="<? echo wc_get_cart_url(); ?>" id="k-items"><?php echo WC()->cart->get_cart_contents_count(); ?></a>

                    <div class="vipad flex column">
                        <div class="vipad-content">
                            <? $products = WC()->cart->get_cart_contents(); ?>
                            <? foreach ($products as $item): ?>

                                <div class="vipad-item flex">
                                    <div class="vipad-img"><?php echo get_the_post_thumbnail( $item['product_id'], 'small'); ?></div>
                                    <div class="vipad-txt flex column">
                                        <a href=""> <? echo $item['data']->get_name(); ?></a>
                                        <p><? the_field('size'); ?></p>
                                        <p><? echo $item['data']->get_price(); ?> руб.</p>
                                    </div>
                                </div>
                            <? endforeach; ?>
                            <div class="vipad-btn flex column">
                                <p>Итого: <?php echo WC()->cart->get_cart_subtotal();?></p>
                                <a href="<? echo wc_get_cart_url(); ?>">Перейти в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desc-menu-btn flex">
                    <p>Меню</p>
                    <a class="mmnav2"><img src="<? bloginfo('template_url'); ?>/img/burger.png" alt="img"></a>
                </div>

                <?
                wp_nav_menu( [
                    'menu'            => 'mainmenu',
                    'menu_class'      => 'desc-menu flex column',
                    'menu_id'         => '',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                    'walker'          => new Custom_Walker_Nav_Menu(),
                ]);

                ?>

            </div>
        </div>
    </nav>


    <nav class="desc-nav">
        <div class="container">
            <div class="nav-content flex between">
                <div class="logo">
                    <a href="<? bloginfo('url'); ?>">
                        <img src="<? bloginfo('template_url'); ?>/img/logo.gif" alt="img">
                    </a>
                </div>
                <div class="tel flex">
                    <img src="<? bloginfo('template_url'); ?>/img/phone.png" alt="img">
                    <p>8 (8352) 22-50-61</p>
                </div>

                <div class="cart-update desc-korzina flex">
                    <a href="<? echo wc_get_cart_url(); ?>" class="k-img"><img src="<? bloginfo('template_url'); ?>/img/korzina.png" alt="korzina"></a>
                    <a href="<? echo wc_get_cart_url(); ?>"><p>Корзина</p></a>
                    <a href="<? echo wc_get_cart_url(); ?>" id="k-items"><?php echo WC()->cart->get_cart_contents_count(); ?></a>

                    <div class="vipad flex column">
                        <div class="vipad-content">
                            <? $products = WC()->cart->get_cart_contents(); ?>
                            <? foreach ($products as $item): ?>

                                <div class="vipad-item flex">
                                    <div class="vipad-img"><?php echo get_the_post_thumbnail( $item['product_id'], 'small'); ?></div>
                                    <div class="vipad-txt flex column">
                                        <a href=""> <? echo $item['data']->get_name(); ?></a>
                                        <p><? the_field('size'); ?></p>
                                        <p><? echo $item['data']->get_price(); ?> руб.</p>
                                    </div>
                                </div>
                            <? endforeach; ?>
                            <div class="vipad-btn flex column">
                                <p>Итого: <?php echo WC()->cart->get_cart_subtotal();?></p>
                                <a href="<? echo wc_get_cart_url(); ?>">Перейти в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desc-menu-btn flex">
                    <p class="menitexmobile">Меню</p>
                    <a class="ic-mobmeny"><img src="<? bloginfo('template_url'); ?>/img/burger.png" alt="img"></a>
                </div>

                <?
                wp_nav_menu( [
                    'menu'            => 'mainmenu',
                    'menu_class'      => 'desc-menu flex column',
                    'menu_id'         => '',
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                    'walker'          => new Custom_Walker_Nav_Menu(),
                ]);

                ?>

            </div>
        </div>
    </nav>

    <header class="header" >
        <div class="container">
            <div class="header-content flex between">


               <? $adress_list = get_field('addres_list', 'option'); ?>


                <a href="<? bloginfo('url'); ?>" class="logo flex"><img src="<? bloginfo('template_url'); ?>/img/logo.gif" alt="logo"></a>
                <div class="geo-info flex">
                    <img class="geo-metka-icon" src="<? bloginfo('template_url'); ?>/img/lable-office-up.png" alt="гео">
                    <p class="geo-choose-city"><? the_field('republic', 'option') ?>, г. <? echo $adress_list[0]['city']; ?>,<br>
                        <? echo $adress_list[0]['adress']; ?><br><? echo $adress_list[0]['work_time']; ?></p>

                    <div class="address-select">
                        <div class="label">Город доставки</div>
                        <div class="city-current"><? echo $adress_list[0]['city']; ?></div>
                        <a href="#" class="city-ok-button">Да, верно</a>
                        <a href="#" class="city-select-link">Выбрать другой город</a>
                    </div>

                    <div class="select-overlay"></div>
                    <div class="city-select">

                        <div class="close-link"></div>

                        <div class="city-select-pane">
                            <img src="<? bloginfo('template_url'); ?>/img/city-select-img.png" class="city-select-img" />
                            <div class="city-select-title">Укажите ваш город</div>
                            <input class="city-select-text" type="text" placeholder="Введите название вашего населенного пункта">

                            <ul class="cities-list">

                                <? foreach ($adress_list as $item): ?>
                                    <li class="choose-city">г. <a href="#"><? echo $item['city']; ?></a>
                                        <span><? the_field('republic', 'option') ?>, г. <? echo $item['city']; ?>, <br/>
                                            <? echo $item['adress']; ?><br />
                                            <? echo $item['work_time']; ?></span>
                                    </li>
                                <? endforeach; ?>


                            </ul>

                        </div>
                    </div>

                </div>

                <div class="contacti flex column">
                    <p class="phonebox dfdff4">
                        <img src="<? bloginfo('template_url'); ?>/img/phone.png" alt="трубка">
                        <? echo $adress_list[0]['phone']; ?><br>

                    <div class="phoneabsolyte">

                        <div class="psfgfdmjjj">
                            <input type="text" placeholder="Ваш телефон">
                            <button class="phonego">Заказать обратный звонок</button>
                        </div>

                        <div class="close-box-phone">
                            <img src="<? bloginfo('template_url'); ?>/img/btn/closephone.png" alt="">
                        </div>
                    </div>
                    </p>
                    <a><? echo $adress_list[0]['email']; ?></a>
                </div>

            </div>
        </div>
    </header>

    <section class="nav">
        <div class="container">

<nav class="nav flex">
            <?
            wp_nav_menu( [
                'menu'            => 'mainmenu',
                'menu_class'      => 'menu flex',
                'menu_id'         => '',
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                'walker'          => new Custom_Walker_Nav_Menu(),
            ]);

      ?>
            <div class="cart-update korzina flex">
                <a href="<? echo wc_get_cart_url(); ?>" class="k-img"><img src="<? bloginfo('template_url'); ?>/img/korzina.png" alt="korzina"></a>
                <a href="<? echo wc_get_cart_url(); ?>"><p>Корзина</p></a>
                <a href="<? echo wc_get_cart_url(); ?>" id="k-items"><?php echo WC()->cart->get_cart_contents_count(); ?></a>

                <div class="vipad flex column">
                    <div class="vipad-content">
                        <? $products = WC()->cart->get_cart_contents(); ?>
                        <? foreach ($products as $item): ?>
                        <? var_dump($item); ?>

                            <div class="vipad-item flex">
                                <div class="vipad-img"><?php echo get_the_post_thumbnail( $item['product_id'], 'small'); ?></div>
                                <div class="vipad-txt flex column">
                                    <a href=""> <? echo $item['data']->get_name(); ?></a>

                                    <p><? the_field('size'); ?></p>
                                    <p><? echo $item['data']->get_price(); ?> руб.</p>
                                </div>
                            </div>
                        <? endforeach; ?>
                        <div class="vipad-btn flex column">
                            <p>Итого: <?php echo WC()->cart->get_cart_subtotal();?></p>
                            <a href="<? echo wc_get_cart_url(); ?>">Перейти в корзину</a>
                        </div>
                    </div>
                </div>
            </div>

                <div class="catalog-menu">
                    <div class="search flex">
                        <span class="romb"><img src="<? bloginfo('template_url'); ?>/img/rombik.png" alt="ромб"></span>
                        <a class="poisk-icon"></a>
                        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
                            <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Для поиска нажмите Enter …" />

                        </form>

                    </div>
                    <div class="sravnenie flex">
                        <span class="romb"><img src="<? bloginfo('template_url'); ?>/img/rombik.png" alt="ромб"></span>
                        <a class="sravnenie-icon yith-woocompare-open" href=#>Сравнение</a>
                    </div>
                    <div class="izbrannoe flex">
                        <span class="romb"><img src="<? bloginfo('template_url'); ?>/img/rombik.png" alt="ромб"></span>
                        <a class="izbrannoe-icon " href="<? the_permalink(385); ?>">Избранное</a>
                    </div>
                </div>
            </nav>


        </div>
    </section>

    <div class="main-obvertka">
        <section class="main" <?php 
            $bg_img = get_field('image_header', get_the_ID() );
            if ($bg_img) echo "style=\"background:url($bg_img), no-repeat; background-size:cover;\""
        ?>>
            <div class="container">

                <div class="form flex column">
                    <div class="form-txt">
                        <p>Оставьте заявку</p>
                        <p id="txt-2">На БЕСПЛАТНУЮ консультацию</p>
                    </div>

                    <? echo do_shortcode('[contact-form-7 id="216" html_class="main-form flex column" title="Контактная форма в шапке"]'); ?>

                </div>
                <div class="main-item flex">
                    <div class="test">
                        <img src="<? bloginfo('template_url'); ?>/img/P.png" alt="P">
                    </div>
                    <div class="item-txt">

                        <? $mainpage_link = get_field('mainpage_link', 'option'); ?>

                        <div class="flex txt-child">
                            <span>Производим:</span>
                            <p>
                                <a href="<? echo $mainpage_link[0]['link'] ?>"><? echo $mainpage_link[0]['link_title'] ?></a>,
                                <a href="<? echo $mainpage_link[1]['link'] ?>"><? echo $mainpage_link[1]['link_title'] ?></a>,
                                <a href="<? echo $mainpage_link[2]['link'] ?>"><? echo $mainpage_link[2]['link_title'] ?></a>
                            </p>
                        </div>
                        <div class="flex txt-child">
                            <span id="span-s">Строим:</span>
                            <p>
                                <a href="<? echo $mainpage_link[3]['link'] ?>"><? echo $mainpage_link[3]['link_title'] ?></a>
                            </p>
                        </div>
                    </div>
                    <div class="item-img flex">
                        <a href="<? echo $mainpage_link[4]['link'] ?>"><img class="img-responsive" src="<? bloginfo('template_url'); ?>/img/kirpich.png" alt="kirpich"></a>
                        <a href="<? echo $mainpage_link[5]['link'] ?>"><img class="img-responsive" src="<? bloginfo('template_url'); ?>/img/penoblock.png" alt="penoblock"></a>
                        <a href="<? echo $mainpage_link[6]['link'] ?>"><img class="img-responsive" src="<? bloginfo('template_url'); ?>/img/stena.png" alt="stena"></a>
                    </div>
                </div>
            </div>
            <div id="login-links">
                <div class="login-content">
                    <div class="inner-bg">
                        <a href="#">Войти</a>
                        <a href="#">Зарегистрироваться</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--- Header end --->

