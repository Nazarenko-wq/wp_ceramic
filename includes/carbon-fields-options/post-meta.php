<?php

if(!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', __('Дополниетельные поля') )
    ->show_on_page(14)

    ->add_tab('О нас', [
        Field::make( 'text', 'about_title', 'Заголовок' ),
        Field::make( 'text', 'about_content', 'Контент' ),
        Field::make( 'text', 'about_btn_text', 'Текст кнопки' )
            ->set_width(50),
        Field::make( 'text', 'about_btn_text_scroll_to', 'Класс секции для перехода по кнопке' )
        ->set_width(50),    
    ] );

Container::make( 'post_meta', __('Дополниетельные поля') )
->show_on_page(25)

->add_tab('Акции', [
    Field::make( 'media_gallery', 'gallery' ,'Галерея')
] )
?>