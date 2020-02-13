<?php
/* Template name: Bricks calc */
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

                <form action="" class="bricks-form">
                    <div class="bricks-box-wrapp">
                        
                        <div class="bricks-info-wrapp">
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Размер (Д*Ш*В) или вид кирпича</div>
                                <div class="bricks-box-filds">
                                    <select name="brick-size" id="brick-size">
                                        <option value="250x120x65_nf1">250*120*65   (1 НФ, одинарный)</option>
                                        <option value="250x120x65_obl">250*120*65   (Облицовочный, одинарный)</option>
                                        <option value="250x120x88">250*120*88   (1.4 НФ, полуторный)</option>
                                        <option value="250x120x140">250*120*140   (2.1 НФ, двойной)</option>
                                        <option value="250x85x65_euro">250*85*65   (0.7 НФ, "ЕВРО")</option>
                                        <option value="288x63x138">250*63*138   (1.3 НФ, модульный, одинарный)</option>
                                        <option value="250x120x138_sil">250*120*138   (силикатный 3х пустотный)</option>
                                    </select>
                                </div>

                            </div>
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Общая длина всех стен (периметр)</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="all-size">
                                </div>
                            </div>
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Высота стен по углам</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="height-on-corner">
                                </div>
                            </div>
                        </div>
                        
                        <div class="bricks-box-img">
                            <img id="kirpich-img" src="<? bloginfo("template_url"); ?>/img/bricks/kirpich_250x120x65_obl.jpg" alt="">
                        </div>

                    </div>
                    
                    <div class="br-2">
                        <img src="<? bloginfo("template_url"); ?>/img/br.png" alt="">
                    </div>

                    <div class="bricks-box-wrapp">

                        <div class="bricks-info-wrapp">
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Толщина раствора в кладке</div>
                                <div class="bricks-box-filds">

                                    <h3>Для горизонтальных швов</h3>

                                    <select name="brick-horisontal-seam" id="brick-horisontal-seam">
                                        <option value="1">Раствор / 10мм</option>
                                        <option value="2">Раствор / 12мм</option>
                                        <option value="3">Раствор / 15мм</option>
                                        <option value="4">Раствор / 20мм</option>
                                        <option value="5">Не учитывать</option>
                                    </select>

                                    <h3>Для вертикальных швов</h3>

                                    <select name="brick-vertical-seam" id="brick-vertical-seam">
                                        <option value="1">Раствор / 10мм</option>
                                        <option value="2">Раствор / 12мм</option>
                                        <option value="3">Раствор / 15мм</option>
                                        <option value="4">Раствор / 20мм</option>
                                        <option value="5">Не учитывать</option>
                                    </select>


                                </div>

                            </div>

                        </div>

                        <div class="bricks-box-img">
                            <img src="<? bloginfo("template_url"); ?>/img/bricks/Group_2.png" alt="">
                        </div>

                    </div>

                    <div class="br-2">
                        <img src="<? bloginfo("template_url"); ?>/img/br.png" alt="">
                    </div>

                    <div class="bricks-box-wrapp">

                        <div class="bricks-info-wrapp">

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Способ укладки</div>
                                <div class="bricks-box-filds">
                                    <select name="brick-brickwork" id="brick-brickwork">
                                        <option value="0">Половину кирпича</option>
                                        <option value="1">В один кирпич</option>
                                        <option value="2">в полтора кирпича</option>
                                        <option value="3">В два кирпича</option>
                                    </select>
                                </div>

                            </div>

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Кладочная сетка</div>
                                <div class="bricks-box-filds">
                                    <select name="brick-grid" id="brick-grid">
                                        <option value="1">Не учитывать</option>
                                        <option value="2">Каждый ряд</option>
                                        <option value="3">Через ряд</option>
                                        <option value="4">Через 2 ряда</option>
                                        <option value="5">Через 3 ряда</option>
                                        <option value="6">Через 4 ряда</option>
                                    </select>
                                </div>

                            </div>

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Цена за 1 кирпич</div>
                                <div class="bricks-box-filds">
                                    <select name="brick-cost" id="brick-cost">
                                        <option value="250">250руб.</option>
                                        <option value="350">350руб.</option>
                                        <option value="550">550руб.</option>
                                    </select>
                                </div>

                            </div>

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Вес 1 кирпича</div>
                                <div class="bricks-box-filds">
                                    <select name="brick-weight" id="brick-weight">
                                        <option value="0.5">500гр.</option>
                                        <option value="0.8">800гр.</option>
                                        <option value="1.3">1300гр.</option>

                                    </select>
                                </div>

                            </div>

                        </div>

                        <div class="bricks-box-img">
                            <img id="brickwork-img" src="<? bloginfo("template_url"); ?>/img/bricks/0.jpg" alt="">
                        </div>

                    </div>

                    <div class="br-2">
                        <img src="<? bloginfo("template_url"); ?>/img/br.png" alt="">
                    </div>

                    <div class="bricks-box-wrapp">

                        <div class="bricks-info-wrapp">
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Фронтоны</div>
                                <div class="bricks-box-filds ">

                                    <div class="bricks-cheker">
                                        <input id="bricks-fronton" type="checkbox" name="bricks-fronton">
                                        <label for="bricks-fronton">Учитывать фронтоны</label>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div id="frontons-box" class="bricks-box-wrapp">

                        <div class="bricks-info-wrapp">
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Вариант исполнения фронтона</div>
                                <div class="bricks-box-filds">
                                    <select name="bricks-frontons" id="bricks-frontons">
                                        <option value="frontons_triangle">Треугольной формы</option>
                                        <option value="frontons_trapezium">Трапецевидной формы</option>
                                    </select>
                                </div>

                            </div>
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Количество фронтонов</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="frontons-count">
                                </div>
                            </div>
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Высота фронтонов, H</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="frontons-height">
                                </div>
                            </div>
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Длина основания фронтонов, A</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="frontons-width">
                                </div>
                            </div>
                        </div>

                        <div class="bricks-box-img">
                            <img id="frontons-img" src="<? bloginfo("template_url"); ?>/img/bricks/frontons_triangle.jpg" alt="">
                        </div>

                    </div>

                    <div class="br-2">
                        <img src="<? bloginfo("template_url"); ?>/img/br.png" alt="">
                    </div>

                    <div class="bricks-box-wrapp">

                        <div class="bricks-info-wrapp">
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Учет окон и дверей</div>
                                <div class="bricks-box-filds">

                                    <div class="bricks-cheker">
                                        <input type="checkbox" name="bricks-windoors" id="bricks-windoors">
                                        <label for="bricks-windoors">Учитывать окна и двери</label>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div id="windoor-box" class="bricks-box-wrapp">

                        <div class="bricks-info-wrapp">

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Высота окна</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="door-height">
                                </div>
                            </div>
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Длина окна</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="door-width">
                                </div>
                            </div>
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Количество подобных окон</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="door-count">
                                </div>
                            </div>

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Высота окна</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="win-height">
                                </div>
                            </div>
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Длина окна</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="win-width">
                                </div>
                            </div>
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Количество подобных дверей</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="win-count">
                                </div>
                            </div>
                        </div>

                        <div class="bricks-box-img">
                            <img id="windoors-img" src="<? bloginfo("template_url"); ?>/img/bricks/winDoors.jpg" alt="">
                        </div>

                    </div>

                    <div class="br-2">
                        <img src="<? bloginfo("template_url"); ?>/img/br.png" alt="">
                    </div>

                    <div class="bricks-box-wrapp">

                        <div class="bricks-info-wrapp">
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Дополнительные проемы</div>
                                <div class="bricks-box-filds">

                                    <div class="bricks-cheker">
                                        <input type="checkbox" name="bricks-aperture" id="bricks-aperture">
                                        <label for="bricks-aperture">Учитывать дополнительные проемы</label>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div id="aperture-box" class="bricks-box-wrapp">

                        <div class="bricks-info-wrapp">

                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Высота проема</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="aperture-height">
                                </div>
                            </div>
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Длина проема</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="aperture-width">
                                </div>
                            </div>
                            <div class="bricks-box-info">
                                <div class="bricks-box-desc">Количество подобных проемов</div>
                                <div class="bricks-box-filds">
                                    <input type="text" name="aperture-count">
                                </div>
                            </div>
                        </div>

                        <div class="bricks-box-img">
                            <img id="aperture-img" src="<? bloginfo("template_url"); ?>/img/bricks/apertures.jpg" alt="">
                        </div>

                    </div>

                    <div class="br-2">
                        <img src="<? bloginfo("template_url"); ?>/img/br.png" alt="">
                    </div>

                    <div class="bricks-btn">
                        <button>рассчитать</button>
                    </div>


                </form>

                <div class="bricks-result-box">
                    <div class="result-title">Результат расчетов</div>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="row">Периметр строения</th>
                            <td>20</td>
                            <td>метров</td>
                        </tr>
                        <tr>
                            <th scope="row">Общая площадь кладки</th>
                            <td>60</td>
                            <td>м<sub>2</sub></td>
                        </tr>
                        <tr>
                            <th scope="row">Толщина стены</th>
                            <td>120</td>
                            <td>мм</td>
                        </tr>
                        <tr>
                            <th scope="row">Количество кирпичей</th>
                            <td>3700</td>
                            <td>шт</td>
                        </tr>
                        <tr>
                            <th scope="row">Общий вес кирпичей</th>
                            <td>3077</td>
                            <td>кг</td>
                        </tr>
                        <tr>
                            <th scope="row">Общий объем кирпичей</th>
                            <td>6</td>
                            <td>м<sup>3</sup></td>
                        </tr>
                        <tr>
                            <th scope="row">Количество кирпичей в кубе</th>
                            <td>513</td>
                            <td>шт/м<sup>3</sup></td>
                        </tr>
                        <tr>
                            <th scope="row">Общая стоимость кирпичей</th>
                            <td>36845</td>
                            <td>руб</td>
                        </tr>
                        <tr>
                            <th scope="row">Кол-во рядов в кладке с учетом швов</th>
                            <td>40</td>
                            <td>рядов</td>
                        </tr>
                        <tr>
                            <th scope="row">Оптимальная высота стены (для 40 рядов)</th>
                            <td>300</td>
                            <td>см</td>
                        </tr>
                        <tr>
                            <th scope="row">Кол-во кладочной сетки</th>
                            <td>0</td>
                            <td>метров</td>
                        </tr>
                        <tr>
                            <th scope="row">Кол-во раствора на всю кладку</th>
                            <td>116</td>
                            <td>м<sup>3</sup></td>
                        </tr>
                        <tr>
                            <th scope="row">Примерный вес раствора</th>
                            <td>2204</td>
                            <td>кг</td>
                        </tr>
                        <tr>
                            <th scope="row">Примерный вес готовых стен</th>
                            <td>5480</td>
                            <td>кг</td>
                        </tr>
                        <tr>
                            <th scope="row">Нагрузка на фундамент от стен</th>
                            <td>2201</td>
                            <td>кг/<sub>2</sub></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <form action="" class="bricks-mail-form">
                    <h3>Узнать стоимость с доставкой</h3>
                    <input type="text" name="name" placeholder="Ваше имя">
                    <input type="email" name="email" placeholder="Ваш Email">
                    <input type="tel" name="phone" placeholder="Ваш телефон">
                    <input type="text" name="address" placeholder="Ваш адрес для доставки">

                    <div class="bricks-btn">
                        <button>отправить</button>
                    </div>

                </form>

                <div class="br-2">
                    <img src="<? bloginfo("template_url"); ?>/img/br.png" alt="">
                </div>


                <div class="bricks-content">
                    <? the_content(); ?>
                </div>


                    <div class="cis flex column">
                        <img src="<? bloginfo('template_url'); ?>/img/cis-1.png" alt="img" class="img-responsive img-1">
                        <p> Для удобства, различные элементы постройки лучше считать по отдельности. Например, внешние стены
                            и межкомнатые перегородки могут отличаться как по высоте, так и по способу укладки кирпича.
                            В этом случае, проведите два независимых расчета.</p>
                        <img src="<? bloginfo('template_url'); ?>/img/cis-2.png" alt="img" class="img-responsive">
                    </div>

                <div class="bricks-decryption-box">
                    <div class="result-title">Расшифровка результатов расчета</div>
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="row">Периметр постройки</th>
                            <td>Сумма длян всех стен учтенных в расчетах</td>
                        </tr>
                        <tr>
                            <th scope="row">Общая площадь кладки</th>
                            <td>Площадь наружной стороны стен. Равняется площади требующегося утеплителя,
                                если он заложен в проекте </td>
                        </tr>
                        <tr>
                            <th scope="row">Толщина стены</th>
                            <td>Толщина сложенной стены с учетом растворного шва (швов).
                                Допускаются незначительные отклонения от итогового результата
                                в зависимости от способа кладки </td>
                        </tr>
                        <tr>
                            <th scope="row">Количество кирпичей</th>
                            <td>Общее количество всех блоков, требующихся для возведения
                                стен по указанным параметрам</td>
                        </tr>
                        <tr>
                            <th scope="row">Общий вес и объем кирпичей</th>
                            <td>Чистый вес и объем кирпичей (без учета раствора и кладочной сетки).
                                Эти данные могут пригодится для выбора способа доставки </td>
                        </tr>
                        <tr>
                            <th scope="row">Кол-во раствора на всю кладку</th>
                            <td>Объем строительного раствора, который потребуется для укладки всех кирпичей.
                                Допускаются отклонения в показателе. Зависит от соотношения компонентов
                                и вводимых добавок</td>
                        </tr>
                        <tr>
                            <th scope="row">Кол-во рядов в кладке с учетом швов</th>
                            <td>Обуславливается высотой стен, размерами применяемых материалов и
                                толщиной кладочного раствора. Фронтоны не учитываются </td>
                        </tr>
                        <tr>
                            <th scope="row">Оптимальная высота стены</th>
                            <td>Рекомендуемая высота стены из кирпичей, которая, как правило, должна быть кратна
                                высоте самого кирпича вместе со швом. Вы можете согласиться с данной рекомендацией - тогда
                                 сделайте перерасчет, задав в калькуляторе новое значение высоты стен </td>
                        </tr>
                        <tr>
                            <th scope="row">Кол-во кладочной сетки</th>
                            <td>Требуемое количество кладочной сетки в метрах. Применяется для армирования кладки,
                                увеличивая монолитность и общую прочность конструкции </td>
                        </tr>
                        <tr>
                            <th scope="row">Примерный вес готовых стен</th>
                            <td>Вес готовых стен с учетом всех кирпичей и кладочного раствора,
                                но без учета веса утеплителя и облицовки</td>
                        </tr>
                        <tr>
                            <th scope="row">Нагрузка на фундамент от стен</th>
                            <td>Нагрузка без учета веса кровли и перекрытий. Данная величина нужна для выбора
                                характеристик прочности фундамента </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <? if($post->post_name == 'calculator-bricks'){
                    echo "<h2 class='slider-block-title'>Кирпич облицовочный</h2>";
                    get_template_part('template-parts/section', 'slider_blocks');
                } ?>


                <div class="breadcrumb-wrapp">
                    <?php
                    $myhome = '<img src="' . get_bloginfo('template_url') . '/img/kroshka.png" alt="img">';
                    if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('&nbsp;&gt;&gt;&nbsp;', array('home' => $myhome) );
                    ?>
                </div>

            </div>
        </div>
    </section>

<?php
get_footer();

