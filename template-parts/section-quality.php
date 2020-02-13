<?php

?>

<div class="kachestva">
    <h2>ОЦЕНИТЕ ОСНОВНЫЕ КАЧЕСТВА ПОЛИСТИРОЛБЕТОНА</h2>

    <?
    if( have_rows('quality') ):
        $i = 0;
        $el = count(get_field('quality'));
        echo $el;
        while ( have_rows('quality') ) : the_row();
            ?>

            <div class="kach-item flex">
                <div class="kach-img"><img src="<? the_sub_field('image'); ?>" alt="img"></div>
                <p><span><? the_sub_field('title'); ?></span> - <? the_sub_field('description'); ?></p>
            </div>
            <div class="br-2">
                <img src="<? bloginfo('template_url'); ?>/img/br.png" alt="br">
            </div>

            <? if( $i == ($el / 2) ):?>

    <div class="cis flex column">
                <img src="<? bloginfo('template_url'); ?>/img/cis-1.png" alt="img" class="img-responsive">
                <p>Сможете ли вы назвать еще хоть один материал, который обладал бы таким колличеством преимуществ?</p>
                <img src="<? bloginfo('template_url'); ?>/img/cis-2.png" alt="img" class="img-responsive">
            </div>

                <div class="br-2">
                    <img src="<? bloginfo('template_url'); ?>/img/br.png" alt="br">
                </div>

            <? endif; ?>
              <?  $i++; ?>

        <? endwhile;
    endif;  ?>


<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-1.png" alt="img"></div>-->
<!--        <p><span>Теплоизоляция</span> - Имеет минимально низкий показатель теплопроводности. Уникальность пенополистиролбетона в максимальной теплоизоляционной характеристике. Возведенные конструкции ограждения, наружные поверхности не требуют дополнительных мер утепления.-->
<!--            30 см стены из полистиролбетона эквивалентно 180 см кирпичной кладки, теплопроводность — 0,7-0,1 Вт/мС (дерево — 0,14 — 0,18). В результате для конечного потребителя — снижение энергозатрат в 5 раз.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-2.png" alt="img"></div>-->
<!--        <p><span>Долговечность</span> - полистиролбетон со временем только набирает прочность, срок его службы составляет более 100 лет.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-3.png" alt="img"></div>-->
<!--        <p><span>ТЕХНОЛОГИЧНОСТЬ</span> - высокая скорость возведения стеновых конструкций из блоков полистиролбетона обусловлена лёгкостью и и точной геометрией блоков. Полистиролбетонные блоки легко пилятся обычной ножовкой, принимают любую геометрическую форму.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-4.png" alt="img"></div>-->
<!--        <p><span>ЭКОНОМИЧНОСТЬ</span> - При сравнении аналогичных стройматериалов по сопротивлению теплопередачи, полистирол бетон дает экономию стоимости квадратного метра поверхности на 25 %.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-5.png" alt="img"></div>-->
<!--        <p><span>ВЫСОКАЯ МОРОЗОСТОЙКОСТЬ</span> - научно-исследовательскими институтами проводились испытания на морозостойкость при амплитуде колебания температур от + 75С до — 40С. Испытания проводились на 70 циклах замораживания- оттаивания, потеря прочности составляет 1,5 - 1,8%. В сравнении с пенобетоном при одинаковых плотностях морозостойкость полистиролбетона значительно выше;</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-6.png" alt="img"></div>-->
<!--        <p><span>ПАРОПРОНИЦАЕМОСТЬ</span> - блоки «ДЫШАТ» как дерево и регулируют влажность поступающих воздушных масс. Нормализуют воздух.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-7.png" alt="img"></div>-->
<!--        <p><span>ЭКОЛОГИЧНОСТЬ</span> - в состав входит цемент, вода, смола древесная омыленная и высококачественный экологически безопасный, применяемый в пищевой промышленности, полистирол. 1-й класс пользования по эффективной суммарной удельной активности радионуклидов в сырьевых материалах.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-8.png" alt="img"></div>-->
<!--        <p><span>ПОЖАРОБЕЗОПАСНОСТЬ</span> - огнестойкость полистиролбетона достаточно высока (90мин). Класс горючести полистиролбетона — НГ1 (негорюч) . Это вызвано тем, что каждая гранула вспененного полистирола защищена плотной цементной оболочкой и при пожаре гранулы полистирола сжимаются, оставляя в местах контакта с открытым огнем пористый и довольно прочный цементный каркас. Этот материал также стоек к воздействию пластификаторов и большинства растворителей, бензина и дизельного топлива. Полистиролбетон обладает умеренной дымообразующей способностью по ГОСТ 12.1.044-89;</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-9.png" alt="img"></div>-->
<!--        <p><span>ТЕПЛОИНЕРТНОСТЬ</span> - помещения быстро нагреваются и медленно охлаждаются.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-10.png" alt="img"></div>-->
<!--        <p><span>ЛЕГКОСТЬ</span> - блоки 200x300x600 мм имеют вес не более 18 кг. Один блок полистиролбетона по объёму заменят 18 кирпичей, а это облегчает труд каменщика и уменьшает время укладки стен. Трудоёмкость возведения стен быстрее в 10 раз, чем из кирпича.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-11.png" alt="img"></div>-->
<!--        <p><span>Тонкий шов</span> - 2-3 мм за счет укладки блоков на клеящие растворы. Убираются мостики холода.</p>-->
<!--    </div>-->
<!---->
<!--    <div class="cis flex column">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/cis-1.png" alt="img" class="img-responsive">-->
<!--        <p>Сможете ли вы назвать еще хоть один материал, который обладал бы таким колличеством преимуществ?</p>-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/cis-2.png" alt="img" class="img-responsive">-->
<!--    </div>-->
<!---->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-12.png" alt="img"></div>-->
<!--        <p><span>прочность и ударовязкость</span> - полистиролбетона обусловлена тем, что основным его компонентом является цемент, который со временем только набирает наибольшую прочность. Таким образом происходит нарастание прочности полистиролбетона в процессе его эксплуатации; применяется в строительстве несущих, самонесущих и не несущих конструкций. Выдерживает распределённую нагрузку до 35 тонн на погонный метр при толщине стены 30см </p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-13.png" alt="img"></div>-->
<!--        <p><span>не нужна спецтехника</span> - Отпадает надобность в талях и подъемниках для доставки полистиролбетонных блоков на высоту.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-14.png" alt="img"></div>-->
<!--        <p><span>ГИДРОИЗОЛЯЦИЯ</span> - Влага не влияет на прочностные и теплоизолирующие свойства полистиролбетона. Поглощает 4% влаги, а это в 4 раза меньше в сравнении с кирпичом и деревом и в 5 раз, чем в пенобетоне. Этим объясняется отсутствие микроорганизмов (плесени и бактерий) внутри конструкции, что продлевает срок службы данного строительного материала. Стены из полистиролбетона имеют свойство «дышать», т.е. не препятствуют воздухообмену, а благодаря высокой паропроницаемости - регулировать влажность воздуха. В результате чего, в помещениях устанавливается благоприятный микроклимат, близкий к микроклимату деревянных домов. Так же полистиролбетон стоек к воздействию растворителей, бензина, масел, слабых растворов кислот и щелочей и солей почвы (пенобетон не обладает этим качеством);</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-15.png" alt="img"></div>-->
<!--        <p><span>ПЛАСТИЧНОСТЬ</span> - единственный материал из ячеистых бетонов, позволяющих «работать на изгиб». Прочность на изгиб у бетона 10% от прочности на сжатие, у полистиролбетона этот показатель — 60%.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-16.png" alt="img"></div>-->
<!--        <p><span>ШУМОИЗОЛЯЦИЯ</span> - Идеальный шумоизолятор для всех поверхностей здания: пола, потолка, стен. 30 см. стены из полистирол, блоков гасят более 70дБ. звука (шум проезжающего поезда), обеспечивая отличную шумоизоляцию.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-17.png" alt="img"></div>-->
<!--        <p><span>Удобство</span> - По габариту блок заменят кирпичные 18 штук. Масса блока в кг менее 22-х. Скорость возведения стен повышается в 10 раз. Два-три мастера могут возвести средних габаритов дом , в среднем за неделю-полторы.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-18.png" alt="img"></div>-->
<!--        <p><span>легкая обработка</span> - Легкость механической обработки: распиливание, вбивание гвоздей, штробление.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-19.png" alt="img"></div>-->
<!--        <p><span>отделываемость</span> - Возможность применить все известные отделочные работы: штукатурка, шпаклевка, выполнение фактуры, облицовка кирпичом, плиткой.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-20.png" alt="img"></div>-->
<!--        <p><span>Минимальная нагрузка на фундамент</span> за счет пористости. Применяется для застройки сложных по геологии местностей. Идеальное решение для уменьшения перерасхода металла, железобетона в конструкции.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-21.png" alt="img"></div>-->
<!--        <p><span>биостойкий материал</span> - Устойчив к гниению, не создает условий для развития микроорганизмов, грибковых и плесневых микроспор. Не служит приманкой грызунам.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-22.png" alt="img"></div>-->
<!--        <p><span>трещиностойкость</span> - Полистиролбетон - единственный стеновой материал, обладающий таким уникальным качеством (в отличие от керамзитобетона, пенобетона и газобетона, которые являются хрупкими материалами, не имеющими свойств пластичности или растяжения на изгиб). Благодаря этому вы получаете на стройке 100% купленного материала (в сравнении - бой при транспортировке пенобетонных или газосиликатных блоков составляет 7-10%).</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-23.png" alt="img"></div>-->
<!--        <p><span>компактность</span> - Увеличение полезной площади в следствие уменьшения толщины стеновых перегородок.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-24.png" alt="img"></div>-->
<!--        <p><span>Эффект термоса</span> - Зимой тепло, летом прохладно внутри здания. Для примера, в зимнее время дом в 100 кв. метров при выключенном отоплении теряет за сутки всего 1 градус.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-25.png" alt="img"></div>-->
<!--        <p><span>температурная устойчивость</span> - Устойчивость к резким скачкам температуры. Сохраняет все характеристики при разбеге – 60 / + 70.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
<!--    <div class="kach-item flex">-->
<!--        <div class="kach-img"><img src="--><?// bloginfo('template_url'); ?><!--/img/kach-img-26.png" alt="img"></div>-->
<!--        <p><span>тепло-энергоресурсосбережение</span> - Полистиролбетон входит в группу наиболее эффективных теплосберегающих материалов. Тепло сохраняет воздух, которого в гранулах полистирола содержится 98%.</p>-->
<!--    </div>-->
<!--    <div class="br-2">-->
<!--        <img src="--><?// bloginfo('template_url'); ?><!--/img/br.png" alt="br">-->
<!--    </div>-->
</div>
