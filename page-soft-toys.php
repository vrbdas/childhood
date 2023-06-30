<?php
/*
Template Name: Мягкие игрушки
*/
?>

<?php
    get_header(); // вставляет сюда содержимое файла header.php
?>

<div class="toys">
    <div class="container">
    <h2 class="subtitle">Мягкие игрушки</h2>

<div class="toys__wrapper">

    <?php                
        // параметры по умолчанию
        $my_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'soft_toys',
            'orderby'     => 'date',
            'order'       => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        global $post;

        foreach( $my_posts as $post ){
            setup_postdata( $post );
    ?>

    <div class="toys__item" style="background-image: url(<?php

        if (has_post_thumbnail()) { // проверяет, установлена ли превью
            the_post_thumbnail_url(); // превью записи в посте
        } else {
            echo get_template_directory_uri() . '/assets/img/not-found.jpg'; // заглушка "нет фото"
        }

        ?>)">
        <div class="toys__item-info">
            <div class="toys__item-title"><?php the_title(); ?></div>
            <div class="toys__item-descr">
               <?php the_field('toys_descr'); ?>                           
            </div>
            <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Подробнее</a>
        </div>
    </div>

    <?php
        }
        
        wp_reset_postdata(); // сброс
    ?>

</div>
    </div>
</div>


<?php
    get_footer(); // вставляет сюда содержимое файла footer.php
?>

