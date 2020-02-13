<?php
// $posts = get_posts( array(
//     'numberposts'	=> 20,
//     'post_type'		=> 'product',
//     'taxonomy'		=> 'product_cat',
// ) );
?>

<div class="s-bloki">
    <div id="store-products" class="bloki flex between wrap">
        <!-- <?php foreach ( $posts as $post ) {
            setup_postdata($post);

            $product_id = $post->ID; 
            $product = wc_get_product($product_id); ?>

            <div class="block-item-t flex column m30">
                <a href="<? echo $product->get_permalink(); ?>"><? echo $product->get_image(); ?></a>
                <a href="" class="main-info-t"><p><? echo $product->get_name(); ?></p></a>
                <p class="about-t"><? the_field('size'); ?></p>
                <p class="price-t"><? echo $product->get_price(); ?> руб.</p>
                <p class="about-t">за штуку</p>
                <a href="<?php bloginfo('url'); ?>/?add-to-cart=<? echo $product_id ?>" class="btn-t add_to_cart_button ajax_add_to_cart">Добавить в корзину</a>
                <a href="<?php bloginfo('url'); ?>/?add-to-cart=<? echo $product_id ?>" class="buy-click">Купить в 1 клик</a>
            </div>

        <?php } ?> -->
    </div>
</div>


<?php //вывод категория тест
$product_categories = get_terms( 'product_cat', $args );
print_r($product_categories);
?>


<?php // СТАРОЕ
// $query = new WP_Query(array( 'post_type' => 'product', 'fields' => 'ids'));
// $prod_ids = $query -> posts;
?>

<!-- <div class="buy">
    <h2>Купить полистиролбетонные блоки</h2>
    <div class="buy-content">
        <form class="buy-form flex between">
            <p>Тип</p>
            <select>
                <option value="1">-----------------</option>
                <option value="2">Рядовой</option>
                <option value="3">Фасадный</option>
                <option value="4">Фасадный угловой</option>
                <option value="5">Перегородный</option>
            </select>
            <p>Плотность</p>
            <select>
                <option value="1">-----</option>
                <option value="2">D150</option>
                <option value="3">D200</option>
                <option value="4">D250</option>
                <option value="5">D300</option>
                <option value="6">D350</option>
                <option value="7">D400</option>
                <option value="8">D450</option>
                <option value="9">D500</option>
            </select>
            <p>Размеры блока</p>
            <select>
                <option value="1">---------------------</option>
                <option value="2">600x300x200 мм</option>
                <option value="3">300х300х200 мм</option>
                <option value="4">300х300х100 мм</option>
            </select>
        </form>
        <div class="sortirovka flex">
            <p>Сортировать:</p>
            <a href="">По цене</a>
            <img src="<? bloginfo('template_url'); ?>/img/sort.png" alt="img">
            <a href="">По рейтингу</a>
        </div>
    </div>
</div> -->

<!-- <div class="s-bloki">
    <div class="bloki flex between wrap">
<? foreach ($prod_ids as $key => $id): ?>
    <? $product = wc_get_product($id); ?>

        <div class="block-item-t flex column m30">
            <a href="<? echo $product->get_permalink(); ?>"><? echo $product->get_image(); ?></a>
            <a href="" class="main-info-t"><p><? echo $product->get_name(); ?></p></a>
            <p class="about-t"><? the_field('size'); ?></p>
            <p class="price-t"><? echo $product->get_price(); ?> руб.</p>
            <p class="about-t">за штуку</p>

            <a href="<?php bloginfo('url'); ?>/?add-to-cart=<? echo $id ?>" class="btn-t add_to_cart_button ajax_add_to_cart">Добавить в корзину</a>
            <a href="<?php bloginfo('url'); ?>/?add-to-cart=<? echo $id ?>" class="buy-click">Купить в 1 клик</a>
        </div>

<? endforeach; ?>
    </div>
</div>


<div class="str flex">
    <a href="" class="active-pagin">1</a>
    <a href="">2</a>
    <a href="">→</a>
</div> -->
