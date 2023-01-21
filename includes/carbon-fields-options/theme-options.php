<?php

if(!defined('ABSPATH')) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', __( 'Настройки сайта' ) )
    ->add_tab('Общие настройки', [
        Field::make( 'image', 'site_logo', 'Логотип' ),
    ] )

    ->add_tab('Контакты', [
        Field::make( 'text', 'site_phone', 'Телефон' ),
        Field::make( 'text', 'site_phone_digits', 'Телефон без пробелов' ),
    ] );
?>