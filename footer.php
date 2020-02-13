<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<div id="map">

</div>


<!--- Footer start --->


<section class="bg">
    <div class="container">


        <div class="question">
            <h2>ОСТАЛИСЬ ВОПРОСЫ?</h2>
            <p>Введите свой телефон и получите косультацию специалиста</p>
            <? echo do_shortcode('[contact-form-7 id="482" title="Контактная форма ОСТАЛИСЬ ВОПРОСЫ"]'); ?>

        </div>
        <div class="up">
            <a href="#totope">Наверх</a>
        </div>
    </div>
</section>

<footer>
    <div class="container flex between">
        <div class="footer-content flex">
            <div class="footer-list flex column">
                <?php dynamic_sidebar( 'Меню в подвале-1' ); ?>
            </div>
            <div class="footer-list flex column">
                <?php dynamic_sidebar( 'Меню в подвале-2' ); ?>
            </div>
            <div class="footer-list flex column">
                <?php dynamic_sidebar( 'Меню в подвале-3' ); ?>
            </div>
            <div class="footer-list flex column pad-0">
                <?php dynamic_sidebar( 'Меню в подвале-4' ); ?>
            </div>
        </div>
        <div class="footer-call flex column">
            <p id="f-txt-1">Есть вопрос? Звоните:</p>
            <p id="f-txt-2">8 (8352) 22-50-61</p>
            <span>Принимаем звонки:</span>
            <span>ежедневно с 9:00 до 21:00</span>
            <a href="" class="footer-btn">Заказать звонок</a>


            <div class="footer-contacts">

                <div class="wave-white"></div>

                <div class="footer-title">Адреса представительств</div>

                <select id="check-city">
                    <? $adress_list = get_field('addres_list', 'option'); ?>
                    <? foreach ( $adress_list as $key => $item ): ?>
                    <option value="<? echo $key; ?>"><? echo $item['city']; ?></option>
                   <? endforeach; ?>
                </select>
                <? foreach ( $adress_list as $key => $item ): ?>
                    <div class="selected-address val-<? echo $key; ?> active">
                        г. <? echo $item['city']; ?>, <br/><? echo $item['adress']; ?><br /><? echo $item['work_time']; ?>
                    </div>
                <? endforeach; ?>


                <div class="wave-white"></div>

                <div class="footer-title">Принимаем к оплате карты</div>

                <div class="cards">
                    <img src="<? bloginfo( 'template_url' ); ?>/img/platezh/visa.png" alt="visa">
                    <img src="<? bloginfo( 'template_url' ); ?>/img/platezh/mastercard.png" alt="mastercard">
                    <img src="<? bloginfo( 'template_url' ); ?>/img/platezh/mir.png" alt="mir">
                </div>

                <div class="wave-white"></div>

                <div class="footer-title">Мы в социальных сетях</div>

                <div class="social-networks">
                    <?php if( have_rows('social_list', 'options') ): ?>
                        <?php while( have_rows('social_list', 'options') ): the_row(); ?>

                            <a href="<?php the_sub_field('link'); ?>"><img src="<?php the_sub_field('image'); ?>" alt="Instagram"></a>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>


            </div>

        </div>
    </div>
</footer>


<!--- Footer end --->


<section class="last">
    <div class="container">
        <div class="content flex between">
            <img class="img-responsive" src="<? bloginfo( 'template_url' ); ?>/img/pay.png" alt="pay">
            <span>© 2017  Полистиролбетон, полистиролбетонные блоки, облицовочный кирпич. Завод в чувашии. ИП иванов е.а. ИНН 236902205900</span>
            <div class="soc-seti flex between">
                <?php if( have_rows('social_list', 'options') ): ?>
                        <?php while( have_rows('social_list', 'options') ): the_row(); ?>

                        <a href="<?php the_sub_field('link'); ?>"><i class="fa <?php the_sub_field('class'); ?>"></i></a>

                        <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
</div>

<? wp_footer(); ?>

<script type="text/javascript">

    ymaps.ready(init);
    function init(){
        var myMap = new ymaps.Map("map", {
            center: [56.10145356864081,47.25464499999998],
            zoom: 16
        });
        myMap.behaviors
            .disable(['drag', 'rightMouseButtonMagnifier'])
            .disable('scrollZoom')
            .disable('multiTouch');

        myMap.events.once('click', function () {
            myMap.behaviors
                .enable(['drag', 'rightMouseButtonMagnifier'])
                .enable('scrollZoom')
                .enable('multiTouch');
        });

        var placemark = new ymaps.Placemark([56.10145356864081,47.25464499999998], {
            hintContent: 'ул. Пристационная д. 3 оф. 216',
            balloonContent: '<h3 style="font-size: 18px; font-weight: bold; text-align: center; margin: 0">Полистиролбетон</h3><br><p style="margin: 0;">производство полистиролбетона,<br> кирпича, фасадной плитки</p>'
        }, {
            iconLayout: 'default#image',
            iconImageHref: '<? bloginfo( 'template_url' ); ?>/img/imajes/logo_map.png',
            iconImageSize: [88, 53],
            iconImageOffset: [-15, -48]
        });

        myMap.geoObjects.add(placemark);
    }

</script>

<script>
    $(document).ready(function(){

        var olFlex = $('.flex-control-thumbs');
        olFlex.detach();
        $('.flex-viewport').before(olFlex);

        $('.poisk-icon').on("click", function () {
            $(this).toggleClass('search-close');
            $('input#s').toggle();
        })

        var rem = $('#nav-additional_information-tab').remove();
        $('#nav-tab').prepend(rem);

        $('.switch-galery').on("click", function () {
            var item = $(this).data('item');
            var video = $('.video-block');
            var image = $('.woocommerce-product-gallery');
            console.log(item);
            if ( !$(this).hasClass('switch-active') ){
                $(this).toggleClass('switch-active');
            }
            if ( $(this).siblings().hasClass('switch-active') ){
                $(this).siblings().toggleClass('switch-active');
            }

            if ( item == "video-block"){
                image.hide();
                video.show();
            }
            if ( item == "image-block"){
                video.hide();
                image.show();
            }


        })

    });
	
</script>


</body>
</html>