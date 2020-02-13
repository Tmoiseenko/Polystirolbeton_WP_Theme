<?php
/* Template name: Block calc */
get_header();
global $post;
?>
<section>
    <div class="container-2 flex">
        <?php
        get_sidebar();
        ?>

        <div class="second-content flex column">

            <?php
            $myhome = '<img src="' . get_bloginfo('template_url') . '/img/kroshka.png" alt="img">';
            if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('&nbsp;&gt;&gt;&nbsp;', array('home' => $myhome) );
            ?>
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
            </header><!-- .entry-header -->

            <div class="row">

                <div class="col-md-6">
                    <div class="wpcc-img"><img class="size-full wp-image-9 aligncenter" src="http://polystirolbeton.loc/wp-content/uploads/2019/04/ico3.png" alt="" width="51" height="51" /></div>
                    <h4 class="wpcc-title">Расчет количества стеновых блоков</h4>


                    <form id="outside-block-calc" class="bricks-form">

                        <div class="bricks-box-wrapp">

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Укажите высоту стен (м)</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="walls-heigh" id="walls-heigh" placeholder="М">
                                </div>
                            </div>

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Длина несущих стен (м)</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="walls-width" id="walls-width" placeholder="М">
                                </div>
                            </div>

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Площадь входных дверей и окон (м2)</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="hole-size" id="hole-size" placeholder="М2">
                                </div>
                            </div>

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Размеры блока</div>
                                <div class="bricks-box-filds bricks-box-select">
                                    <select name="block-size" id="block-size">

                                        <? if( have_rows('calc_1', 'options') ):
                                            while ( have_rows('calc_1', 'options') ) : the_row();
                                                ?>
                                                <option data-price="<? the_sub_field('price'); ?>" data-width="<? the_sub_field('width'); ?>" data-volume="<? the_sub_field('volume'); ?>" ><? the_sub_field('text'); ?></option>
                                            <?
                                            endwhile;
                                        endif; ?>

                                    </select>
                                </div>

                            </div>


                        </div>

                        <div class="bricks-btn">
                            <button>Узнать колличество и цену блоков</button>
                        </div>

                    </form>

                    <div class="form-result">

                    </div>

                </div>

                <div class="col-md-6">
                    <div class="wpcc-img"><img class="size-full wp-image-8 aligncenter" src="http://polystirolbeton.loc/wp-content/uploads/2019/04/ico2.png" alt="" width="51" height="51" /></div>
                    <h4 class="wpcc-title">Расчет количества перегородочных блоков</h4>

                    <form id="inside-block-calc" action="" class="bricks-form">

                        <div class="bricks-box-wrapp">

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Укажите высоту стен (м)</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="walls-heigh" id="walls-heigh" placeholder="М">
                                </div>
                            </div>

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Длина несущих стен (м)</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="walls-width" id="walls-width" placeholder="М">
                                </div>
                            </div>

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Площадь входных дверей и окон (м2)</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="hole-size" id="hole-size" placeholder="М2">
                                </div>
                            </div>


                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Размеры блока</div>
                                <div class="bricks-box-filds bricks-box-select">
                                    <select name="block-size" id="block-size">

                                        <? if( have_rows('calc_2', 'options') ):
                                            while ( have_rows('calc_2', 'options') ) : the_row();
                                                ?>
                                                <option data-price="<? the_sub_field('price'); ?>" data-width="<? the_sub_field('width'); ?>" data-volume="<? the_sub_field('volume'); ?>" ><? the_sub_field('text'); ?></option>
                                            <?
                                            endwhile;
                                        endif; ?>

                                    </select>
                                </div>

                            </div>


                        </div>

                        <div class="bricks-btn">
                            <button>Узнать колличество и цену блоков</button>
                        </div>

                    </form>

                    <div class="form-result">

                    </div>

                </div>

                <div class="col-12 mt-5">


                    <form id="mailFormCalc" action="" formnovalidate class="bricks-mail-form">
                        <h3>Узнать стоимость с доставкой</h3>
                        <input required type="text" name="name" placeholder="Ваше имя">
                        <input required type="email" name="email" placeholder="Ваш Email">
                        <input required type="tel" name="phone" placeholder="Ваш телефон">
                        <input required type="text" name="address" placeholder="Ваш адрес для доставки">
                        <textarea name="calc_1" id="" cols="50" rows="10" style="display: none"></textarea>
                        <textarea name="calc_2" id="" cols="50" rows="10" style="display: none"></textarea>

                        <div class="bricks-btn">
                            <button name="mailPost">отправить</button>
                        </div>

                    </form>

                    <div class="mail-result"></div>

                </div>

            </div>



            <p class="calc-text">
                Используя полистиролбетон в качестве наливного пола, значительно уменьшается нагрузка на конструктивные элементы здания, а в последствии уменьшаются их размеры, нужная арматура и вес несущих элементов, что напрямую влияет на стоимость конструкции здания (например, в 9-ти этажном объекте уменьшается нагрузка на фундамент больше 1 тона/м2, а соответственно и на конструктивные элементы каждого этажа).
            </p>
        </div>
    </div>
</section>

<script>
    $( function() {


        $('.bricks-form button').on('click', function () {
            event.preventDefault();
            var form  = $(this).parent().parent();
            var height = form.find('#walls-heigh').val();
            var width = form.find('#walls-width').val();
            var hole_size = form.find('#hole-size').val();
            var block_volume = form.find('#block-size option:selected').data('volume');
            var block_width = form.find('#block-size option:selected').data('width');
            var block_price = form.find('#block-size option:selected').data('width');

            var area = (height * width) - hole_size;
            var volume = area * block_width;
            var qty_block = volume / block_volume;

            console.log(form.attr('id'));
            var result = '';
            result += '<p><b>Объём: '+ volume.toFixed(2) +' М<sup>3</sup>.</b></p>';
            result += '<p><b>Площадь стен: '+ area.toFixed(2) +' М<sup>2</sup>.</b></p>';
            result += '<p><b>Количество блоков: '+ qty_block.toFixed(2) +' шт.</b></p>';
            result += '<p><b>Стоимость: <span class="price">'+ (qty_block.toFixed(2)*block_price).toFixed(2) +'</span> руб.</b></p>';

            var mailText = '';
            mailText += 'Объём: '+ volume.toFixed(2) +' М3.n';
            mailText += 'Площадь стен: '+ area.toFixed(2) +' М2.n';
            mailText += 'Количество блоков: '+ qty_block.toFixed(2) +' шт.';
            mailText += 'Стоимость: '+ qty_block.toFixed(2) +' руб.';

            form.next('.form-result').html(result);

            if(form.attr('id') == 'outside-block-calc') $('.bricks-mail-form textarea[name="calc_1"]').val(mailText);
            if(form.attr('id') == 'inside-block-calc') $('.bricks-mail-form textarea[name="calc_2"]').val(mailText);

        });


        $('#mailFormCalc').on('submit', function () {
            event.preventDefault();
            var name = $(this).children('input[name="name"]').val();
            var email = $(this).children('input[name="email"]').val();
            var phone = $(this).children('input[name="phone"]').val();
            var address = $(this).children('input[name="address"]').val();
            var calc_1 = $(this).children('textarea[name="calc_1"]').val();
            var calc_2 = $(this).children('textarea[name="calc_2"]').val();

            var success_text = '<p> Спасибо. Ваше письмо отправлено</p>';
            var error_text = '<p> Извините. Ваше письмо не отправлено</p>';

            $.ajax({
                url:        myajax.url,
                type:       'POST',
                data: {
                    action: 'block_calc_email',
                    name: name,
                    email: email,
                    phone: phone,
                    address: address,
                    calc_1: calc_1,
                    calc_2: calc_2
                },
                success: function(res) {
                    $('.mail-result').addClass("alert alert-success").html(success_text);
                },
                error: function(res) {
                    $('.mail-result').html(error_text);
                }
            });
        })

    });
</script>