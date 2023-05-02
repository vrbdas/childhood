<?php
// хук, когда к странице будут подключаться встроенные wp стили, туда ещё добавится стиль childhood_scripts
add_action( 'wp_enqueue_scripts', 'childhood_scripts');

// функция с кастомным названием childhood_scripts, использует встроенную в wp функцию wp_enqueue_style для того,
// чтобы правильно подключить стили, первый аргумент это название файла со стилями, чтобы отличить его от других, 
// второй аргумент это путь к файлу стилей.  get_stylesheet_uri это путь к главному файлу стиле style.css в корне темы
    // можно добавить ещё css из вручную указанной папки:
    // wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/styles/header.min.css' ); пробел точка пробел это конкатенация
    // можно добавить стили из cdn:
    // wp_enqueue_style( 'animate-style', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );

function childhood_scripts() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true); // подключение скриптов
}

add_theme_support( 'custom-logo' ); // добавляет поддержку кастомного логотипа
?>